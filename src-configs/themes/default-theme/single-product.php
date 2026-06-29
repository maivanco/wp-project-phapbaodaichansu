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


	<section id="books" class="py-24 bg-cream">
		<div class="lg-container">
			<?php load_partial('general/section-title', [
				'section_title' => 'Sản phẩm liên quan',
				'align' => 'left'
			])?>

			<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 lg:gap-6">
				<?php foreach($green_books as $book): ?>
				<article class="group">
					<div class="relative overflow-hidden">
						<img
						src="<?php echo $book['img_url_2']; ?>"
						alt="Book Cover"
						class=""
						/>
					</div>
					<div class="flex flex-col gap-4 py-4">
						<p class="uppercase text-sm text-gray">Nguyên thuỷ</p>
						<h3 class="">
							<?php echo $book['title']; ?>
						</h3>
						<div class="flex items-center justify-between">
							<?php echo $book['price']?> đ
						</div>
					</div>
				</article>
				<?php endforeach;?>
			</div>
		</div>
	</section>

</div>

<?php
endwhile; // End of the loop.

get_footer();
