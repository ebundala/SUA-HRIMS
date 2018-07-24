<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
   
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>