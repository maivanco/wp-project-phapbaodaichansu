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

<section class="woocommerce single-product">
	<div class="container product after:content-[''] after:block after:clear-both">

			<?php woocommerce_show_product_images(); ?>

			<aside class="product-info float-right w-[52%] pl-8">
				<?php woocommerce_template_single_title(); ?>

				<div class="my-4 p-4">
					<blockquote class="bg-cream rounded-2xl relative p-8 [&_p]:mb-4">
						<?php load_partial('html/icon-quote');?>
						<?php woocommerce_template_single_excerpt(); ?>
					</blockquote>
				</div>

				<div class="mb-2"><?php woocommerce_template_single_price(); ?></div>
				<?php woocommerce_template_single_add_to_cart(); ?>
				<?php load_partial('html/meta-product'); ?>
				<?php woocommerce_template_single_sharing(); ?>
			</aside>
	</div>

</section>
<?php
endwhile; // End of the loop.

get_footer();
