<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('#'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />
     
    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create item" />

</form>
<?php
foreach ($query->result() as $row)
{
		echo "<h5>$row->title</h5>";
}
?>