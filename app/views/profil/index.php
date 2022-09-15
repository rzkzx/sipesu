<?php require APPROOT . '/views/layouts/header.php'; ?>

<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <?php flash(); ?>
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <strong><i class="fa fa-user"></i>&nbsp; Profile</strong>
            </div>
            <div class="card-body">
              <form action="<?= URLROOT; ?>/profile/changeProfile" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <div class="avatar-upload">
                      <div class="avatar-edit">
                        <input type="file" id="imageUpload" name="avatar" onchange="return avatarUpload()" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"><i class="fa fa-pencil-alt"></i></label>
                      </div>
                      <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(<?= URLROOT; ?>/images/avatar/<?php echo ($_SESSION['avatar']) ? $_SESSION['avatar'] : 'man.png'; ?>);">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $data['user']->nama ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                  <div class="col-sm-9">
                    <input type="text" name="nip" class="form-control" id="nip" placeholder="Email" value="<?= $data['user']->nip ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="pangkat" class="col-sm-3 col-form-label">Pangkat</label>
                  <div class="col-sm-9">
                    <input type="text" name="pangkat" class="form-control" id="pangkat" value="<?= $data['user']->pangkat ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                  <div class="col-sm-9">
                    <input type="text" name="nik" class="form-control" id="nik" placeholder="Email" value="<?= $data['user']->nik ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" id="golongan" value="<?= $data['user']->email ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>&nbsp;Perbarui</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Form Basic -->
          <div class="card">
            <div class="card-header">
              <strong><i class="fa fa-lock"></i>&nbsp; Ganti Password</strong>
            </div>
            <div class="card-body">
              <form action="<?= URLROOT; ?>/profile/changePassword" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="passwordSaatIni">Password saat ini</label>
                  <input type="password" name="password" class="form-control" id="passwordSaatIni" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="passwordBaru">Password Baru</label>
                  <input type="password" name="password_baru" class="form-control" id="passwordBaru">
                </div>
                <div class="form-group">
                  <label for="konfPasswordBaru">Konfirmasi Password Baru</label>
                  <input type="password" name="konfirmasi_password_baru" class="form-control" id="konfPasswordBaru">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>&nbsp;Perbarui</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php require APPROOT . '/views/layouts/footer.php'; ?>

<script>
  function avatarUpload() {
    var inputFile = document.getElementById('imageUpload');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.png|\.jpg|\.jpeg)$/i;
    if (inputFile.files[0].size > 2000 * 1000) { // ini untuk ukuran1000000 untuk 1 MB.
      alert("Maaf. Foto Terlalu Besar ! Maksimal Upload 2mb");
      inputFile.value = '';
      return false;
    };
    if (!ekstensiOk.exec(pathFile)) {
      alert('Silakan upload file yang memiliki ekstensi .png/.jpg/.jpeg');
      inputFile.value = '';
      return false;
    } else {
      //Pratinjau gambar
      if (inputFile.files && inputFile.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
          $('#imagePreview').hide();
          $('#imagePreview').fadeIn(650);
        };
        reader.readAsDataURL(inputFile.files[0]);
      }
    }
  }
</script>