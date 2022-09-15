<?php require APPROOT . '/views/layouts/header.php'; ?>

<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <?php flash(); ?>
      <div class="card">
        <div class="card-header">
          <strong>Form </strong> Pendaftaran User
          <a href="<?= URLROOT ?>/users" class="btn btn-danger" style="float:right;">Kembali</a>
        </div>
        <div class="card-body card-block">
          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="nip" class=" form-control-label">NIP</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="text" id="nip" name="nip" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="nik" class=" form-control-label">NIK</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="text" id="nik" name="nik" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="nama" class=" form-control-label">Nama</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="text" id="nama" name="nama" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="pangkat" class=" form-control-label">Pangkat</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="text" id="pangkat" name="pangkat" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="username" class=" form-control-label">Username</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="text" id="username" name="username" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="email" class=" form-control-label">Email</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="email" id="email" name="email" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="password" class=" form-control-label">Password</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="password" id="password" name="password" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="konfPassword" class=" form-control-label">Konfirmasi Password</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="password" id="konfPassword" name="konfPassword" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="role" class=" form-control-label">Role</label>
              </div>
              <div class="col-12 col-md-10">
                <select name="role" id="role" class="form-control">
                  <option disabled>-- Pilih Role --</option>
                  <option value="pegawai">Pegawai</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i>&nbsp; Submit</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</div>

<?php require APPROOT . '/views/layouts/footer.php'; ?>