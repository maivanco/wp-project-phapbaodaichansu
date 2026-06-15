<?php
get_header();


?>

<?php get_template_part('template-parts/sec-page-banner'); ?>

<section id="sec-relative-posts" class="sec has-pb sec-basic-cards bg-medium-gray">
	<div class="container">
		<?php render_title('sec_title', $sec_title, 'text-center'); ?>
		<div class="l-relative-posts">
			<div class="row">
				<?php
				while (have_posts()) : the_post();
					echo '<div class="col-md-4 col-sm-6 col-12">';
					get_template_part('template-parts/item/article');
					echo '</div>';
				endwhile;
				?>
			</div>

			<div class="pagenavi-content text-center">
				<?php
				wp_pagenavi();
				?>
			</div><!--pagenavi_content-->
			<?php
			wp_reset_postdata();
			?>

		</div>
	</div>
</section>

<?php

get_footer();
