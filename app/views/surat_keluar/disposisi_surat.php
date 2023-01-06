<?php require APPROOT . '/views/layouts/header.php'; ?>
<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">

      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <strong>Disposisi Nomor Surat</strong>
            <a href="<?= URLROOT ?>/suratkeluar/disposisi" class="btn btn-danger" style="float:right;">Kembali</a>
          </div>
          <div class="card-body card-block">
            <?php flash() ?>
            <form action="" method="post">
              <input type="hidden" name="id" value="<?= $data['surat_keluar']->id ?>">
              <div class="form-group">
                <label class=" form-control-label">Jenis Surat</label>
                <input type="text" class="form-control" value="<?= $data['surat_keluar']->nama_jenis ?>" readonly>
              </div>
              <div class="form-group">
                <label class=" form-control-label">Nomor Surat</label>
                <div class="row">
                  <div class="col-1">
                    <input type="text" class="form-control" value="<?= $data['surat_keluar']->kode ?>-" readonly>
                  </div>
                  <div class="col-3">
                    <input type="text" class="form-control" name="nomor" value="<?= $data['surat_keluar']->nomor ?>">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" value="<?= $data['surat_keluar']->detail_nomor ?>/<?= $data['surat_keluar']->tanggal_nomor ?>" readonly>
                  </div>
                  <div class="col">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class=" form-control-label">Tanggal</label>
                <input type="text" class="form-control" value="<?= dateID($data['surat_keluar']->tanggal) ?>" readonly>
              </div>
              <div class="form-group">
                <label class=" form-control-label">Asal</label>
                <input type="text" class="form-control" value="<?= $data['surat_keluar']->asal ?>" readonly>
              </div>
              <div class="form-group">
                <label class=" form-control-label">Perihal</label>
                <textarea class="form-control" readonly><?= $data['surat_keluar']->perihal ?></textarea>
              </div>
              <div class="form-group">
                <label class=" form-control-label">Tujuan</label>
                <input type="text" class="form-control" value="<?= $data['surat_keluar']->tujuan ?>" readonly>
              </div>
              <div class="form-group">
                <label class=" form-control-label">Lampiran</label>
                <input type="text" class="form-control" value="<?= $data['surat_keluar']->lampiran ?>" readonly>
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
                <div class="card-footer mt-3">
                  <button type="submit" class="btn btn-info"><i class="fa fa-mail-forward"></i>&nbsp; Disposisi Surat</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>


<?php require APPROOT . '/views/layouts/footer.php'; ?>