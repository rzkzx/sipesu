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
  <title><?= $data['title']; ?> &dash; SIPESU</title>

  <link rel="shortcut icon" href="<?= URLROOT; ?>/images/logo.png" type="image/x-icon">

  <!-- Fontfaces CSS-->
  <link href="<?= URLROOT; ?>/css/font-face.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="<?= URLROOT; ?>/vendors/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="<?= URLROOT; ?>/vendors/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/wow/animate.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/slick/slick.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
  <link href="<?= URLROOT; ?>/vendors/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
  <!-- Sweetalert 2 CSS -->
  <link rel="stylesheet" href="<?= URLROOT; ?>/vendors/sweetalert2/sweetalert2.min.css">
  <!-- Datatables css -->
  <link rel="stylesheet" type="text/css" href="<?= URLROOT; ?>/vendors/datatables/dataTables.bootstrap4.min.css" />
  <link href="<?= URLROOT; ?>/vendors/datatables/buttons.dataTables.min.css" rel="stylesheet" type="text/css">

  <!-- Main CSS-->
  <link href="<?= URLROOT; ?>/css/theme.css" rel="stylesheet" media="all">

  <style>
    input.placeholder-bold::placeholder {
      font-weight: bold;
    }

    .button-table {
      display: flex;
      margin-top: 20px;
      justify-content: flex-start;
      margin-left: 35px;
    }

    .button-table>a {
      margin-right: 10px;
    }

    @media (max-width: 991px) {
      .button-table {
        margin: 0 auto;
        margin-top: 20px;
      }
    }


    .nomor-table>input {
      width: 25px !important;
    }

    .tgl-table>input {
      width: 125px !important;
    }

    .jenis-table>input {
      width: 125px !important;
    }

    .avatar-upload {
      position: relative;
      max-width: 205px;
      margin: 20px auto;
    }

    .avatar-upload .avatar-edit {
      position: absolute;
      right: 12px;
      z-index: 1;
      top: 10px;
    }

    .avatar-upload .avatar-edit input {
      display: none;
    }

    .avatar-upload .avatar-edit label {
      display: inline-block;
      width: 34px;
      height: 34px;
      margin-bottom: 0;
      border-radius: 100%;
      background: #FFFFFF;
      border: 1px solid transparent;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
      cursor: pointer;
      font-weight: normal;
      transition: all .2s ease-in-out;
    }

    .avatar-upload .avatar-edit label:hover {
      background: #f1f1f1;
      border-color: #d6d6d6;
    }

    .avatar-upload .avatar-edit label i {
      color: #757575;
      position: absolute;
      top: 10px;
      left: 0;
      right: 0;
      text-align: center;
      margin: auto;
    }

    .avatar-preview {
      width: 192px;
      height: 192px;
      position: relative;
      border-radius: 100%;
      border: 6px solid #F8F8F8;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .avatar-preview div {
      width: 100%;
      height: 100%;
      border-radius: 100%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
  </style>

</head>

<body class="animsition">
  <div class="page-wrapper">
    <?php require APPROOT . '/views/layouts/sidebar.php'; ?>