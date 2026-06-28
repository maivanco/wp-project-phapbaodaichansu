<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();

?>

<section class="breadcrumbs py-4">
	<div class="container">
		<?php
		if (function_exists('yoast_breadcrumb')) {
			yoast_breadcrumb();
		}
		?>
	</div>
</section>

<div class="page-wrapper">
	<div class="container
		after:content-[''] after:block after:clear-both">
			<?php the_title();?>
			<?php the_content(); ?>
		</div>
	</div>
<?php
endwhile; // End of the loop.

get_footer();
