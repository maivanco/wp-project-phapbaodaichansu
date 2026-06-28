<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();
	global $product;

?>

<div class="woocommerce single-product">
	<div class="container mt-4">
		<?php wc_print_notices(); ?>
	</div>

	<section class="breadcrumbs py-4">
		<div class="container">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb();
			}
			?>
		</div>
	</section>

	<section class="product-info-top">
		<div class="container product after:content-[''] after:block after:clear-both">
			<?php woocommerce_show_product_images(); ?>
			<aside class="product-info float-right w-[52%] pl-8 max-mobile:w-full max-mobile:pl-0">
				<?php woocommerce_template_single_title(); ?>

				<div class="my-4 py-6 px-8 bg-cream rounded-2xl">
					<blockquote class="relative [&_p]:mb-4">
						<!-- <?php load_partial('html/icon-quote', [
							'position_class' => 'top-[5px] left-[20px] text-2xl'
						]);?> -->
						<?php woocommerce_template_single_excerpt(); ?>
					</blockquote>
				</div>

				<div class="py-2 text-2xl">
					<?php woocommerce_template_single_price(); ?>
				</div>
				<?php woocommerce_template_single_add_to_cart(); ?>
			</aside>
		</div>
	</section>
	<section class="product-info-bottom tab py-4">
		<div class="product container">
			<div class="woocommerce-tabs">
				<ul class="tabs wc-tabs" role="tablist">
					<li role="presentation" class="description_tab active" id="tab-title-description">
						<a href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="true" tabindex="0">
							Mô tả					
						</a>
					</li>
				</ul>

				<div class="entry-content wp-editor">
					<?php 
						echo apply_filters('woocommerce_short_description', $product->get_description());
					?>
				</div>
			</div>
		</div>
	</section>

</div>

<?php
endwhile; // End of the loop.

get_footer();
