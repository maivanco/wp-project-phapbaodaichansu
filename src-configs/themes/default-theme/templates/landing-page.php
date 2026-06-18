<?php

/**
 * Template Name: Landing page
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

<section id="hero-carousel" class="bg-cream">

    <div class="slick-slide !min-h-[calc(100vh-80px)]">
        <div class="grid grid-cols-4 max-tablet:grid-cols-2 max-mobile:h-[calc(100vh-60px)]">
            <img class="h-full brightness-[0.8] hover:brightness-100 transition-filter duration-300" src="<?php echo IMG_URL ?>/v-slide-ngoc-le-bi-tam-1.jpg" alt="Ảnh bìa sách Ngọc Lệ Bi Tâm 1" />
            <img class="brightness-[0.8] hover:brightness-100 transition-filter duration-300" src="<?php echo IMG_URL ?>/v-slide-ngoc-le-bi-tam-2.jpg" alt="Ảnh bìa sách Ngọc Lệ Bi Tâm 2" />
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/gBWR9sAKsLo?si=xWDRs-MSL1CA7INJ&autoplay=1" allow="autoplay-off" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <img class="h-full brightness-[0.8] hover:brightness-100 transition-filter duration-300" src="<?php echo IMG_URL ?>/v-slide-ngoc-le-bi-tam-3.jpg" alt="Ảnh bìa sách Ngọc Lệ Bi Tâm 3" />
        </div>
    </div>

    <div class="slick-slide !min-h-[calc(100vh-80px)] flex items-center">
        <div class="container">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center w-full !min-h-[calc(100vh-80px)]">
                <div class="left grid grid-cols-3 gap-3">
                    <img class="rounded-lg" src="https://bizweb.dktcdn.net/thumb/large/100/500/302/products/ma-t-thu-a-mo-n-tha-nh-pha-t-pha-p-ye-u-ta-p-1-1.jpg" alt="Mật Thừa Môn Thành Phật Pháp Yếu - Tập 1" />
                    <img class="rounded-lg" src="https://bizweb.dktcdn.net/thumb/large/100/500/302/products/nha-t-a-nh-tu-va-n-ta-p-1-1.jpg" alt="Nhật Ánh Từ Vân - Tập 1 " />
                    <img class="rounded-lg" src="https://bizweb.dktcdn.net/thumb/large/100/500/302/products/da-i-thu-a-nha-n-ta-ng-cha-nh-ye-u-ta-p-1-4.jpg" alt="Đại Thừa Nhãn Tạng Chánh Yếu - Tập 1" />
                    <img class="rounded-lg" src="https://bizweb.dktcdn.net/thumb/large/100/500/302/products/ti-nh-do-pha-p-ye-u-lu-c-ta-p-2-4.jpg" alt="Tịnh Độ Pháp Yếu Lục - Tập 2" />
                    <img class="rounded-lg" src="https://bizweb.dktcdn.net/thumb/large/100/500/302/products/tinh-do-phap-yeu-luc-tap-1-4.jpg" alt="Tịnh Độ Pháp Yếu Lục - Tập 1" />
                    <img class="rounded-lg" src="https://bizweb.dktcdn.net/thumb/large/100/500/302/products/chanh-phap-hanh-phat-giao-nguyen-thuy-tap-1.jpg" alt="Chánh Pháp Hành Nguyên Thủy Phật Giáo - Tập 1" />
                </div>
                <div class="right">
                    <p class="text-gold font-medium text-sm uppercase tracking-wider mb-4 animate-fade-in">
                        TRỌN BỘ
                    </p>
                    <h2 class="font-serif text-4xl sm:text-5xl lg:text-6xl leading-[1.3] font-light mb-4">
                        TRANG NGHIÊM TỔNG TRÌ NHIẾP KINH LUẬN
                    </h2>
                    <div class="text-sm uppercase tracking-wider mb-6 animate-fade-in animate-delay-100">
                        Tỷ kheo Thích Long Viễn
                    </div>
                    <p class="mt-6">
                        <?php load_partial('html/btn-dark-green', [
                            'label' => 'Đặt sách',
                            'url' => 'https://www.phaptang.com/kinh-sach-phat-giao',
                            'class' => 'px-[40px]',
                        ])?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php foreach($green_books as $book): ?>
    <div class="slide slick-slide flex items-center">
        <div class="container">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center w-full !min-h-[calc(100vh-80px)]">
                <div class="p-8">
                    <div class="book-border max-w-[400px] mx-auto">
                        <img class="" src="<?php echo $book['img_url']; ?>" alt="<?php echo $book['title']; ?>" />
                    </div>
                </div>
                <div class="right">
                    <h2 class="font-serif text-4xl sm:text-5xl lg:text-6xl leading-[1.3] font-light mb-4">
                        <?php echo $book['title']; ?>
                    </h2>
                    <div class="text-sm uppercase tracking-wider mb-6 animate-fade-in animate-delay-100">
                        Tỷ kheo Thích Long Viễn
                    </div>
                    <p class="mt-6">
                        <?php load_partial('html/btn-dark-green', [
                            'label' => 'Đặt sách',
                            'url' => $book['order_url'],
                            'target' => '_blank',
                            'class' => 'px-[40px]',
                        ])?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</section>

<section id="about" class="py-24 lg:py-32 bg-white">
    <div class="container">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="heading-md text-4xl mb-6 text-gradient font-handwriting p-4">
            Giới thiệu
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center max-w-5xl mx-auto">
            <div class="relative overflow-hidden text-center">
                <img class="rounded-xl w-100"
                src="<?php echo IMG_URL;?>tieu-su-thay-Thich-Long-Vien.jpg"
                alt="Eleanor Whitmore - Founder & Curator"
                class="w-full max-w-md mx-auto h-auto object-cover shadow-xl grayscale hover:grayscale-0 transition-all duration-500"
                />
            </div>

            <div>
                "Vạn Pháp Tùy Duyên" nếu đã hữu duyên...hãy dừng chân mà nghe tôi kể: Thầy tôi (Lương Sơn Long Viễn, Chùa Phật Đảnh Bảo Vương, T.P. Nha Trang- Khánh Hòa) ngay từ thuở ấu thơ luôn ấp ủ giấc mơ đi tìm Chánh Pháp và rồi Người đã ra đi...hiến trọn đời mình cho hạnh phúc chúng sanh ...những chặn đường Người đi đều thấm đẫm nước mắt
                <hr class="my-4">
                <div class="font-handwriting text-4xl">Tỷ kheo Thích Long Viễn</div>
            </div>
        </div>
    </div>
</section>

<section id="featured-book" class="bg-cream relative flex">
    <div id="featured-book-slider" class="
        before:absolute before:z-10 before:inset-y-0 before:right-0 before:w-32 before:bg-gradient-to-r before:from-transparent before:to-[#0d0a08]
        after:absolute after:z-10 after:inset-x-0 after:bottom-0 after:h-24 after:bg-gradient-to-t after:from-[#0d0a08]/60 after:to-transparent">
        <?php for($i = 1; $i <= 5; $i++): ?>
        <div class="slide">
            <?php 
            render_img_by_src(IMG_URL . "slide-ngoc-le-bi-tam-{$i}.jpg", [
                'alt' => "Ngọc Lệ Bi Tâm slide {$i}",
                'class' => 'max-h-screen w-full',
            ]);
            ?>
        </div>
        <?php endfor; ?>
    </div>
    <div class="wysiwyg bg-[#0d0a08] text-white p-8 h-screen w-[500px] px-14 absolute top-0 right-0">
        <div class="scrolling">
            <p>Có những cuộc hành trình về nguồn cội không cần bước chân, chính từ ngay mỗi trang sách, mỗi câu chuyện, mỗi lời khai thị, thi kệ và mỗi hình ảnh mà tâm hồn chúng ta được dẫn lối bước vào cõi phiêu nhiên tịch tĩnh - an lạc đời đời... Chúng tôi muốn đề cập đến tác phẩm Ngọc Lệ Bi Tâm - Quán Thế Âm - một Pháp bảo trân quý mà Tôn Sư để lại cho hàng hậu học. Quyển sách này như Phật Đảnh Liên Hoa, soi sáng và phá tan xích xiềng sanh tử u minh, nâng bước chân ta vượt ngang Tam Giới, đốn chứng Niết Bàn Diệu Tâm, liễu ngộ Thật Tướng Vô Tướng, chấn nhiếp Tứ Ma, xuất ngục Ấm Giới, nhanh chóng thành tựu cứu cánh Phạm Hạnh, viên mãn Đại Bồ Đề.
    Ngọc Lệ Bi Tâm - Quán Thế Âm tựa như bàn tay ấm áp của Mẹ hiền Quán Thế Âm, lệ Ngài rơi vào biển luân hồi hóa thành Huyết Ngọc Đại Bi: Ôm ấp và xoa dịu những khổ đau, vỗ về những trái tim mang nặng ưu tư, dìu dắt từng bước chân đang mỏi mệt trên hành trình gian nan tìm về bến bờ an yên tĩnh lặng.</p>
                <p>Với từng lời dạy vàng được tinh tuyển từ bộ sách Trang Nghiêm Tổng Trì Nhiếp Kinh Luận mà Thầy tôi Thích Long Viễn đã phải đổ không biết bao nhiêu mồ hôi và nước mắt, với những kinh nghiệm tu tập xương máu được lưu lại, cốt yếu cũng chỉ để thắp sáng con đường tu học cho hàng hậu học, đốt lên ngọn lửa Chánh Pháp và tâm nguyện được nhìn thấy sự mỉm cười nơi phương xa của Đức Thế Tôn, như Bồ Tát Quán Thế Âm luôn tôn thờ Đấng Đạo Sư của mình trên đảnh đầu Ngài vậy. 
    Ngoài ra từng trang sách là hình ảnh Đức Quán Thế Âm Bồ Tát, dịu hiền và từ bi, với đôi bàn tay chăm chút yêu thương vô bờ bến, là tiếng vọng xa xăm của sự giác ngộ và lòng từ bi bao la, là hành trình đi tìm tiếng gọi, nơi chúng sinh đau khổ xoay quanh giữa vòng xoáy bất tận của sanh tử luân hồi; đúng như trong bài thi kệ Quán Thế Âm mà Tôn Sư đã rỏ máu từ trái tim lưu xuất về Đại Hạnh Đại Nguyện Đại Hùng Đại Lực Đại Từ Bi của Bồ Tát Quán Thế Âm, Ngài đã quán chiếu âm thanh thế gian, bi tâm chảy xuống lệ tràn biển đông, như trong nhiều Kinh điển Đại Thừa có nói: Bồ Tát khi nhìn thấy chúng sanh đau khổ như ngàn mũi kim đâm vào mắt, xuyên thủng con tim... thật đúng như Tôn Sư đã nhỏ huyết lệ từ tim thành thi kệ Quán Thế Âm:…
    “Ta vẫn đợi con bước trở về
    Con đừng hờ hững nhé con thơ !
    Con đừng lấy móc câu tim nữa
    Lòng ta tan nát, đau đau ghê !</p>
        </div>
    </div>
    
</section>


 <section id="books" class="py-24 bg-cream">
    <div class="container">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <?php load_partial('general/section-title', [
                'section_title' => 'Danh mục sách',
            ])?>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 lg:gap-6">
            <?php foreach($green_books as $book): ?>
            <article class="group bg-white hover-lift shadow-sm hover:shadow-xl">
                <div class="relative overflow-hidden">
                    <img
                    src="<?php echo $book['img_url_2']; ?>"
                    alt="Book Cover"
                    class=""
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-charcoal/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4">
                    <?php load_partial('html/btn-primary', [
                        'label' => 'Xem thêm',
                        'class' => 'block text-sm'
                    ])?>
                    </div>
                </div>
                <div class="p-3 lg:p-4 h-[200px] flex flex-col justify-between gap-4">
                    <h3 class="text-sm min-h-[72px]">
                    <?php echo $book['title']; ?>
                    </h3>
                    <p class="text-xs mb-2">Tỷ kheo Thích Long Viễn</p>
                    <div class="flex items-center justify-between">
                        <span class="text-main font-bold"><?php echo $book['price']?> đ</span>
                    </div>
                    <?php load_partial('html/btn-dark-green', [
                        'label' => 'Mua ngay',
                        'url' => $book['order_url'],
                        'target' => '_blank',
                        'class' => 'text-sm block px-[20px]'
                    ])?>
                </div>
            </article>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php
get_footer();