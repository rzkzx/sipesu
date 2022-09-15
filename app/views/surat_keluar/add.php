<?php require APPROOT . '/views/layouts/header.php'; ?>

<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <?php flash(); ?>
      <div class="card">
        <div class="card-header">
          <strong>Form </strong> Permintaan Nomor Surat
          <a href="<?= URLROOT ?>/suratkeluar" class="btn btn-danger" style="float:right;">Kembali</a>
        </div>
        <div class="card-body card-block">
          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="tanggal" class=" form-control-label">Tanggal Surat</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="date" id="tanggal" name="tanggal" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="jenis_surat" class=" form-control-label">Jenis Surat</label>
              </div>
              <div class="col-12 col-md-10">
                <select name="jenis_surat" id="jenis_surat" class="form-control">
                  <option disabled selected>-- Pilih Jenis Surat --</option>
                  <?php foreach ($data['jenis_surat'] as $js) {
                  ?>
                    <option value="<?= $js->id ?>"><?= $js->nama_jenis ?></option>
                  <?php
                  } ?>
                </select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="nomor" class=" form-control-label">Nomor Surat</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="text" id="nomor" name="nomor" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="asal" class=" form-control-label">Asal</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="text" id="asal" name="asal" class="form-control" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="perihal" class=" form-control-label">Perihal</label>
              </div>
              <div class="col-12 col-md-10">
                <textarea id="perihal" name="perihal" class="form-control" required></textarea>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="tujuan" class=" form-control-label">Tujuan</label>
              </div>
              <div class="col-12 col-md-10">
                <textarea id="tujuan" name="tujuan" class="form-control" required></textarea>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="lampiran" class=" form-control-label">Lampiran</label>
              </div>
              <div class="col-12 col-md-10">
                <textarea id="lampiran" name="lampiran" class="form-control"></textarea>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-2">
                <label for="file_lampiran" class=" form-control-label">Upload Lampiran</label>
              </div>
              <div class="col-12 col-md-10">
                <input type="file" id="file_lampiran" name="file_lampiran" class="form-control" onchange="return fileValidation()">
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

<script>
  function fileValidation() {
    var inputFile = document.getElementById('file_lampiran');
    var pathFile = inputFile.value;
    if (inputFile.files[0].size > 5000 * 1000) { // ini untuk ukuran1000000 untuk 1 MB.
      alert("Maaf. File Terlalu Besar! Maksimal File Upload 5mb");
      inputFile.value = '';
      return false;
    };
  }
</script>