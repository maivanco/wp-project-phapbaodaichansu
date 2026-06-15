<?php
get_header();

/* Start the Loop */

?>
<div class="container">
	<div id="page-detail" class="text-center">
		<h1 class="page-title color-main">404</h1>
		<p><?php _e('It looks like nothing was found at this location', 'sourcecode'); ?></p>
		<p><a class="button-m" href="<?php echo home_url(); ?>"><?php _e('Go to homepage'); ?></a></p>
	</div>
</div>

<?php

get_footer();
