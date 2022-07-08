<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?=base_url('assets/img/mbl.png')?>">
  <title>Orgenizer - Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css')?>">
</head>
<body class="hold-transition login-page" style=" background-size: cover; background-position: center;  background-image: url(<?=base_url('assets/img/bg-utama.jpg');?>);">
<div class="login-box">
<div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Event </b>Orgenizer</a>
    </div>
  <!-- /.login-logo -->
  <div class="card">
    <br>
      <h5 href="#" class="text-center">Login</h5>
    <div class="card-body login-card-body">
    <?= $this->session->flashdata('message'); ?>
    <?php if(isset($_SESSION['gagal'])) { ?>
      <div class="alert alert-danger">
       <span><?php echo @$_SESSION['gagal'];?></span> 
      </div>
    <?php } ?>
     <?php echo form_open('login/prosesLogin',['action'=>'POST','autocomplete'=> false]);?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" value="" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" value="" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-2">
            <button type="submit" class="form-control btn btn-primary btn-block">Masuk</button>
        </div>
    <?php echo form_close(); ?>
      <p class="mb-0 text-center">Belum punya akun?
        <a href="<?= base_url();?>index.php/login/register">Daftar</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
</body>
</html>