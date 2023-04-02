<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('url', 'download'));

        if ($this->session->userdata('status') != "Administrator") {
            redirect(base_url("auth"));
        } else {

            $this->load->model('M_default');
            $this->load->helper('url');
        }
    }

    function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('templates/sidebar', $data);
        $this->load->view('auth/dashboard', $data);
        $this->load->view('templates/footer');
    }

    function change_password()
    {
        $id = $this->input->post('id');
        $pw_lama = $this->input->post('pw_lama');
        $pw_baru = $this->input->post('pw_baru');
        $pw_baru2 = $this->input->post('pw_baru2');
        $username = $this->session->userdata('nama');

        $where2 = array(
            'id' => $id
        );

        $get_pw = $this->db->get_where('user', ['username' => $username])->row_array();
        $pw = $get_pw['password'];
        if (password_verify($pw_lama, $pw)) {
            if ($pw_baru == $pw_baru2) {
                $data = array(
                    'password' => password_hash($this->input->post('pw_baru'), PASSWORD_DEFAULT),
                );
                $this->M_default->update($where2, $data, 'user');
                $this->session->set_flashdata('message', 'data telah diperbarui kedalam sistem, terima kasih !');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', 'data tidak sesuai, cek kembali password anda');
                redirect('dashboard');
            }
        } else {
            $this->session->set_flashdata('message', 'data tidak sesuai, cek kembali password anda');
            redirect('dashboard');
        }
    }

    function users()
    {
        $data['title'] = 'Users';
        $data['user'] = $this->M_default->getall('user')->result();
        $this->load->view('templates/sidebar', $data);
        $this->load->view('users/akun', $data);
        $this->load->view('templates/footer');
    }

    function add_user()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));
        $nama = htmlspecialchars($this->input->post('nama'));
        $level = htmlspecialchars($this->input->post('level'));

        $data = array(
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'nama' => $nama,
            'level' => $level
        );

        $this->M_default->input($data, 'user');
        $this->session->set_flashdata('message', 'data telah ditambahkan kedalam sistem, terima kasih !');
        redirect('users');
    }

    function delete_user($id)
    {
        $where = array('id' => $id);
        $this->M_default->hapus($where, 'user');
        $this->session->set_flashdata('message', 'data telah dihapus dari dalam sistem, terima kasih !');
        redirect('users');
    }

    function update_user()
    {
        $id = $this->input->post('id');
        $username = htmlspecialchars($this->input->post('username'));
        $nama = htmlspecialchars($this->input->post('nama'));
        $level = htmlspecialchars($this->input->post('level'));
        $data = array(
            'username' => $username,
            'level' => $level,
            'nama' => $nama
        );
        $where = array(
            'id' => $id
        );

        $this->M_default->update($where, $data, 'user');
        $this->session->set_flashdata('message', 'data telah diperbarui dari dalam sistem, terima kasih !');
        redirect('users');
    }

    

    
    
}