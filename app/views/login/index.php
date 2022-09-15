<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Login &dash; SIPESU</title>

  <link rel="shortcut icon" href="<?= URLROOT; ?>/images/logo.png" type="image/x-icon">

  <!-- Fontfaces CSS-->
  <link href="<?= URLROOT; ?>/css/font-face.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="<?= URLROOT; ?>/vendors/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendors CSS-->
  <link href="<?= URLROOT; ?>/vendors/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/wow/animate.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/slick/slick.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="<?= URLROOT; ?>/css/theme.css" rel="stylesheet" media="all">

  <style>
    .page-wrapper {
      position: relative;
      height: 100vh;
      width: 100vw;
      overflow: hidden;
    }

    .bg-image {
      z-index: 1;
      height: 100vh;
      width: 100vw;
      margin: 0;
      padding: 0;
      position: absolute;
    }

    .bg-image img {
      object-fit: cover;
      height: 100%;
      width: 100%;
      filter: brightness(40%);
    }

    .page-content--bge5 {
      z-index: 10;
      position: relative;
      background: none;
    }
  </style>

</head>

<body class="animsition">
  <div class="page-wrapper">
    <div class="bg-image">
      <img src="<?= URLROOT; ?>/images/lawyer.jpg" alt="Background Image">
    </div>
    <div class="page-content--bge5">
      <div class="container">
        <div class="login-wrap">
          <div class="login-content">
            <div class="login-logo">
              <a href="#">
                <img src="<?= URLROOT; ?>/images/sipesu.png" alt="CoolAdmin">
              </a>
            </div>
            <div class="login-form">
              <?php flash(); ?>
              <form action="" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input class="au-input au-input--full <?php echo (!empty($data['username_err'])) ? 'is-invalid' : ''; ?>" type="text" name="username" placeholder="Username" value="<?php if (isset($_COOKIE["username"])) {
                                                                                                                                                                                        echo $_COOKIE["username"];
                                                                                                                                                                                      } ?>">
                  <?php if (!empty($data['username_err'])) { ?><span class="feedback-error"><i class="fa fa-info-circle"></i> <?php echo $data['username_err']; ?> </span> <?php } ?>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="au-input au-input--full <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" type="password" name="password" placeholder="Password" value="<?php if (isset($_COOKIE["userpassword"])) {
                                                                                                                                                                                            echo $_COOKIE["userpassword"];
                                                                                                                                                                                          } ?>">
                  <?php if (!empty($data['password_err'])) { ?><span class="feedback-error"><i class="fa fa-info-circle"></i> <?php echo $data['password_err']; ?> </span> <?php } ?>
                </div>
                <div class="login-checkbox">
                  <label>
                    <input type="checkbox" name="remember" <?php if (isset($_COOKIE["userpassword"]) && isset($_COOKIE["username"])) {
                                                              echo "checked";
                                                            } ?>>Ingat Saya
                  </label>
                </div>
                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Jquery JS-->
  <script src="<?= URLROOT; ?>/vendors/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap JS-->
  <script src="<?= URLROOT; ?>/vendors/bootstrap-4.1/popper.min.js"></script>
  <script src="<?= URLROOT; ?>/vendors/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendors JS       -->
  <script src="<?= URLROOT; ?>/vendors/slick/slick.min.js">
  </script>
  <script src="<?= URLROOT; ?>/vendors/wow/wow.min.js"></script>
  <script src="<?= URLROOT; ?>/vendors/animsition/animsition.min.js"></script>
  <script src="<?= URLROOT; ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js">
  </script>
  <script src="<?= URLROOT; ?>/vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="<?= URLROOT; ?>/vendors/counter-up/jquery.counterup.min.js">
  </script>
  <script src="<?= URLROOT; ?>/vendors/circle-progress/circle-progress.min.js"></script>
  <script src="<?= URLROOT; ?>/vendors/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="<?= URLROOT; ?>/vendors/chartjs/Chart.bundle.min.js"></script>
  <script src="<?= URLROOT; ?>/vendors/select2/select2.min.js">
  </script>

  <!-- Main JS-->
  <script src="<?= URLROOT; ?>/js/main.js"></script>

</body>

</html>
<!-- end document-->