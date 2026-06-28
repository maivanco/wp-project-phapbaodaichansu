<?php

/**
 * Template Name: Landing page 02
 */
get_header(); ?>



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
        <div class="right bg-cream2 py-20 px-8 flex flex-col justify-between">
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
                    <p></p>
                    
                    <img
                        src="<?php echo IMG_URL;?>thi-ke-de-tu-nhu-lai-thich-long-vien.png"
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

<?php
get_footer();