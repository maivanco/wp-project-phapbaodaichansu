<?php
/**
 * Template Name: Author Intro
 */
get_header(); 
?>

<div class="bg-[#faf8f5] min-h-screen py-12 md:py-20 font-serif text-[#2d2a26]">
  <div class="container mx-auto px-4 max-w-6xl">
    
    <!-- Masthead Section -->
    <header class="text-center mb-16 md:mb-24">
      <div class="flex items-center justify-center gap-4 mb-6">
        <span class="h-[1px] w-12 bg-[#2d2a26]/20"></span>
        <span class="text-xs md:text-sm uppercase tracking-[0.2em] font-sans font-semibold text-[#1a747a]">Chuyên Đề Đặc Biệt</span>
        <span class="h-[1px] w-12 bg-[#2d2a26]/20"></span>
      </div>
      
      <h1 class="font-title text-4xl md:text-6xl lg:text-7xl font-bold tracking-tight text-[#2d2a26] leading-[1.1] mb-6 max-w-4xl mx-auto">
        Người Gieo Mầm <span class="font-handwriting text-[#c9922a] block md:inline normal-case lowercase my-2 md:my-0 md:ml-2 text-6xl md:text-8xl">giác ngộ</span> Giữa Nhân Gian
      </h1>
      
      <p class="text-lg md:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed font-light mb-8 italic">
        Một câu chuyện chưa kể về hành trình bảo tồn, dịch thuật và truyền bá kho tàng kinh điển Đại thừa vô giá của một bậc chân sư thầm lặng.
      </p>
      
      <div class="border-y border-[#2d2a26]/10 py-4 max-w-2xl mx-auto flex flex-wrap justify-center items-center gap-x-6 gap-y-2 text-xs md:text-sm font-sans tracking-wider text-gray-500 uppercase">
        <span>Bài viết bởi: <strong>Ban biên tập Pháp Tạng</strong></span>
        <span class="hidden md:inline text-gray-300">•</span>
        <span>Đăng ngày: <strong>19 tháng 07, 2026</strong></span>
        <span class="hidden md:inline text-gray-300">•</span>
        <span>Thời gian đọc: <strong>12 phút</strong></span>
      </div>
    </header>

    <!-- Hero Grid Section -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 mb-16 md:mb-24">
      <!-- Left: Featured Image -->
      <div class="lg:col-span-8 flex flex-col justify-between">
        <div class="group overflow-hidden border border-[#2d2a26]/10 p-2 bg-white shadow-sm transition-all duration-500 hover:shadow-md">
          <div class="aspect-video w-full overflow-hidden bg-gray-100 relative">
            <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?q=80&w=1200&auto=format&fit=crop" 
                 alt="Bậc Chân Sư thiền định" 
                 class="w-full h-full object-cover grayscale contrast-115 transition-transform duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
          </div>
        </div>
        <p class="text-xs md:text-sm text-gray-500 italic mt-3 border-l-2 border-[#c9922a] pl-3 py-1">
          Bậc Chân Sư trong tư thế thiền định tại tịnh thất, nơi khởi nguồn của những bộ kinh tuyển dịch vượt thời gian.
        </p>
      </div>

      <!-- Right: Sidebar & Short Bio -->
      <div class="lg:col-span-4 flex flex-col justify-between border-t lg:border-t-0 lg:border-l border-[#2d2a26]/10 pt-8 lg:pt-0 lg:pl-8">
        <div>
          <h3 class="text-xs uppercase tracking-widest font-sans font-bold text-gray-400 mb-4">Lời Dẫn Nhập</h3>
          <p class="text-lg md:text-xl text-[#2d2a26] font-light leading-relaxed italic mb-8 relative pl-6 before:content-['“'] before:absolute before:left-0 before:top-0 before:text-5xl before:font-serif before:text-[#c9922a]/30 before:leading-none">
            Ánh sáng của Chánh pháp không nằm ở những lời giáo điều cao siêu, mà ở sự thực hành giản dị và lòng từ bi vô lượng hướng về mọi chúng sinh.
          </p>
        </div>
        
        <!-- Bio Card -->
        <div class="bg-white/50 border border-[#2d2a26]/10 p-6 rounded-lg">
          <h4 class="font-sans font-bold uppercase tracking-wider text-sm border-b border-[#2d2a26]/10 pb-2 mb-4">Hành Trạng Sơ Lược</h4>
          <dl class="space-y-3 text-sm font-sans">
            <div class="flex justify-between border-b border-dashed border-[#2d2a26]/10 pb-2">
              <dt class="text-gray-500">Pháp hiệu</dt>
              <dd class="font-semibold text-right text-[#1a747a]">Đại Đức Thích Minh Tuệ (Mẫu)</dd>
            </div>
            <div class="flex justify-between border-b border-dashed border-[#2d2a26]/10 pb-2">
              <dt class="text-gray-500">Nơi tu tập</dt>
              <dd class="font-semibold text-right">Tịnh thất Pháp Tạng</dd>
            </div>
            <div class="flex justify-between border-b border-dashed border-[#2d2a26]/10 pb-2">
              <dt class="text-gray-500">Sự nghiệp</dt>
              <dd class="font-semibold text-right">Dịch thuật & Hoằng Pháp</dd>
            </div>
            <div class="flex justify-between pb-1">
              <dt class="text-gray-500">Tác phẩm chính</dt>
              <dd class="font-semibold text-right">Trang Nghiêm Tổng Trì</dd>
            </div>
          </dl>
        </div>
      </div>
    </section>

    <!-- Editorial Pull Quote Section -->
    <section class="border-y border-[#2d2a26] py-12 md:py-16 my-16 md:my-24 text-center max-w-4xl mx-auto">
      <blockquote class="text-2xl md:text-3xl lg:text-4xl text-[#2d2a26] font-light leading-relaxed italic max-w-3xl mx-auto px-4">
        “Tu tập không phải là trốn tránh cuộc đời, mà là đối diện với cuộc đời bằng một tâm thế bình thản và đầy lòng trắc ẩn. Khi tâm ta lặng, thế giới tự khắc bình yên.”
      </blockquote>
      <cite class="block mt-6 not-italic font-sans text-xs md:text-sm uppercase tracking-widest text-gray-500">
        — <span class="font-handwriting text-[#c9922a] text-4xl md:text-5xl lowercase normal-case align-middle inline-block ml-2">Đại Chân Sư</span>
      </cite>
    </section>

    <!-- The Feature Story (3-Column Magazine Layout) -->
    <section class="mb-16 md:mb-24">
      <div class="mb-12 text-center md:text-left">
        <span class="text-xs font-sans tracking-widest uppercase text-[#1a747a] font-bold block mb-2">Cuộc đời & Đạo nghiệp</span>
        <h2 class="font-title text-3xl md:text-5xl font-bold text-[#2d2a26] uppercase tracking-wide">Hành Trình Kiến Tạo & Hoằng Pháp</h2>
        <div class="h-[1px] w-24 bg-[#c9922a] mt-4 mx-auto md:mx-0"></div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12 text-[#2d2a26]/90">
        <!-- Column 1 / Chapter 1 -->
        <div class="space-y-6">
          <div class="border-b border-[#2d2a26]/10 pb-4 mb-6">
            <span class="text-sm font-sans font-bold text-[#c9922a] block mb-1">Chương I</span>
            <h3 class="font-title text-xl font-bold uppercase tracking-wide">Hành Trình Tìm Về Vô Ngã</h3>
          </div>
          <p class="text-base md:text-lg leading-relaxed first-letter:text-7xl first-letter:font-bold first-letter:float-left first-letter:mr-3 first-letter:mt-1 first-letter:text-[#c9922a] first-letter:font-title">
            Không khởi đầu từ những giảng đường tráng lệ hay những đạo tràng hàng ngàn người, hành trình của vị Chân Sư bắt đầu từ một quyết định lặng lẽ: buông bỏ vinh hoa để tìm về cội nguồn của tâm trí. Giữa lòng thành phố nhộn nhịp, Người đã chọn bước đi trên con đường của sự đơn sơ. Nhiều người cho rằng đó là sự ẩn dật, nhưng với Người, đó là sự chuẩn bị nghiêm cẩn nhất để đón nhận ánh sáng Chánh pháp.
          </p>
          <p class="text-base md:text-lg leading-relaxed">
            Những năm tháng khép mình nơi tịnh thất không phải là sự trốn tránh thế gian, mà là quá trình tự soi rọi. Mỗi ngày trôi qua trong tĩnh lặng là một ngày Người đối mặt với những biến chuyển của tâm thức, gạn lọc từng niệm khởi để đạt đến sự bình lặng tuyệt đối. Chính từ giếng sâu của sự im lặng ấy, những thấu thị đầu tiên về kinh điển Đại thừa đã được định hình một cách sâu sắc.
          </p>
        </div>

        <!-- Column 2 / Chapter 2 -->
        <div class="space-y-6 lg:border-x lg:border-[#2d2a26]/10 lg:px-8">
          <div class="border-b border-[#2d2a26]/10 pb-4 mb-6">
            <span class="text-sm font-sans font-bold text-[#c9922a] block mb-1">Chương II</span>
            <h3 class="font-title text-xl font-bold uppercase tracking-wide">Ngọn Đăng Trong Đêm Trường</h3>
          </div>
          <p class="text-base md:text-lg leading-relaxed">
            Khi dịch thuật kinh tạng cổ, khó khăn lớn nhất không chỉ nằm ở việc chuyển ngữ từ cổ tự sang tiếng Việt hiện đại, mà là làm sao truyền tải được tuệ giác giải thoát của chư Tổ. Vị Chân Sư đã dành hàng vạn giờ bên bàn viết gỗ mộc, đối chiếu tỉ mỉ từng bản dịch Phạn ngữ, Hán ngữ và Tạng ngữ để tìm ra từ ngữ thuần Việt tinh tế và súc tích nhất.
          </p>
          <p class="text-base md:text-lg leading-relaxed">
            Từng trang kinh chép tay nhuốm màu thời gian được nâng niu dưới ngọn đèn khuya. Có những thuật ngữ cổ phải mất hàng tuần liền chiêm nghiệm, hành trì thiền định mới có thể chuyển ngữ một cách tròn đầy. Công việc thầm lặng ấy diễn ra ngày qua ngày, năm qua năm, không một tiếng vang, không mưu cầu sự tán dương hay công nhận của thế giới bên ngoài.
          </p>
        </div>

        <!-- Column 3 / Chapter 3 -->
        <div class="space-y-6">
          <div class="border-b border-[#2d2a26]/10 pb-4 mb-6">
            <span class="text-sm font-sans font-bold text-[#c9922a] block mb-1">Chương III</span>
            <h3 class="font-title text-xl font-bold uppercase tracking-wide">Hương Thơm Ngược Gió</h3>
          </div>
          <p class="text-base md:text-lg leading-relaxed">
            Giáo lý của Đức Phật sau khi được Chân Sư chuyển ngữ đã tựa như dòng nước mát lành tự chảy vào đời sống của những người hữu duyên. Không có các chiến dịch truyền thông rầm rộ, những cuốn kinh dịch giải của Người được truyền tay nhau từ người này sang người khác, từ những vị xuất gia tu học đến những người cư sĩ bận rộn giữa chợ đời đầy lo toan.
          </p>
          <p class="text-base md:text-lg leading-relaxed">
            Đến nay, hàng vạn bản dịch đã được in ấn và phát tặng hoàn toàn miễn phí. Những hạt mầm tuệ giác đã nảy mầm trong lòng bao thế hệ, giúp họ tìm lại sự bình yên ngay giữa những giông bão của đời sống hiện đại. Vị Chân Sư vẫn thế, thầm lặng trong thư phòng, mỉm cười dõi theo dòng chảy chánh pháp đang âm thầm tưới mát cuộc đời, mang lại an vui giải thoát.
          </p>
        </div>
      </div>
    </section>

    <!-- Editorial Gallery / Photo Essay Grid -->
    <section class="mb-16 md:mb-24">
      <div class="text-center mb-12">
        <h2 class="font-title text-2xl md:text-3xl font-bold mb-4 uppercase tracking-wider">Khoảnh Khắc Tĩnh Lặng</h2>
        <p class="text-gray-500 font-sans text-sm max-w-xl mx-auto">Phóng sự ảnh ghi lại những hoạt động thường nhật giản dị và trang nghiêm của bậc Thầy.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Photo 1 -->
        <div class="group border border-[#2d2a26]/10 p-2 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1">
          <div class="aspect-[4/3] overflow-hidden bg-gray-100 mb-3">
            <img src="https://images.unsplash.com/photo-1590076212957-93c06ef21604?q=80&w=600&auto=format&fit=crop" 
                 alt="Cảnh tu viện cổ kính" 
                 class="w-full h-full object-cover grayscale contrast-110 transition-transform duration-500 group-hover:scale-103" />
          </div>
          <p class="text-xs text-gray-500 italic pl-1">
            Góc tu viện cổ kính nơi lưu giữ hàng ngàn bản khắc gỗ Phật giáo cổ xưa.
          </p>
        </div>

        <!-- Photo 2 -->
        <div class="group border border-[#2d2a26]/10 p-2 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1">
          <div class="aspect-[4/3] overflow-hidden bg-gray-100 mb-3">
            <img src="https://images.unsplash.com/photo-1506880018603-83d5b814b5a6?q=80&w=600&auto=format&fit=crop" 
                 alt="Kinh điển cổ xưa" 
                 class="w-full h-full object-cover grayscale contrast-110 transition-transform duration-500 group-hover:scale-103" />
          </div>
          <p class="text-xs text-gray-500 italic pl-1">
            Những cuốn kinh chép tay cổ kính được Chân Sư nâng niu, đối chiếu từng trang.
          </p>
        </div>

        <!-- Photo 3 -->
        <div class="group border border-[#2d2a26]/10 p-2 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1">
          <div class="aspect-[4/3] overflow-hidden bg-gray-100 mb-3">
            <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?q=80&w=600&auto=format&fit=crop" 
                 alt="Bút nghiên viết dịch kinh" 
                 class="w-full h-full object-cover grayscale contrast-110 transition-transform duration-500 group-hover:scale-103" />
          </div>
          <p class="text-xs text-gray-500 italic pl-1">
            Góc làm việc mộc mạc với bút nghiên, nơi Chánh pháp được chuyển ngữ.
          </p>
        </div>
      </div>
    </section>

    <!-- Epilogue / Elegant quiet CTA block -->
    <section class="bg-white border border-[#2d2a26]/15 rounded-xl p-8 md:p-12 max-w-4xl mx-auto shadow-sm text-center relative overflow-hidden">
      <!-- Decorative background design -->
      <div class="absolute -top-12 -left-12 w-32 h-32 rounded-full bg-[#1a747a]/5 blur-2xl"></div>
      <div class="absolute -bottom-12 -right-12 w-32 h-32 rounded-full bg-[#c9922a]/5 blur-2xl"></div>
      
      <div class="relative z-10">
        <span class="text-[#c9922a] text-5xl fonthand-writing block mb-4 lowercase normal-case">Nguyện ước lành</span>
        <h3 class="font-title text-2xl md:text-3xl font-bold uppercase tracking-wider text-[#2d2a26] mb-4">
          Góp Một Bàn Tay Gieo Mầm Tuệ Giác
        </h3>
        <p class="text-gray-600 text-sm md:text-base max-w-xl mx-auto leading-relaxed mb-8">
          Mọi ấn phẩm dịch thuật của vị Chân Sư đều được phát hành phi thương mại vì mục đích phụng sự. Quý đạo hữu có thể tải về bản số hóa (PDF, Audio) hoặc đăng ký nhận sách giấy trực tiếp tại đây.
        </p>
        
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
          <a href="/#books" class="w-full sm:w-auto px-8 py-3 bg-[#1a747a] hover:bg-[#c9922a] text-white font-sans text-sm font-semibold uppercase tracking-wider rounded-lg transition-colors duration-300 shadow-sm hover:shadow">
            Đăng Ký Nhận Sách
          </a>
          <a href="#" class="w-full sm:w-auto px-8 py-3 border border-[#2d2a26]/20 hover:border-[#1a747a] hover:text-[#1a747a] text-gray-600 font-sans text-sm font-semibold uppercase tracking-wider rounded-lg transition-colors duration-300">
            Tải Bản Số Hóa
          </a>
        </div>
      </div>
    </section>

  </div>
</div>

<?php get_footer(); ?>
