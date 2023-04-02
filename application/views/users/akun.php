<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold"><?= $title?> page</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><?= $title?></li>
            </ol>
          </div>
            

          <!-- Row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#M_Add_User" type="button">
                    <i class="fas fa-fw fa-plus"></i>
                </a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th width="30">NO.</th>
                        <th>AKSI</th>
                        <th>NAMA LENGKAP</th>
                        <th>USERNAME</th>
                        <th>LEVEL</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($user as $u) {
                    ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td width="150">
                            <button type="button" data-toggle="modal" data-target="#M_Edit_User" id="btn-edit"
                                class="btn btn-primary" data-id="<?= $u->id; ?>"
                                data-username="<?= $u->username; ?>" data-password="<?= $u->password; ?>"
                                data-nama="<?= $u->nama; ?>">
                                <i class="fas fa-fw fa-edit"></i>
                            </button>

                            <a href="delete-users/<?= $u->id ?>" class="btn btn-danger btn-hapus">
                                <i class="fas fa-fw fa-trash"></i>
                            </a>
                        </td>
                        <td><?php echo $u->nama ?></td>
                        <td><?php echo $u->username ?></td>
                        <td><?php echo $u->level ?></td>
                    </tr>
                    <?php } ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
        </div>
        <!---Container Fluid-->
      </div>

<div class="modal fade" id="M_Add_User" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Tambah Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="<?= base_url('add-users'); ?>">
                    <label>Username : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Username" name="username" class="form-control"
                            autocomplete="username" required>
                    </div>
                    <label>Password : </label>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password" class="form-control"
                            autocomplete="current-password" required>
                    </div>

                    <label>Nama lengkap : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Nama Lengkap" name="nama" class="form-control" required>
                    </div>

                    <label>Level login : </label>
                    <div class="form-group">
                        <input type="text" value="Administrator" name="level" class="form-control" readonly>
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

<div class="modal fade" id="M_Edit_User" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Perbarui Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="<?= base_url('update-users'); ?>">
                    <input type="hidden" placeholder="Username" name="id" id="id-akun" class="form-control">
                    <label>Username : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Username" name="username" class="form-control"
                            id="username-akun" required>
                    </div>
                    <label>Nama lengkap : </label>
                    <div class="form-group">
                        <input type="text" placeholder="Nama Lengkap" name="nama" class="form-control" id="nama-akun"
                            required>
                    </div>

                    <label>Level login : </label>
                    <div class="form-group">
                        <input type="text" value="Administrator" name="level" class="form-control" readonly>
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
    $(document).on('click', '#btn-edit', function() {
        $('.modal-body #id-akun').val($(this).data('id'));
        $('.modal-body #username-akun').val($(this).data('username'));
        $('.modal-body #password-akun').val($(this).data('password'));
        $('.modal-body #nama-akun').val($(this).data('nama'));
    });
</script>

     