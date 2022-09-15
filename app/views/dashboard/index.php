<?php require APPROOT . '/views/layouts/header.php'; ?>
<!-- STATISTIC-->
<section class="statistic">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <strong class="card-title mb-3">Profil Pegawai</strong>
        </div>
        <div class="card-body">
          <div class="mx-auto d-block">
            <img class="rounded-circle mx-auto d-block" style="height: 150px;" src="<?= URLROOT; ?>/images/avatar/<?php echo ($_SESSION['avatar']) ? $_SESSION['avatar'] : 'man.png' ?>" alt="<?= $_SESSION['username'] ?>">
            <h5 class="text-sm-center mt-2 mb-1"><?= $_SESSION['nama'] ?></h5>
            <div class="location text-sm-center">
              <i class="fa fa-id-badge" aria-hidden="true"></i> <?= $_SESSION['pangkat'] ?>
            </div>
          </div>
          <hr>
          <div class="card-text text-sm-center">
            <p>NIP : <?= $_SESSION['nip'] ?></p>
            <p>NIK : <?= $_SESSION['nik'] ?></p>
            <div>
              <i class="fa fa-envelope" aria-hidden="true"></i> <?= $_SESSION['email'] ?>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <strong class="card-title mb-3">Surat Keluar</strong>
        </div>
        <div class="card-body" style="padding: 20px 70px;">
          <div class="row">
            <?php
            $no = 1;
            foreach ($data['jenis_surat_keluar'] as $js_keluar) {
            ?>
              <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--green">
                  <h2 class="number" style="color:#fff;"><?= count($data['jumlah_surat'][$no]) ?></h2>
                  <span class="desc" style="color:rgba(255, 255, 255, 0.6);"><?= $js_keluar->nama_jenis ?></span>
                  <div class="icon">
                    <i class="zmdi zmdi-email"></i>
                  </div>
                </div>
              </div>
            <?php
              $no++;
            } ?>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- END STATISTIC-->

<?php require APPROOT . '/views/layouts/footer.php'; ?>