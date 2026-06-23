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

    <div class="slick-slide">
        <div class="grid grid-cols-4 max-tablet:grid-cols-2 !min-h-[calc(100vh-80px)] max-mobile:!h-[calc(100vh-60px)]">
            <img class="h-full brightness-[0.8] hover:brightness-100 transition-filter duration-300" src="<?php echo IMG_URL ?>/v-slide-ngoc-le-bi-tam-1.jpg" alt="Ảnh bìa sách Ngọc Lệ Bi Tâm 1" />
            <img class="h-full brightness-[0.8] hover:brightness-100 transition-filter duration-300" src="<?php echo IMG_URL ?>/v-slide-ngoc-le-bi-tam-2.jpg" alt="Ảnh bìa sách Ngọc Lệ Bi Tâm 2" />
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
            <?php load_partial('general/section-title', [
                'section_title' => 'GIỚI THIỆU',
                'subtitle' => 'TIỂU SỬ THẦY TÔI',
            ])?>
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

<section id="featured-book" class="bg-cream relative overflow-x-hidden">
    <div id="featured-book-slider" class="
        after:absolute after:z-10 after:inset-x-0 after:bottom-0 after:h-24 after:bg-gradient-to-t after:from-[#0d0a08]/60 after:to-transparent">
        <?php for($i = 1; $i <= 5; $i++): ?>
        <div class="slide flex-none">
            <?php 
            render_img_by_src(IMG_URL . "slide-ngoc-le-bi-tam-{$i}.jpg", [
                'alt' => "Ngọc Lệ Bi Tâm slide {$i}",
                'class' => 'max-h-screen w-full',
            ]);
            ?>
        </div>
        <?php endfor; ?>
    </div>
    <div class="wysiwyg open bg-[rgba(13_10_8_/_100%)] w-1/2 max-w-[670px] px-6 absolute top-0 right-0
    before:absolute before:z-10 before:inset-y-0 before:left-[-128px] before:w-32 before:bg-gradient-to-r before:from-transparent before:to-[#0d0a08]
    ">
        <button id="toggle-featured-book-content" type="button" class="absolute z-10 top-[50px] -left-[48px] cursor-pointer w-12 h-12 bg-[#e73f5c] text-white"><i class="fa-solid fa-chevron-right"></i></button>
        <div class="wrapper h-screen overflow-y-auto p-[50px_20px] text-justify">
            <div class="scrolling text-white/70 leading-[1.9] text-sm xl:text-[0.9rem] font-light">
                <div class="flex items-center gap-3 mb-8 text-[#c9922a] text-xs tracking-[0.3em] uppercase font-light">
                    <span class="block w-12 h-px bg-gradient-to-r from-[#c9922a] to-transparent"></span>
                    Pháp Bảo
                </div>
                <h3 class="font-serif text-white leading-tight mb-2 font-handwriting">
                    <span class="block text-4xl xl:text-5xl font-light tracking-wider text-white/90">Ngọc Lệ Bi Tâm</span>
                    <span class="block text-2xl xl:text-3xl font-light tracking-[0.15em] text-[#c9922a] mt-1">Quán Thế Âm</span>
                </h3>
                <p class="text-white/40 text-sm tracking-widest uppercase mb-8 mt-3">Sách ảnh &amp; Lời huấn thị</p>
                <div class="flex items-center gap-3 mb-8">
                    <span class="block w-12 h-px bg-gradient-to-r from-[#c9922a] to-transparent"></span>
                    <svg width="16" height="16" viewBox="0 0 16 16" class="text-[#c9922a] flex-shrink-0">
                        <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                        <circle cx="8" cy="8" r="5" fill="none" stroke="currentColor" stroke-width="0.5"></circle>
                        <circle cx="8" cy="8" r="7.5" fill="none" stroke="currentColor" stroke-width="0.3" stroke-dasharray="2 2"></circle>
                    </svg>
                    <span class="block flex-1 h-px bg-gradient-to-l from-[#c9922a]/20 to-transparent"></span>
                </div>
                <p>
                    Có những cuộc hành trình về nguồn cội không cần bước chân, chính từ ngay mỗi trang sách, mỗi câu chuyện, mỗi lời khai thị, thi kệ và mỗi hình ảnh mà tâm hồn chúng ta được dẫn lối bước vào cõi phiêu nhiên tịch tĩnh - an lạc đời đời... Chúng tôi muốn đề cập đến tác phẩm Ngọc Lệ Bi Tâm - Quán Thế Âm - một Pháp bảo trân quý mà Tôn Sư để lại cho hàng hậu học. Quyển sách này như Phật Đảnh Liên Hoa, soi sáng và phá tan xích xiềng sanh tử u minh, nâng bước chân ta vượt ngang Tam Giới, đốn chứng Niết Bàn Diệu Tâm, liễu ngộ Thật Tướng Vô Tướng, chấn nhiếp Tứ Ma, xuất ngục Ấm Giới, nhanh chóng thành tựu cứu cánh Phạm Hạnh, viên mãn Đại Bồ Đề.
                    <br>
                    Ngọc Lệ Bi Tâm - Quán Thế Âm tựa như bàn tay ấm áp của Mẹ hiền Quán Thế Âm, lệ Ngài rơi vào biển luân hồi hóa thành Huyết Ngọc Đại Bi: Ôm ấp và xoa dịu những khổ đau, vỗ về những trái tim mang nặng ưu tư, dìu dắt từng bước chân đang mỏi mệt trên hành trình gian nan tìm về bến bờ an yên tĩnh lặng.</p>
                <p>
                    Với từng lời dạy vàng được tinh tuyển từ bộ sách Trang Nghiêm Tổng Trì Nhiếp Kinh Luận mà Thầy tôi Thích Long Viễn đã phải đổ không biết bao nhiêu mồ hôi và nước mắt, với những kinh nghiệm tu tập xương máu được lưu lại, cốt yếu cũng chỉ để thắp sáng con đường tu học cho hàng hậu học, đốt lên ngọn lửa Chánh Pháp và tâm nguyện được nhìn thấy sự mỉm cười nơi phương xa của Đức Thế Tôn, như Bồ Tát Quán Thế Âm luôn tôn thờ Đấng Đạo Sư của mình trên đảnh đầu Ngài vậy.
                </p>
                <p>
                    Ngoài ra từng trang sách là hình ảnh Đức Quán Thế Âm Bồ Tát, dịu hiền và từ bi, với đôi bàn tay chăm chút yêu thương vô bờ bến, là tiếng vọng xa xăm của sự giác ngộ và lòng từ bi bao la, là hành trình đi tìm tiếng gọi, nơi chúng sinh đau khổ xoay quanh giữa vòng xoáy bất tận của sanh tử luân hồi; đúng như trong bài thi kệ Quán Thế Âm mà Tôn Sư đã rỏ máu từ trái tim lưu xuất về Đại Hạnh Đại Nguyện Đại Hùng Đại Lực Đại Từ Bi của Bồ Tát Quán Thế Âm, Ngài đã quán chiếu âm thanh thế gian, bi tâm chảy xuống lệ tràn biển đông, như trong nhiều Kinh điển Đại Thừa có nói: Bồ Tát khi nhìn thấy chúng sanh đau khổ như ngàn mũi kim đâm vào mắt, xuyên thủng con tim... thật đúng như Tôn Sư đã nhỏ huyết lệ từ tim thành thi kệ Quán Thế Âm:…
                </p>
                <blockquote class="font-handwriting text-3xl relative z-10 mt-[30px]">
                    <i class="fa-solid fa-quote-left-alt absolute -top-[30px] -left-[20px] text-[#c9922a] text-7xl opacity-[0.35]"></i>
                    <p>Ta vẫn đợi con bước trở về</p>
                    <p>Con đừng hờ hững nhé con thơ !</p>
                    <p>Con đừng lấy móc câu tim nữa</p>
                    <p>Lòng ta tan nát, đau đau ghê !”</p>
                    <p>Lệ đã khô rồi theo tiếng con:</p>
                    <p>Sầu bi ai oán với tủi hờn,</p>
                    <p>Con than, con khóc rồi quên hết</p>
                    <p>Thân xác luân hồi hơn núi non.</p>
                    <p>Ta vẫn nhìn theo bước con đi</p>
                    <p>Con đi theo tiếng gọi tình si</p>
                    <p>Con ơi, quay lại cùng gặp gỡ</p>
                    <p>Liên hoa hóa kiếp bất tư nghì!</p>
                </blockquote>
                <p>
                    Đặc biệt, trong tác phẩm này có 108 bài thi kệ “Đại Ngộ Đắc Tự Tại” của bậc chân tu thâm đạt diệu pháp hành - Thầy Thích Long Viễn lần đầu tiên được kính cẩn hiển lộ. Đây không chỉ là thi kệ mà là pháp âm vô ngại, là lời khai thị vượt ngoài mọi chấp ngã, thấu triệt vạn pháp; mỗi bài kệ còn là đạo lộ, là giai đoạn thành tựu của Ngài; mỗi ngôn âm diệu pháp là lưỡi kiếm Vô Năng Thắng giúp hành giả có thể phá tan rừng rậm ma ý, chiến thắng Tứ ma, xuất Ấm Giới ngục, viên giác Đại Tâm, hành dụng độ sanh vô ngại, là tinh chất của 84.000 pháp môn, thâu nhiếp cả 12 loại Kinh giáo, thật là “Tuyệt đãi viên dung”, cũng là “Siêu tình ly kiến”, quả thật “Bất khả tư nghì”, đúng là tinh hoa của Phật pháp, thật khó có khó tìm khó gặp trong đời. Nếu chúng ta y chỉ vào đây mà tu hành quả thật có thể:
                </p>
                <blockquote class="font-handwriting text-3xl relative z-10 mt-[30px]">
                    <i class="fa-solid fa-quote-left-alt absolute -top-[30px] -left-[20px] text-[#c9922a] text-7xl opacity-[0.35]"></i>
                    Chẳng nhọc ba A-tăng kỳ, phá huyễn thân tâm tiệm tu phước huệ 
                    <br>
                    Chỉ y một trăm lẻ tám thi kệ, mở tàng Phật tánh hoành xuất càn khôn.
                </blockquote>
                <br>
                <p>Đúng thật là:</p>
                <blockquote class="font-handwriting text-3xl relative z-10 mt-[30px]">
                    <i class="fa-solid fa-quote-left-alt absolute -top-[30px] -left-[20px] text-[#c9922a] text-7xl opacity-[0.35]"></i>
                    “Đốn ngộ nhất tâm, liễu đạt vô sanh, phá Ngã Kiến thâm căn, nuốt trọn bản lai diện mục.
                    <br>    
                    Tuỳ duyên vạn cảnh, thong dong vô ngại, trụ Pháp Thân chân địa, hằng hành đại dụng thần thông.”
                </blockquote>
                <br>
                <p>
                    Ôi! Diệu nghĩa thật vô cùng, viên dung tuyệt đối đãi; quả đúng là Đại Ngộ Đắc Tự Tại vậy! <br>
                    Ngoài ra trong tác phẩm này còn có 7 bài thi kệ “Đại Hùng Đại Lực Đại Trượng Phu” khai mở diệu hạnh - hành dụng chí nguyện vô biên của đệ tử Như Lai, dẫu gươm đao vạn kiếp chẳng phá nổi nguyện tâm Bồ Tát, dù cuồng phong ba cõi chẳng lay được chí khí đại trượng phu. Đúng thật là: <br>
                </p>
                <blockquote class="font-handwriting text-3xl relative z-10 mt-[30px]">
                    <i class="fa-solid fa-quote-left-alt absolute -top-[30px] -left-[20px] text-[#c9922a] text-7xl opacity-[0.35]"></i>
                    Một niệm phát khởi, Thần kinh Quỷ khiếp, Tam Giới rúng động dưới bước chân Bậc Đại Sĩ vô uý. <br> 
                    Chí nguyện như lửa trời thiêu sạch ngã chấp, oai nghi như sấm nổ vỡ tung vọng tưởng cả nghìn thu.
                </blockquote>
                <br>
                <p>    
                    Thệ nguyện ấy như Kim Cang bất thối, hùng chí ấy như Tu-di bất hoại, soi đường dẫn lối cho hậu học tịnh tín nơi Tam Bảo mà dấn thân thực hành Phật đạo chiến thắng ma quân, viên thành tuệ giác vô lậu, làm chủ sống chết, lợi ích trời người. <br>
                    Và giờ đây, không để đại chúng chờ đợi thêm nữa, thỉnh đại chúng cùng hướng về phía màn hình xem đoạn phim ngắn giới thiệu về Pháp bảo NGỌC LỆ BI TÂM - QUÁN THẾ ÂM.
                </p>
                <iframe width="100%" height="800" src="https://www.youtube.com/embed/gBWR9sAKsLo?si=xWDRs-MSL1CA7INJ" title="NGỌC LỆ BI TÂM - QUÁN THẾ ÂM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <p class="text-center mt-8">
                    <?php load_partial('html/btn-primary', [
                        'label' => 'Đặt sách',
                        'class' => 'text-sm !text-white px-10 relative z-10',
                        'url' => 'https://www.phaptang.com/ngoc-le-bi-tam-quan-the-am',
                        'target' => '_blank',
                    ])?>
                </p>
            </div>
        </div>
    </div>
    
</section>


 <section id="books" class="py-24 bg-cream">
    <div class="container">
        <div class="text-center max-w-5xl mx-auto mb-16">
            <?php load_partial('general/section-title', [
                'section_title' => 'TRANG NGHIÊM TỔNG TRÌ NHIẾP KINH LUẬN',
                'subtitle' => 'TRỌN BỘ',
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
                    <!-- <div class="absolute inset-0 bg-gradient-to-t from-charcoal/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4">
                        <?php load_partial('html/btn-primary', [
                            'label' => 'Xem thêm',
                            'class' => 'block text-sm'
                        ])?>
                    </div> -->
                </div>
                <div class="p-3 lg:p-4 min-h-[200px] flex flex-col justify-between gap-4">
                    <h3 class="text-sm min-h-[72px]">
                    <?php echo $book['title']; ?>
                    </h3>
                    <p class="text-xs mb-2">Tỷ kheo Thích Long Viễn</p>
                    <div class="flex items-center justify-between">
                        <span class="text-main font-bold"><?php echo $book['price']?> đ</span>
                    </div>
                    <?php load_partial('html/btn-dark-green', [
                        'label' => 'Đặt sách',
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