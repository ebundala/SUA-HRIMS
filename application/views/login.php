<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--<div class="row justify-content-md-center">
<div class="col-md-auto">

<div class="card" style="width: 18rem;">
<div class"card-header">
<h5 class=" text text-center">Login to <?=$title?></h5>
</div>
<img class="card-img-top" src="<?=base_url()?>/assets/img/logo.jpg" alt="logo">
<div class="card-body">
    
<?php echo form_open('#'); ?>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>

    <div class="form-group text text-danger"><?= validation_errors(); ?></div>

    <input class="btn btn-primary" type="submit" name="submit" value="login" />

</form>
</DIV>
</div>


</div>
</div>-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="login to SUA-HRIMS">
  <meta name="author" content="SUA-CICT">
  <title><?=$title?></title>
  <!-- Bootstrap core CSS-->
  <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login to <?=$title?></div>
      <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <img  src="<?=base_url()?>/assets/img/logo.jpg" height='120px' style='padding-top:12px;' alt="sua logo">
        </div>
      </div>
      
      <div class="card-body">
      <?=form_open('#'); ?>
          <div class="form-group">
            <label for="inputEmail1">Email address</label>
            <input class="form-control" id="inputEmail1" type="email" name='email' aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="inputPassword1">Password</label>
            <input class="form-control" id="inputPassword1" type="password" name='password' placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember Password</label>
            </div>
          </div>
          <div class="form-group text text-danger"><?= validation_errors(); ?></div>
          <input type='submit' class="btn btn-primary btn-block" value='Login'>
        </form>
        <div class="text-center">
          
          <a class="d-block small" href="<?=base_url()?>welcome/recovery">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>