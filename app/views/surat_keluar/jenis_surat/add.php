<?php require APPROOT . '/views/layouts/header.php'; ?>

<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <?php flash(); ?>
      <div class="card">
        <div class="card-header">
          <strong>Form </strong> Tambah Jenis Surat Keluar
          <a href="<?= URLROOT ?>/suratkeluar/jenis_surat" class="btn btn-danger" style="float:right;">Kembali</a>
        </div>
        <div class="card-body card-block">
          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="nama_jenis" class=" form-control-label">Nama Jenis Surat Keluar</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="text" id="nama_jenis" name="nama_jenis" class="form-control" required>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fa fa-envelope"></i>&nbsp; Submit</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</div>

<?php require APPROOT . '/views/layouts/footer.php'; ?>