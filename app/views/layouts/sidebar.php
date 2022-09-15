<!-- SIDEBAR -->
<aside class="menu-sidebar2">
  <div class="logo">
    <a href="#">
      <img src="<?= URLROOT; ?>/images/sipesu.png" alt="Cool Admin" />
    </a>
  </div>
  <div class="menu-sidebar2__content js-scrollbar1">
    <div class="account2">
      <div class="image img-cir img-120">
        <img src="<?= URLROOT; ?>/images/avatar/<?php echo ($_SESSION['avatar']) ? $_SESSION['avatar'] : 'man.png' ?>" alt="John Doe" />
      </div>
      <h4 class="name"><?= $_SESSION['nama'] ?></h4>
      <span class="pangkat-span"><?= $_SESSION['pangkat'] ?></span>
    </div>
    <nav class="navbar-sidebar2">
      <ul class="list-unstyled navbar__list">
        <li class="<?php echo ($data['menu'] == 'Dashboard') ? 'active' : ''; ?>">
          <a href="<?= URLROOT; ?>/dashboard">
            <i class="fas fa-tachometer-alt"></i>Dashboard
          </a>
        </li>
        <li class="<?php echo ($data['menu'] == 'Profile') ? 'active' : ''; ?>">
          <a href="<?= URLROOT; ?>/profile">
            <i class="fas fa-user"></i>Profile</a>
        </li>
        <li class="has-sub">
          <a class="js-arrow <?php echo ($data['menu'] == 'Surat Keluar') ? 'open' : ''; ?>" href="#">
            <i class="fas fa-envelope-open"></i>Surat Keluar
            <span class="arrow <?php echo ($data['menu'] == 'Surat Keluar') ? 'up' : ''; ?>">
              <i class="fas fa-angle-down"></i>
            </span>
          </a>
          <ul class="list-unstyled navbar__sub-list js-sub-list" style="<?php echo ($data['menu'] == 'Surat Keluar') ? 'display:block;' : ''; ?>">
            <li class="<?php echo ($data['submenu'] == 'Jenis Surat Keluar') ? 'active' : ''; ?>">
              <a href="<?= URLROOT; ?>/suratkeluar/jenis_surat">
                Jenis Surat</a>
            </li>
            <li class="<?php echo ($data['submenu'] == 'Permintaan Nomor Surat') ? 'active' : ''; ?>">
              <a href="<?= URLROOT; ?>/suratkeluar">
                Permintaan Nomor Surat</a>
            </li>
          </ul>
        </li>
        <?php if (Middleware::admin()) {
        ?>
          <li class="<?php echo ($data['menu'] == 'Manajemen User') ? 'active' : ''; ?>">
            <a href="<?= URLROOT; ?>/users">
              <i class="fas fa-users"></i>Manajemen User</a>
          </li>
        <?php
        } ?>
      </ul>
    </nav>
  </div>
</aside>
<!-- END SIDEBAR -->
<!-- PAGE CONTAINER-->
<div class="page-container2">
  <!-- HEADER DESKTOP-->
  <header class="header-desktop2">
    <div class="section__content section__content--p30">
      <div class="container-fluid">
        <div class="header-wrap2">
          <div class="logo d-block d-lg-none">
            <a href="#">
              <img src="<?= URLROOT; ?>/images/sipesu-white.png" alt="SIPESU" style="object-fit:cover;height:70px;" />
            </a>
          </div>
          <div class="header-button2">
            <div class="header-button-item hide-btn-resp btn-sign-out">
              <a href="<?= URLROOT; ?>/login/logout">Sign Out</a>
            </div>
            <div class="header-button-item js-sidebar-btn show-btn-header">
              <i class="zmdi zmdi-menu"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
    <div class="logo">
      <a href="#">
        <img src="<?= URLROOT; ?>/images/sipesu.png" alt="Cool Admin" />
      </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar2">
      <div class="account2">
        <div class="image img-cir img-120">
          <img src="<?= URLROOT; ?>/images/avatar/<?php echo ($_SESSION['avatar']) ? $_SESSION['avatar'] : 'man.png' ?>" alt="John Doe" />
        </div>
        <h4 class="name"><?= $_SESSION['nama'] ?></h4>
        <span class="pangkat-span"><?= $_SESSION['pangkat'] ?></span>
        <a href="<?= URLROOT; ?>/login/logout">Sign out</a>
      </div>
      <nav class="navbar-sidebar2">
        <ul class="list-unstyled navbar__list">
          <li class="<?php echo ($data['menu'] == 'Dashboard') ? 'active' : ''; ?>">
            <a href="<?= URLROOT; ?>/dashboard">
              <i class="fas fa-tachometer-alt"></i>Dashboard
            </a>
          </li>
          <li class="<?php echo ($data['menu'] == 'Profile') ? 'active' : ''; ?>">
            <a href="<?= URLROOT; ?>/profile">
              <i class="fas fa-user"></i>Profile</a>
          </li>
          <li class="has-sub">
            <a class="js-arrow <?php echo ($data['menu'] == 'Surat Keluar') ? 'open' : ''; ?>" href="#">
              <i class="fas fa-envelope-open"></i>Surat Keluar
              <span class="arrow <?php echo ($data['menu'] == 'Surat Keluar') ? 'up' : ''; ?>">
                <i class="fas fa-angle-down"></i>
              </span>
            </a>
            <ul class="list-unstyled navbar__sub-list js-sub-list" style="<?php echo ($data['menu'] == 'Surat Keluar') ? 'display:block;' : ''; ?>">
              <li class="<?php echo ($data['submenu'] == 'Jenis Surat Keluar') ? 'active' : ''; ?>">
                <a href="<?= URLROOT; ?>/suratkeluar/jenis_surat">
                  Jenis Surat</a>
              </li>
              <li class="<?php echo ($data['submenu'] == 'Permintaan Nomor Surat') ? 'active' : ''; ?>">
                <a href="<?= URLROOT; ?>/suratkeluar">
                  Permintaan Nomor Surat</a>
              </li>
            </ul>
          </li>
          <?php if (Middleware::admin()) {
          ?>
            <li class="<?php echo ($data['menu'] == 'Manajemen User') ? 'active' : ''; ?>">
              <a href="<?= URLROOT; ?>/users">
                <i class="fas fa-users"></i>Manajemen User</a>
            </li>
          <?php
          } ?>
        </ul>
      </nav>
    </div>
  </aside>
  <!-- END HEADER DESKTOP-->

  <!-- BREADCRUMB-->
  <section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="au-breadcrumb-content">
              <div class="au-breadcrumb-left">
                <span class="au-breadcrumb-span">You are here:</span>
                <ul class="list-unstyled list-inline au-breadcrumb__list">
                  <li class="list-inline-item active">
                    <a href="<?= URLROOT ?>/<?= $data['url'] ?>"><?= $data['menu'] ?></a>
                  </li>
                  <li class="list-inline-item seprate">
                    <span><?php if (isset($data['submenu'])) echo '/'; ?></span>
                  </li>
                  <li class="list-inline-item"><?php if (isset($data['submenu'])) echo $data['submenu']; ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END BREADCRUMB-->