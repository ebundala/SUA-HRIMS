<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row justify-content-md-center">
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
</div>
