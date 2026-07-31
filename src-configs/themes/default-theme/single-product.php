<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();
	global $product;

?>

<div class="woocommerce single-product">

	<?php 
	if (has_special_intro()) {
		load_partial('product/sec-product-detail-featured-layout', [
			'product' => $product
		]);
	}
	?>
		
		
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

	<?php 
	
	load_partial('product/sec-product-detail-default-layout', [
		'product' => $product
	]);

	load_partial('sections/list_of_products', [
		'section_title' => __('Các sản phẩm khác', 'pbdcs'),
		'display_condition' => 'exclude_current_product',
		'current_product_id' => get_the_ID()
	]);

	?>

</div>

<?php
endwhile; // End of the loop.

get_footer();
