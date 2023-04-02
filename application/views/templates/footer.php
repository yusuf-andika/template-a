 <!-- Footer -->
 <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="http://funtech-techno.rf.gd/" target="_blank">Funtech Technology</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="<?= base_url('assets/backend/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/backend/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/backend/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/backend/') ?>js/ruang-admin.min.js"></script>
  <!-- Page level plugins -->
  <script src="<?= base_url('assets/backend/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/backend/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/backend/'); ?>sweetalert2/package/dist/sweetalert2.all.js"></script>
  
  
  <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>

    
    <script type="text/javascript">
    const dataflash = $('.flash-data').data('flashdata');
    if (dataflash) {
        Swal.fire({
            title: 'Berhasil',
            text: 'Sisfolah menyatakan ' + dataflash,
            confirmButtonColor: '#311b92',
            icon: 'success'
        });
    }

    const dataflash2 = $('.flash-data2').data('flashdata2');
    if (dataflash2) {
        Swal.fire({
            title: 'Terjadi kesalahan',
            text: 'Sisfolah menyatakan ' + dataflash2,
            icon: 'error'
        });
    }


    $('.btn-konfirm').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Yakin Mencetak?',
            text: "File akan ditampilkan dalam bentuk PDF, pilih Save untuk menyimpan file",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#311b92',
            cancelButtonColor: '#95a5a6',
            confirmButtonText: 'Export!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
    });



    $('.btn-hapus').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data yang telah dihapus tidak dapat dikembalikan kembali.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#311b92',
            cancelButtonColor: '#95a5a6',
            confirmButtonText: 'Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
    });


    </script>

</body>


<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Anda Yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">×</span>
                </button>
            </div>
            <div class="modal-body">dengan meng-klik icon check pada pilihan dibawah ini akan mengeluarkan anda dari sistem.</div>
            <div class="modal-footer">
                <button class="btn btn-outline-secondary" type="button" data-dismiss="modal"><i
                        class="fas fa-fw fa-times"></i></button>
                <a class="btn btn-primary" href="<?= base_url('logout'); ?>"><i class="fas fa-fw fa-check"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="change-pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Ubah Password</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="<?= base_url('change-password'); ?>">
                    <input type="hidden" ng-hide="true" name="id" id="id-acc" autocomplete="off">
                    <label>Password Lama : </label>
                    <div class="form-group">
                        <input type="password" placeholder="Password Lama" name="pw_lama" class="form-control" required
                            autocomplete="current-password">
                    </div>
                    <hr>
                    <label>Password Baru : </label>
                    <div class="form-group">
                        <input type="password" name="pw_baru" placeholder="Password Baru" class="form-control" required
                            autocomplete="new-password">
                    </div>

                    <label>Ulangi Password Baru : </label>
                    <div class="form-group">
                        <input type="password" name="pw_baru2" placeholder="Ulangi Password Baru" class="form-control"
                            required autocomplete="new-password">
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">
                    <i class="fas fa-fw fa-times"></i>
                </button>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-fw fa-check"></i>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).on('click', '#btn-pass', function() {
    $('.modal-body #id-acc').val($(this).data('id'));
});
</script>

</html>