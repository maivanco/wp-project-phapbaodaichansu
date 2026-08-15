<?php

/**
 * Template Name: Landing page 02
 */
get_header(); ?>

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


<section class="sec-slider max-w-[1920px] mx-auto">
    <div class="slick-slide grid grid-cols-[1fr_350px] px-[15px]">
        <div class="left pr-[15px] relative relative
        after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-2/3 after:h-[1px] after:bg-gold
        ">
            <?php render_img_by_src(IMG_URL . 'slide-ngoc-le-bi-tam-2.jpg', ['class' => 'max-h-full w-full object-cover'])?>

            <?php load_partial('product/product-btn-group', [
                'product_id' => 0,
                'extra_classes' => 'absolute bottom-[30px] left-[30px]'
            ])?>
        </div>
        <div class="right bg-cream2 py-8 md:py-12 lg:py-20 px-8 flex flex-col justify-center">
            <div class="content">
                <h2 class="text-3xl font-medium mb-4">
                    Ngọc Lệ Bi Tâm <br>
                    Quán Thế Âm
                </h2>
                <p class="text-[gray]">
                    Sách ảnh Bồ Tát Quán Thế Âm và những lời huấn thị từ Chân Sư Thích Long Viễn
                </p>
            </div>
            <?php render_img_by_src(IMG_URL . 'sach-ngoc-le-bi-tam.png', [
                'class'=>'mt-10',
            ])?>
        </div>
    </div>

    <?php foreach($green_books as $book): ?>
    <div class="slide grid grid-cols-[1fr_300px] px-[15px]">
        <div class="left pr-[15px] relative relative
        after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-2/3 after:h-[1px] after:bg-gold
        ">

            <div class="book-border max-w-[400px] mx-auto">
                <?php render_img_by_src($book['img_url'], ['class' => ''])?>
            </div>

             <?php load_partial('product/product-btn-group', [
                'product_id' => 0,
                'extra_classes' => 'absolute bottom-[30px] left-[30px]'
            ])?>
            
        </div>
        <div class="right bg-cream2 py-8 md:py-12 lg:py-20 px-8 flex flex-col justify-between">
            <div class="content">
                <h3 class="text-3xl font-medium mb-4">
                   <?php echo $book['title']; ?>
                </h3>
            </div>
            <?php render_img_by_src($book['img_url'], [
                'class'=>'mt-10',
            ])?>
            <div>&nbsp;</div>
        </div>
    </div>
    <?php endforeach; ?>
    
</section>


<?php load_partial('sections/products', [])?>

<?php
get_footer();