<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();

?>

<div class="page-wrapper">
	<?php 
	if(have_rows('sections')) {
		while(have_rows('sections')): the_row();
			$layout = get_row_layout();
			load_partial('sections/' .$layout);
		endwhile;
	}
	?>
</div>
<?php
endwhile; // End of the loop.

get_footer();
