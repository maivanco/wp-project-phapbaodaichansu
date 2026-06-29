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
    <div class="slide grid grid-cols-[80%_20%] px-[15px]">
        <div class="left pr-[15px] relative">
            <?php render_img_by_src(IMG_URL . 'slide-ngoc-le-bi-tam-2.jpg', [])?>

            <div class="btns flex gap-4 mt-8 absolute bottom-[30px] left-[30px]">
                <a href="#" class="bg-gold text-white px-10 py-4 text-xl font-medium">
                    Xem thêm
                </a>
                <a href="#" class="bg-white px-10 py-4 text-xl font-medium">
                    Thêm vào giỏ
                </a>
            </div>
        </div>
        <div class="right bg-cream2 py-8 md:py-12 lg:py-20 px-8 flex flex-col justify-between">
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
            <div>&nbsp;</div>
        </div>
    </div>
</section>

<section class="sec-intro py-25">
    <div class="lg-container">
       <div class="flex gap-[14%]">
            <aside class="w-1/2">
                <?php load_partial('general/section-title', [
                    'section_title' => 'Pháp Bảo Đại Chân Sư',
                    'subtitle' => 'GIỚI THIỆU',
                    'align' => 'left'
                ])?>

                <div class="wp-editor">
                    <p>
                        Literature is a vibrant bookstore and publisher in Boston, devoted to bringing readers and writers together through the power of stories.
                    </p>
                    <p>
                        Our curated book selection and publishing support help readers explore new voices while guiding authors to reach their audience. We blend tradition with innovation, making books accessible for all.
                    </p>
                    <p></p>
                    <p></p>
                    
                    
                    <img
                        src="<?php echo IMG_URL;?>thi-ke-de-tu-nhu-lai-thich-long-vien.png"
                        alt="Ảnh Thầy Thích Long Viễn"
                        class="rounded-xl w-full"
                    />
                    <br><br>
                     <img
                        src="<?php echo IMG_URL;?>anh-thay-Thich-Long-Vien.jpg"
                        alt="Ảnh Thầy Thích Long Viễn"
                        class="rounded-xl w-full"
                    />

                </div>

            </aside>
            <aside class="w-1/2">
                <figure class="relative">
                    <img
                        src="<?php echo IMG_URL;?>tieu-su-thay-Thich-Long-Vien.jpg"
                        alt="Tiểu sử thầy Thích Long Viễn"
                        class="rounded-xl w-full brightness-50"
                    />
                    <figcaption class="absolute bottom-[30px] right-[50px] text-gold">
                        <div class="flex items-center gap-3 mb-8">
                        <span class="block w-12 h-px bg-gradient-to-r from-gold to-transparent"></span>
                        <svg width="16" height="16" viewBox="0 0 16 16" class="text-gold flex-shrink-0">
                            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="8" r="5" fill="none" stroke="currentColor" stroke-width="0.5"></circle>
                            <circle cx="8" cy="8" r="7.5" fill="none" stroke="currentColor" stroke-width="0.3" stroke-dasharray="2 2"></circle>
                        </svg>
                        Tỷ kheo Thích Long Viễn
                    </div>
                    </figcaption>
                </figure>

                <div class="wp-editor mt-8">
                    <p>
                        Literature is a vibrant bookstore and publisher in Boston, devoted to bringing readers and writers together through the power of stories.
                    </p>
                    <p>
                        Our curated book selection and publishing support help readers explore new voices while guiding authors to reach their audience. We blend tradition with innovation, making books accessible for all.
                    </p>
                    <p></p>
                    <p></p>
                    <p></p>
                    
                </div>
            </aside>
        </div>
    </div>
</section>

<section class="sec-featured-books bg-cream2 py-25">
    <div class="lg-container">
        <div class="grid grid-cols-2 max-tablet:grid-cols-1">
            <div class="left">
                <?php load_partial('general/section-title', [
                    'section_title' => 'Ngọc Lệ Bi Tâm Quán Thế Âm',
                    'subtitle' => 'ẤN PHẨM ĐẶC BIỆT',
                    'align' => 'left'
                ])?>
                <?php render_img_by_src(IMG_URL . 'slide-ngoc-le-bi-tam-3.jpg', [])?>
            </div>
            <div class="right">
                <div class="wp-editor">
                    <blockquote class="relative">
                        <p>
                            Quyển sách này như Phật Đảnh Liên Hoa, soi sáng và phá tan xích xiềng sanh tử u minh, nâng bước chân ta vượt ngang Tam Giới, đốn chứng Niết Bàn Diệu Tâm, liễu ngộ Thật Tướng Vô Tướng, chấn nhiếp Tứ Ma, xuất ngục Ấm Giới, nhanh chóng thành tựu cứu cánh Phạm Hạnh, viên mãn Đại Bồ Đề.
                        </p>
                    </blockquote>

                    <blockquote class="relative">
                        <p>
                            Đặc biệt, trong tác phẩm này có 108 bài thi kệ “Đại Ngộ Đắc Tự Tại” của bậc chân tu thâm đạt diệu pháp hành - Thầy Thích Long Viễn lần đầu tiên được kính cẩn hiển lộ. Đây không chỉ là thi kệ mà là pháp âm vô ngại, là lời khai thị vượt ngoài mọi chấp ngã, thấu triệt vạn pháp; mỗi bài kệ còn là đạo lộ, là giai đoạn thành tựu của Ngài; mỗi ngôn âm diệu pháp là lưỡi kiếm Vô Năng Thắng giúp hành giả có thể phá tan rừng rậm ma ý, chiến thắng Tứ ma, xuất Ấm Giới ngục, viên giác Đại Tâm, hành dụng độ sanh vô ngại, là tinh chất của 84.000 pháp môn, thâu nhiếp cả 12 loại Kinh giáo, thật là “Tuyệt đãi viên dung”, cũng là “Siêu tình ly kiến”, quả thật “Bất khả tư nghì”, đúng là tinh hoa của Phật pháp, thật khó có khó tìm khó gặp trong đời. 
                        </p>
                    </blockquote>
                </div>

                <div class="btns flex gap-4 mt-8">
                    <a href="#" class="bg-gold text-white px-10 py-4 text-xl font-medium">
                        Xem thêm
                    </a>
                    <a href="#" class="bg-white px-10 py-4 text-xl font-medium">
                        Thêm vào giỏ
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="books" class="py-24 bg-cream">
    <div class="lg-container">
        <?php load_partial('general/section-title', [
            'section_title' => 'TRANG NGHIÊM TỔNG TRÌ <br> NHIẾP KINH LUẬN',
            'subtitle' => 'TRỌN BỘ',
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

<?php
get_footer();