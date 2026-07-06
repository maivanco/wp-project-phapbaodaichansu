<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();
	global $product;

?>


<?php 
    $green_books = [
        [
            'img_url' => 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/50974.jpg?v=1&w=480&h=700',
            'img_url_2' => IMG_URL . 'v2-chanh-phap-hanh-nguyen-thuy-tap-1.webp',
            'title' => 'Chánh Pháp Hành Nguyên Thủy Phật Giáo - Tập 1',
            'price' => '191.500',
            'order_url' => 'https://www.phaptang.com/chanh-phap-hanh-nguyen-thuy-phat-giao-tap-1',
        ],
        [
            'img_url' => 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/51016.jpg', 
            'img_url_2' => IMG_URL . 'v2-tinh-do-phap-yeu-luc-tap-1.webp',
            'title' => 'Tịnh Độ Pháp Yếu Lục - Tập 1',
            'price' => '161.500',
            'order_url' => 'https://www.phaptang.com/tinh-do-phap-yeu-luc-tap-1',
        ],
        [
            'img_url' => 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/51019.jpg', 
            'img_url_2' => IMG_URL . 'v2-tinh-do-phap-yeu-luc-tap-2.webp',
            'title' => 'Tịnh Độ Pháp Yếu Lục - Tập 2',
            'price' => '171.500',
            'order_url' => 'https://www.phaptang.com/tinh-do-phap-yeu-luc-tap-2',
        ],
        [
            'img_url' => 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/50977.jpg', 
            'img_url_2' => IMG_URL . 'v2-dai-thua-nhan-tang-chanh-yeu-tap-1.webp',
            'title' => 'Đại Thừa Nhãn Tạng Chánh Yếu - Tập 1',
            'price' => '181.500',
            'order_url' => 'https://www.phaptang.com/dai-thua-nhan-tang-chanh-yeu-tap-1',
        ],
        [
            'img_url' => 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/50980.jpg', 
            'img_url_2' => IMG_URL . 'v2-mat-thua-mon-thanh-phat-phap-yeu-tap-1.webp',
            'title' => 'Mật Thừa Môn Thành Phật Pháp Yếu - Tập 1',
            'price' => '151.500',
            'order_url' => 'https://www.phaptang.com/mat-thua-mon-thanh-phat-phap-yeu-tap-1',
        ],
        [
            'img_url' => 'https://307a0e78.vws.vegacdn.vn/view/v2/image/img.book/0/0/1/50983.jpg', 
            'img_url_2' => IMG_URL . 'v2-nhat-anh-tu-van-tap-1.webp',
            'title' => 'Nhật Ánh Từ Vân - Tập 1',
            'price' => '141.500',
            'order_url' => 'https://www.phaptang.com/nhat-anh-tu-van-tap-1',
        ],
    ];
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

				<div class="my-4 py-6 px-8 bg-cream2 rounded-2xl wp-editor">
					<?php woocommerce_template_single_excerpt(); ?>
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


	<?php 
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
