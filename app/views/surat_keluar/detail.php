<?php require APPROOT . '/views/layouts/header.php'; ?>
<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">

      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <strong>Permintaan Nomor Surat</strong>
            <a href="<?= URLROOT ?>/suratkeluar" class="btn btn-danger" style="float:right;">Kembali</a>
          </div>
          <div class="card-body card-block">
            <div class="form-group">
              <label class=" form-control-label">Jenis Surat</label>
              <input type="text" class="form-control" value="<?= $data['surat_keluar']->nama_jenis ?>">
            </div>
            <div class="form-group">
              <label class=" form-control-label">Nomor Surat</label>
              <input type="text" class="form-control" value="<?= $data['surat_keluar']->nomor ?>">
            </div>
            <div class="form-group">
              <label class=" form-control-label">Tanggal</label>
              <input type="text" class="form-control" value="<?= dateID($data['surat_keluar']->tanggal) ?>">
            </div>
            <div class="form-group">
              <label class=" form-control-label">Asal</label>
              <input type="text" class="form-control" value="<?= $data['surat_keluar']->asal ?>">
            </div>
            <div class="form-group">
              <label class=" form-control-label">Perihal</label>
              <textarea class="form-control"><?= $data['surat_keluar']->perihal ?></textarea>
            </div>
            <div class="form-group">
              <label class=" form-control-label">Tujuan</label>
              <input type="text" class="form-control" value="<?= $data['surat_keluar']->tujuan ?>">
            </div>
            <div class="form-group">
              <label class=" form-control-label">Lampiran</label>
              <input type="text" class="form-control" value="<?= $data['surat_keluar']->lampiran ?>">
            </div>
            <div class="form-group">
              <label class=" form-control-label">File Lampiran</label>
              <br>
              <?php
              if ($data['surat_keluar']->file_lampiran) {
              ?>
                <a href="<?= URLROOT ?>/files/lampiran/<?= $data['surat_keluar']->file_lampiran ?>" class="btn btn-primary"><?= $data['surat_keluar']->file_lampiran ?></a>
              <?php
              } else {
              ?>
                <label class="text-danger">Tidak ada file lampiran</label>
              <?php
              }
              ?>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<?php require APPROOT . '/views/layouts/footer.php'; ?>