<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs

    Muhamad Ahmadin
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description"
    content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords"
    content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>UTS WEB Muhamad Ahmadin K1 190511024</title>

  <!-- Favicons-->
  <link rel="icon" href="<?= base_url() ?>images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->

  <link href="<?= base_url() ?>/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?= base_url() ?>/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->
  <link href="<?= base_url() ?>/css/custom/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?= base_url() ?>/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
    media="screen,projection">

    <style>
      .table-info-demo tr td {
        border: 1px solid black;
      }
    </style>

</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form action="<?= base_url('/login/auth') ?>" method="post" class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?= base_url('') ?>/images/profile.jpg" alt=""
              class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Login</p>
          </div>
        </div>
        <?php if(session()->getFlashdata('msg')):?>
        <div class="text-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
        <?= $this->include('components/validation_checker'); ?>
        <div class="row margin">
          <p class="login-box-msg" style="font-weight: bold;">Demo Akun</p>
          <div class="table-responsive">
            <table class="table-info-demo">
              <tr>
                <td>username</td>
                <td>admin</td>
              </tr>
              <tr>
                <td>password</td>
                <td>123</td>
              </tr>
            </table>
          </div>
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="email" name="email" type="text" value="<?= set_value('email') ?>">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">Login</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="<?= base_url('register') ?>">Registrasi Sekarang!</a></p>
          </div>
        </div>

      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?= base_url() ?>/js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?= base_url() ?>/js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="<?= base_url() ?>/js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?= base_url() ?>/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="<?= base_url() ?>/js/plugins.min.js"></script>
  <!--custom-script.js - Add your own theme custom JS-->
  <script type="text/javascript" src="<?= base_url() ?>/js/custom-script.js"></script>

</body>

</html>