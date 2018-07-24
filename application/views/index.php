<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('#'); ?>

    <label for="title">email</label>
    <input type="input" name="email" type="email" /><br />
     
    <label for="text">password</label>
    <input name="password" type="password" /><br />

    <input type="submit" name="submit" value="login" />

</form>
