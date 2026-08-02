<?php
/**
 * Template Name: Personal Intro
 */
get_header(); 
?>

<div class="bg-[#faf8f5] min-h-screen py-12 md:py-20 font-serif text-[#2d2a26]">
  <div class="container mx-auto px-4 max-w-6xl">
    
    <!-- Masthead Section -->
    <header class="text-center mb-16 md:mb-24">
      <div class="flex items-center justify-center gap-4 mb-6">
        <span class="h-[1px] w-12 bg-[#2d2a26]/20"></span>
        <span class="text-xs md:text-sm uppercase tracking-[0.2em] font-sans font-semibold text-[#1a747a]">Hành Trạng Chân Sư</span>
        <span class="h-[1px] w-12 bg-[#2d2a26]/20"></span>
      </div>
      
      <h1 class="font-title text-4xl md:text-6xl lg:text-7xl font-bold tracking-tight text-[#2d2a26] leading-[1.1] mb-6 max-w-4xl mx-auto">
        Lược Sử Thầy Tôi: <br>
        <span class="font-handwriting text-[#c9922a] block md:inline normal-case lowercase my-2 md:my-0 md:ml-2 text-6xl md:text-8xl">Thích Long Viễn</span>
      </h1>
    </header>

    <!-- Hero Grid Section -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 mb-16 md:mb-24">
      <!-- Left: Featured Image -->
      <div class="lg:col-span-8 flex flex-col justify-between">
        <div class="group overflow-hidden border border-[#2d2a26]/10 p-2 bg-white shadow-sm transition-all duration-500 hover:shadow-md">
          <div class="aspect-video w-full overflow-hidden bg-gray-100 relative">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiWrG8QMgmeOqWImQBYvu5PEp2LE5oIu_3q938ARdpnHt7v0efkwYytoOcQXQefWg3aD2SXi3ibTcvC5EngUp1V6jx0ROoVMHTjiFIoG5FBZivkDK9YcET5TbxM4AR5X_342-aylc1x0gAREkXRFDDySolJ5g9YystX1o4U_tF2ZogSVootU7CyB-SD/w1200-h630-p-k-no-nu/z3616887510472_80195938836eed2327021a205e04bf40.jpg" 
                 alt="Đại Đức Thích Long Viễn" 
                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
          </div>
        </div>
        <p class="text-xs md:text-sm text-gray-500 italic mt-3 border-l-2 border-[#c9922a] pl-3 py-1">
          Chùa Phật Đảnh Bảo Vương (Nha Trang - Khánh Hòa) - Nơi lưu dấu hành trạng tu tập và hoằng dương Chánh pháp của Đại Đức Thích Long Viễn.
        </p>
      </div>

      <!-- Right: Sidebar & Short Bio -->
      <div class="lg:col-span-4 flex flex-col justify-between border-t lg:border-t-0 lg:border-l border-[#2d2a26]/10 pt-8 lg:pt-0 lg:pl-8">
        <div>
          <p class="text-lg md:text-xl text-[#2d2a26] font-light leading-relaxed italic mb-8 relative pl-6 before:content-['“'] before:absolute before:left-0 before:top-0 before:text-5xl before:font-serif before:text-[#c9922a]/30 before:leading-none">
            Thầy tôi - Người đã đốt lên ngọn đuốc của Chánh Pháp soi rọi vào đêm đen u tối của cuộc đời và phá tan màn vô minh dày đặc trong lòng người, để nối tiếp mạng mạch của Như Lai.
          </p>
        </div>
        
        <!-- Bio Card -->
        <div class="bg-white/50 border border-[#2d2a26]/10 p-6 rounded-lg">
          <h4 class="font-sans font-bold uppercase tracking-wider text-sm border-b border-[#2d2a26]/10 pb-2 mb-4">Hành Trạng Sơ Lược</h4>
          <dl class="space-y-3 text-sm font-sans">
            <div class="flex justify-between border-b border-dashed border-[#2d2a26]/10 pb-2">
              <dt class="text-gray-500">Pháp hiệu</dt>
              <dd class="font-semibold text-right text-[#1a747a]">Thích Long Viễn (Lương Sơn Long Viễn)</dd>
            </div>
            <div class="flex justify-between border-b border-dashed border-[#2d2a26]/10 pb-2">
              <dt class="text-gray-500">Trú xứ</dt>
              <dd class="font-semibold text-right">Chùa Phật Đảnh Bảo Vương</dd>
            </div>
            <div class="flex justify-between border-b border-dashed border-[#2d2a26]/10 pb-2">
              <dt class="text-gray-500">Nguyên quán</dt>
              <dd class="font-semibold text-right">Ninh Trung, Ninh Hòa, Khánh Hòa</dd>
            </div>
            <div class="flex justify-between border-b border-dashed border-[#2d2a26]/10 pb-2">
              <dt class="text-gray-500">Thân sinh</dt>
              <dd class="font-semibold text-right">Cụ Nguyễn Ngọc Thành & Cụ Võ Thị Mỹ</dd>
            </div>
            <div class="flex justify-between border-b border-dashed border-[#2d2a26]/10 pb-2">
              <dt class="text-gray-500">Nơi tu học</dt>
              <dd class="font-semibold text-right">Đại Tòng Lâm, Huế, Sài Gòn</dd>
            </div>
            <div class="flex justify-between pb-1">
              <dt class="text-gray-500">Tác phẩm & Lời dạy</dt>
              <dd class="font-semibold text-right">Tịnh Độ Phá Nghi, Ngũ Thủ Uẩn...</dd>
            </div>
          </dl>
        </div>
      </div>
    </section>

    <!-- Editorial Pull Quote Section -->
    <section class="border-y border-[#2d2a26] py-12 md:py-16 my-16 md:my-24 text-center max-w-4xl mx-auto">
      <blockquote class="text-xl md:text-2xl lg:text-3xl text-[#2d2a26] font-light leading-relaxed italic max-w-3xl mx-auto px-4">
        “Chỉ cần làm Đức Thế Tôn mỉm cười, dù thân Thầy có nổ tung vỡ thành triệu mảnh ngay tại chỗ thì Thầy cũng cam lòng, chẳng tiếc thân!”
        <cite class="block mt-6 not-italic font-sans text-xs md:text-sm uppercase tracking-widest text-gray-500">
          <span class="font-handwriting text-[#c9922a] text-4xl md:text-5xl lowercase normal-case align-middle inline-block ml-2">
            Thích Long Viễn
          </span>
        </cite>
      </blockquote>
    </section>

    <!-- The Feature Story (3-Column Magazine Layout) -->
    <section class="mb-16 md:mb-24">
      <div class="mb-12 text-center md:text-left">
        <span class="text-xs font-sans tracking-widest uppercase text-[#1a747a] font-bold block mb-2">Cuộc đời & Đạo nghiệp</span>
        <h2 class="font-title text-3xl md:text-5xl font-bold text-[#2d2a26] uppercase tracking-wide">Hành Trình Tự Giác & Giác Tha</h2>
        <div class="h-[1px] w-24 bg-[#c9922a] mt-4 mx-auto md:mx-0"></div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12 text-[#2d2a26]/90">
        <!-- Column 1 / Chapter 1 -->
        <div class="space-y-6">
          <div class="border-b border-[#2d2a26]/10 pb-4 mb-6">
            <span class="text-sm font-sans font-bold text-[#c9922a] block mb-1">Chương I</span>
            <h3 class="font-title text-xl font-bold uppercase tracking-wide">Tâm Hương Hướng Phật & Hạnh Tu Độc Cư</h3>
          </div>
          <p class="text-base md:text-lg leading-relaxed first-letter:text-7xl first-letter:font-bold first-letter:float-left first-letter:mr-3 first-letter:mt-1 first-letter:text-[#c9922a] first-letter:font-title">
            Từ nhỏ, Thầy đã luôn mang trong mình lòng kính ngưỡng thương kính Đức Phật tha thiết. Sau khi hoàn thành chương trình phổ thông, Thầy xin phép gia đình xuất gia tu học. Trải qua những năm tháng rèn luyện, tích lũy Phật học tại Đại Tòng Lâm Tự (Bà Rịa - Vũng Tàu) và các trường Phật học tại Huế, Sài Gòn, Thầy quyết định trở về quê nhà, lựa chọn trú xứ thanh vắng chốn núi rừng để sống hạnh độc cư.
          </p>
          <p class="text-base md:text-lg leading-relaxed">
            Nơi tịnh thất vách lá giữa rừng sâu, mưa nắng chẳng màng, Thầy dốc lòng thiền định, tìm hái rau củ rừng làm thực phẩm, làm bạn với thú rừng sương gió. Với ý chí dõng mãnh tinh tấn "chứng đạt những gì chưa chứng đạt, chứng ngộ những gì chưa chứng ngộ", Thầy nguyện xả thân vì sự nghiệp gầy dựng Chánh pháp và báo đền ơn Phật.
          </p>
        </div>

        <!-- Column 2 / Chapter 2 -->
        <div class="space-y-6 lg:border-x lg:border-[#2d2a26]/10 lg:px-8">
          <div class="border-b border-[#2d2a26]/10 pb-4 mb-6">
            <span class="text-sm font-sans font-bold text-[#c9922a] block mb-1">Chương II</span>
            <h3 class="font-title text-xl font-bold uppercase tracking-wide">Điềm Lạ Ứng Mộng & Liên Hoa Hạ Sanh</h3>
          </div>
          <p class="text-base md:text-lg leading-relaxed">
            Thân mẫu của Thầy là cụ bà Võ Thị Mỹ và thân phụ là cụ ông Nguyễn Ngọc Thành (trú tại thôn Phú Văn, xã Ninh Trung, thị xã Ninh Hòa, Khánh Hòa). Trước khi mang thai Thầy, thân mẫu từng có những điềm mộng thù thắng về Bồ Tát Quán Thế Âm tiếp dẫn.
          </p>
          <p class="text-base md:text-lg leading-relaxed">
            Đêm mộng Bồ Tát trao đóa hoa sen tỏa ánh hào quang, thân phụ cùng dân làng còn trông thấy luồng hào quang rực rỡ chiếu sáng mái nhà. Đến ngày 30 Tết, Thầy hạ sanh trong sự bình an lạ thường. Khi vừa ra đời, cả căn nhà bỗng ngát hương thơm thanh khiết, thai nhi không hề khóc lóc mà toát lên diện tướng an lành, báo hiệu một duyên lành ứng thế.
          </p>
        </div>

        <!-- Column 3 / Chapter 3 -->
        <div class="space-y-6">
          <div class="border-b border-[#2d2a26]/10 pb-4 mb-6">
            <span class="text-sm font-sans font-bold text-[#c9922a] block mb-1">Chương III</span>
            <h3 class="font-title text-xl font-bold uppercase tracking-wide">Ngọn Đuốc Chánh Pháp & Đạo Nghiệp</h3>
          </div>
          <p class="text-base md:text-lg leading-relaxed">
            Trong suốt thời gian mang thai, thân mẫu tự nhiên hướng tâm chay lạt, bố thí làm phước và trong tâm thức luôn văng vẳng tiếng niệm Phật A Di Đà. Những điềm lành thời kỳ nhập thai ấy như sự báo trước cho đạo nghiệp hoằng pháp lợi sinh sau này.
          </p>
          <p class="text-base md:text-lg leading-relaxed">
            Tại Chùa Phật Đảnh Bảo Vương (Nha Trang), Thầy Thích Long Viễn âm thầm đốt lên ngọn đuốc Chánh pháp, biên soạn và giảng giải nhiều bộ kinh luận sâu sắc (như Tịnh Độ Phá Nghi, Ngũ Thủ Uẩn, Kinh Nhất Dạ Hiền Giả...), phá tan màn vô minh, giúp hàng triệu đệ tử và Phật tử hữu duyên vững tin vào Giáo pháp Như Lai và tìm lại sự an vui nội tâm.
          </p>
        </div>
      </div>
    </section>

    <!-- Editorial Gallery / Photo Essay Grid -->
    <section class="mb-16 md:mb-24">
      <div class="text-center mb-12">
        <h2 class="font-title text-2xl md:text-3xl font-bold mb-4 uppercase tracking-wider">Hình Ảnh</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Photo 1 -->
        <div class="group border border-[#2d2a26]/10 p-2 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1">
          <div class="aspect-[4/3] overflow-hidden bg-gray-100 mb-3">
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiWrG8QMgmeOqWImQBYvu5PEp2LE5oIu_3q938ARdpnHt7v0efkwYytoOcQXQefWg3aD2SXi3ibTcvC5EngUp1V6jx0ROoVMHTjiFIoG5FBZivkDK9YcET5TbxM4AR5X_342-aylc1x0gAREkXRFDDySolJ5g9YystX1o4U_tF2ZogSVootU7CyB-SD/w1200-h630-p-k-no-nu/z3616887510472_80195938836eed2327021a205e04bf40.jpg" 
                 alt="Chùa Phật Đảnh Bảo Vương" 
                 class="w-full h-full object-cover grayscale contrast-110 transition-transform duration-500 group-hover:scale-103" />
          </div>
        </div>

        <!-- Photo 2 -->
        <div class="group border border-[#2d2a26]/10 p-2 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1">
          <div class="aspect-[4/3] overflow-hidden bg-gray-100 mb-3">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiJxUOaJhD3KisMEPRXgZKuVkajLbAY8X7AcK0xqgJTT0fwgbWm1FYQSp5HK7zwhqL46PjHo99chz9dMIeez5CWMBRb-XI_NarVs3gasJHaqfVxG6Yl6mj3t-Cdn86TU66ECJL3KKGDDLV6_5U_LZMJAh8SHtacs7_seEGAPmV77KkK-yELlR15QjzjC3I=s600" 
                 alt="Đại Đức Thích Long Viễn" 
                 class="w-full h-full object-cover grayscale contrast-110 transition-transform duration-500 group-hover:scale-103" />
          </div>
        </div>

        <!-- Photo 3 -->
        <div class="group border border-[#2d2a26]/10 p-2 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1">
          <div class="aspect-[4/3] overflow-hidden bg-gray-100 mb-3">
            <img src="https://images.unsplash.com/photo-1506880018603-83d5b814b5a6?q=80&w=600&auto=format&fit=crop" 
                 alt="Kinh sách và biên dịch" 
                 class="w-full h-full object-cover grayscale contrast-110 transition-transform duration-500 group-hover:scale-103" />
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Book Section / Introduction to Author's Special Work -->
    <?php
    $book_product_id = 77; // "Ngọc Lệ Bi Tâm Quán Thế Âm"
    $book_product = function_exists('wc_get_product') ? wc_get_product($book_product_id) : null;
    if (!$book_product && function_exists('wc_get_product')) {
        $product_by_slug = get_page_by_path('ngoc-le-bi-tam-quan-the-am', OBJECT, 'product');
        if ($product_by_slug) {
            $book_product = wc_get_product($product_by_slug->ID);
        }
    }

    $book_url = $book_product ? get_permalink($book_product->get_id()) : '#';
    $book_title = $book_product ? $book_product->get_title() : 'Ngọc Lệ Bi Tâm Quán Thế Âm';
    $book_short_desc = ($book_product && !empty($book_product->get_short_description())) 
        ? $book_product->get_short_description() 
        : 'Tác phẩm đặc biệt ghi lại 108 bài thi kệ "Đại Ngộ Đắc Tự Tại" cùng tâm nguyện tu tập và khai thị vô giá của Thầy Thích Long Viễn. Đây là chiếc chìa khóa giúp độc giả thấu hiểu trọn vẹn về cuộc đời, trí tuệ và đạo nghiệp của tác giả.';
    
    $book_img_url = '';
    if ($book_product && $book_product->get_image_id()) {
        $book_img_url = wp_get_attachment_url($book_product->get_image_id());
    }
    if (empty($book_img_url)) {
        $book_img_url = IMG_URL . 'slide-ngoc-le-bi-tam-3.jpg';
    }
    ?>

<?php /*
    <section class="bg-white border border-[#2d2a26]/15 rounded-2xl p-6 md:p-10 max-w-5xl mx-auto shadow-sm relative overflow-hidden my-16 md:my-24">
      <!-- Background subtle glows -->
      <div class="absolute -top-16 -left-16 w-48 h-48 rounded-full bg-[#1a747a]/5 blur-3xl pointer-events-none"></div>
      <div class="absolute -bottom-16 -right-16 w-48 h-48 rounded-full bg-[#c9922a]/5 blur-3xl pointer-events-none"></div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
        <!-- Book Cover / Image Column -->
        <div class="lg:col-span-5 flex justify-center">
          <div class="group relative max-w-xs w-full border border-[#2d2a26]/10 p-3 bg-[#faf8f5] shadow-md rounded-xl transition-all duration-500 hover:shadow-xl">
            <a href="<?php echo esc_url($book_url); ?>" class="block overflow-hidden rounded-lg">
              <img src="<?php echo esc_url($book_img_url); ?>" 
                   alt="<?php echo esc_attr($book_title); ?>" 
                   class="w-full h-auto object-cover rounded-lg transition-transform duration-700 group-hover:scale-105" />
            </a>
            <div class="mt-3 text-center">
              <span class="inline-block text-[11px] font-sans font-semibold uppercase tracking-widest text-[#1a747a] bg-[#1a747a]/10 px-3 py-1 rounded-full">
                Ấn Phẩm Tiêu Biểu
              </span>
            </div>
          </div>
        </div>

        <!-- Content Column -->
        <div class="lg:col-span-7 flex flex-col justify-center space-y-5 text-[#2d2a26]">
          <div>
            <h3 class="font-title text-2xl md:text-4xl font-bold tracking-tight leading-snug">
              <a href="<?php echo esc_url($book_url); ?>" class="hover:text-[#1a747a] transition-colors duration-300">
                <?php echo esc_html($book_title); ?>
              </a>
            </h3>
            <p class="text-xs md:text-sm font-sans uppercase tracking-widest text-gray-500 mt-2 font-medium">
              Tác giả: <span class="text-[#1a747a] font-semibold">Đại Đức Thích Long Viễn</span>
            </p>
          </div>

          <div class="text-sm md:text-base leading-relaxed text-gray-700 border-l-2 border-[#c9922a] pl-4 py-1 italic font-serif">
            <?php echo wp_kses_post($book_short_desc); ?>
          </div>

          <p class="text-xs md:text-sm text-gray-600 leading-relaxed font-sans">
            Để hiểu rõ về tư tưởng, tâm nguyện và đạo lộ tu tập của Thầy Thích Long Viễn, tác phẩm này là cầu nối chân thực nhất giúp độc giả thấu cảm ngọn đuốc Chánh pháp và 108 bài thi kệ "Đại Ngộ Đắc Tự Tại" chứa đựng cốt tủy diệu pháp.
          </p>

          <div class="pt-2 flex flex-wrap items-center gap-4">
            <a href="<?php echo esc_url($book_url); ?>" 
               class="px-8 py-3.5 bg-[#1a747a] hover:bg-[#c9922a] text-white font-sans text-xs md:text-sm font-semibold uppercase tracking-wider rounded-lg transition-all duration-300 shadow-sm hover:shadow-md inline-flex items-center gap-2">
              <span>Tìm Hiểu & Thỉnh Sách</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </a>
            
            <?php if ($book_product): ?>
              <a href="#" 
                 data-product_id="<?php echo esc_attr($book_product->get_id()); ?>" 
                 data-quantity="1" 
                 class="button product_type_simple add_to_cart_button ajax_add_to_cart px-6 py-3.5 border border-[#1a747a] text-[#1a747a] hover:bg-[#1a747a] hover:text-white font-sans text-xs md:text-sm font-semibold uppercase tracking-wider rounded-lg transition-all duration-300 inline-flex items-center gap-2">
                <span>Đặt Sách</span>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
  */ ?>
  </div>
</div>

<?php get_footer(); ?>
