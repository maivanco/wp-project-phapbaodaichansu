<?php
/**
 * Template Name: Personal Intro
 */
get_header(); 
?>

<div class="bg-[#faf8f5] min-h-screen py-12 md:py-20 text-[#2d2a26]">
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
            <img src="<?php echo IMG_URL;?>thi-ke-de-tu-nhu-lai-thich-long-vien.webp" 
                 alt="Đại Đức Thích Long Viễn" 
                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
          </div>
        </div>
        <p class="text-xs md:text-sm text-gray-500 italic mt-3 border-l-2 border-[#c9922a] pl-3 py-1">
          Ảnh thầy Thích Long Viễn
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

  </div>
</div>

<!-- Editorial Gallery / Photo Essay Grid (Full-Width Masonry Gallery with Wet Glass & Raindrop Mirror Background) -->
<section class="w-full wet-glass-section text-[#2d2a26] py-16 md:py-24 my-8">

  <!-- Wet Glass & Atmospheric Reflection Backdrop -->
  <div class="wet-glass-backdrop">
    <!-- Ambient blurred background image for organic depth -->
    <div class="wet-glass-ambient-image" style="background-image: url('<?php echo IMG_URL;?>anh-thay-Thich-Long-Vien.jpg');"></div>
    
    <!-- Atmospheric glowing spheres: temple amber & teal mist -->
    <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[900px] h-[450px] bg-[#c9922a]/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/4 -left-32 w-[600px] h-[400px] bg-[#1a747a]/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 right-10 w-[700px] h-[450px] bg-[#c9922a]/15 rounded-full blur-3xl pointer-events-none"></div>

    <!-- Frosted Glass Surface (blur & translucency) -->
    <div class="wet-glass-surface"></div>

    <!-- Mirror-like Diagonal Specular Light Sheen -->
    <div class="wet-glass-mirror-sheen"></div>

    <!-- SVG Small Raindrops & Water Droplets Pattern -->
    <svg class="wet-glass-droplets-layer w-full h-full" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <!-- Light refraction within water droplet -->
        <radialGradient id="wetGlassDropCaustic" cx="45%" cy="75%" r="65%">
          <stop offset="0%" stop-color="#ffffff" stop-opacity="0.85" />
          <stop offset="45%" stop-color="#ffffff" stop-opacity="0.25" />
          <stop offset="78%" stop-color="#2c3e50" stop-opacity="0.10" />
          <stop offset="100%" stop-color="#1a252f" stop-opacity="0.30" />
        </radialGradient>
        <!-- Soft shadow beneath droplet -->
        <radialGradient id="wetGlassDropShadow" cx="50%" cy="50%" r="50%">
          <stop offset="50%" stop-color="#1e293b" stop-opacity="0.25" />
          <stop offset="100%" stop-color="#1e293b" stop-opacity="0" />
        </radialGradient>
        
        <!-- Repeating Raindrop & Water Droplets Pattern -->
        <pattern id="wetGlassDrops" width="380" height="380" patternUnits="userSpaceOnUse">
          <!-- Fine condensation mist beads (clusters of tiny moisture) -->
          <circle cx="28" cy="42" r="1.2" fill="#ffffff" opacity="0.8" />
          <circle cx="34" cy="48" r="1" fill="#ffffff" opacity="0.6" />
          <circle cx="112" cy="22" r="1.3" fill="#ffffff" opacity="0.75" />
          <circle cx="118" cy="26" r="0.9" fill="#ffffff" opacity="0.6" />
          <circle cx="165" cy="85" r="1.1" fill="#ffffff" opacity="0.7" />
          <circle cx="215" cy="38" r="1.4" fill="#ffffff" opacity="0.8" />
          <circle cx="221" cy="43" r="1" fill="#ffffff" opacity="0.6" />
          <circle cx="310" cy="55" r="1.2" fill="#ffffff" opacity="0.75" />
          <circle cx="348" cy="115" r="1.3" fill="#ffffff" opacity="0.7" />
          <circle cx="75" cy="165" r="1.2" fill="#ffffff" opacity="0.8" />
          <circle cx="82" cy="170" r="1" fill="#ffffff" opacity="0.55" />
          <circle cx="142" cy="195" r="1.4" fill="#ffffff" opacity="0.75" />
          <circle cx="240" cy="180" r="1.1" fill="#ffffff" opacity="0.7" />
          <circle cx="285" cy="220" r="1.3" fill="#ffffff" opacity="0.8" />
          <circle cx="355" cy="245" r="1.2" fill="#ffffff" opacity="0.65" />
          <circle cx="45" cy="290" r="1.4" fill="#ffffff" opacity="0.75" />
          <circle cx="120" cy="315" r="1" fill="#ffffff" opacity="0.6" />
          <circle cx="195" cy="335" r="1.3" fill="#ffffff" opacity="0.8" />
          <circle cx="265" cy="320" r="1.1" fill="#ffffff" opacity="0.7" />
          <circle cx="330" cy="350" r="1.4" fill="#ffffff" opacity="0.8" />
          <circle cx="337" cy="356" r="0.9" fill="#ffffff" opacity="0.6" />

          <!-- Vertical subtle drip run trails -->
          <!-- Trail 1 -->
          <path d="M 64 60 Q 65 85 63 105 Q 65 125 64 140" stroke="rgba(255,255,255,0.35)" stroke-width="1.2" fill="none" stroke-linecap="round" />
          <!-- Trail 2 -->
          <path d="M 235 120 Q 234 145 236 170 Q 235 195 236 215" stroke="rgba(255,255,255,0.32)" stroke-width="1" fill="none" stroke-linecap="round" />
          <!-- Trail 3 -->
          <path d="M 324 230 Q 325 255 323 275 Q 324 295 323 310" stroke="rgba(255,255,255,0.28)" stroke-width="1" fill="none" stroke-linecap="round" />

          <!-- Droplet 1 (Small) -->
          <ellipse cx="64" cy="141" rx="3.5" ry="3" fill="url(#wetGlassDropShadow)" />
          <circle cx="64" cy="140" r="3.2" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.6)" stroke-width="0.5" />
          <circle cx="62.8" cy="138.8" r="1" fill="#ffffff" opacity="0.95" />
          <ellipse cx="64.8" cy="141.5" rx="1.1" ry="0.6" fill="#ffffff" opacity="0.45" />

          <!-- Droplet 2 (Medium bead) -->
          <ellipse cx="148" cy="52" rx="5" ry="4.2" fill="url(#wetGlassDropShadow)" />
          <circle cx="148" cy="51" r="4.5" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.65)" stroke-width="0.5" />
          <circle cx="146.4" cy="49.4" r="1.4" fill="#ffffff" opacity="0.95" />
          <ellipse cx="149.2" cy="53" rx="1.6" ry="0.8" fill="#ffffff" opacity="0.5" />

          <!-- Droplet 3 (Micro-droplet with glint) -->
          <circle cx="190" cy="98" r="2.2" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.55)" stroke-width="0.4" />
          <circle cx="189.2" cy="97.2" r="0.8" fill="#ffffff" opacity="0.9" />

          <!-- Droplet 4 (Teardrop / Gravity pulled) -->
          <ellipse cx="236" cy="216.5" rx="4.8" ry="4" fill="url(#wetGlassDropShadow)" />
          <path d="M 236 211 C 238.5 211 240.5 213.5 240.5 216 C 240.5 218.5 238.5 220.5 236 220.5 C 233.5 220.5 231.5 218.5 231.5 216 C 231.5 213.5 233.5 211 236 211 Z" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.65)" stroke-width="0.5" />
          <circle cx="234.5" cy="214.5" r="1.3" fill="#ffffff" opacity="0.95" />
          <ellipse cx="237.2" cy="218.2" rx="1.4" ry="0.7" fill="#ffffff" opacity="0.5" />

          <!-- Droplet 5 (Subtle medium) -->
          <ellipse cx="282" cy="85" rx="3.8" ry="3.2" fill="url(#wetGlassDropShadow)" />
          <circle cx="282" cy="84" r="3.5" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.6)" stroke-width="0.5" />
          <circle cx="280.8" cy="82.8" r="1.1" fill="#ffffff" opacity="0.95" />
          <ellipse cx="283" cy="85.5" rx="1.2" ry="0.6" fill="#ffffff" opacity="0.45" />

          <!-- Droplet 6 (Larger water bead) -->
          <ellipse cx="340" cy="175" rx="6.2" ry="5.2" fill="url(#wetGlassDropShadow)" />
          <circle cx="340" cy="174" r="5.8" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.7)" stroke-width="0.5" />
          <circle cx="338" cy="172" r="1.8" fill="#ffffff" opacity="0.95" />
          <ellipse cx="341.5" cy="176.8" rx="2" ry="0.9" fill="#ffffff" opacity="0.5" />

          <!-- Droplet 7 (Small dew) -->
          <ellipse cx="88" cy="245" rx="3.2" ry="2.6" fill="url(#wetGlassDropShadow)" />
          <circle cx="88" cy="244" r="2.8" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.55)" stroke-width="0.4" />
          <circle cx="87" cy="243" r="0.9" fill="#ffffff" opacity="0.9" />

          <!-- Droplet 8 (Medium teardrop) -->
          <ellipse cx="160" cy="265" rx="4.5" ry="3.8" fill="url(#wetGlassDropShadow)" />
          <circle cx="160" cy="264" r="4.2" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.65)" stroke-width="0.5" />
          <circle cx="158.5" cy="262.5" r="1.3" fill="#ffffff" opacity="0.95" />
          <ellipse cx="161.2" cy="266" rx="1.5" ry="0.7" fill="#ffffff" opacity="0.45" />

          <!-- Droplet 9 (Drip end) -->
          <ellipse cx="323" cy="311" rx="4" ry="3.4" fill="url(#wetGlassDropShadow)" />
          <circle cx="323" cy="310" r="3.6" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.6)" stroke-width="0.5" />
          <circle cx="321.7" cy="308.7" r="1.1" fill="#ffffff" opacity="0.95" />
          <ellipse cx="324" cy="311.5" rx="1.2" ry="0.6" fill="#ffffff" opacity="0.45" />

          <!-- Droplet 10 (Gentle dew) -->
          <ellipse cx="230" cy="350" rx="3.5" ry="3" fill="url(#wetGlassDropShadow)" />
          <circle cx="230" cy="349" r="3.2" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.6)" stroke-width="0.5" />
          <circle cx="228.8" cy="347.8" r="1" fill="#ffffff" opacity="0.9" />

          <!-- Droplet 11 (Fine droplet) -->
          <circle cx="28" cy="205" r="2.4" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.55)" stroke-width="0.4" />
          <circle cx="27.2" cy="204.2" r="0.8" fill="#ffffff" opacity="0.9" />

          <!-- Droplet 12 (Fine droplet) -->
          <circle cx="360" cy="68" r="2.5" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.55)" stroke-width="0.4" />
          <circle cx="359.2" cy="67.2" r="0.8" fill="#ffffff" opacity="0.9" />
        </pattern>

        <!-- Secondary offset pattern for organic non-repeating depth -->
        <pattern id="wetGlassDropsSecondary" width="460" height="460" patternUnits="userSpaceOnUse">
          <circle cx="85" cy="95" r="3.4" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.6)" stroke-width="0.5" />
          <circle cx="83.8" cy="93.8" r="1" fill="#ffffff" opacity="0.95" />
          <circle cx="195" cy="160" r="2.2" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.5)" stroke-width="0.4" />
          <circle cx="194.2" cy="159.2" r="0.8" fill="#ffffff" opacity="0.9" />
          <circle cx="380" cy="120" r="4" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.6)" stroke-width="0.5" />
          <circle cx="378.5" cy="118.5" r="1.2" fill="#ffffff" opacity="0.95" />
          <circle cx="130" cy="380" r="3.2" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.55)" stroke-width="0.4" />
          <circle cx="128.8" cy="378.8" r="1" fill="#ffffff" opacity="0.9" />
          <circle cx="290" cy="410" r="4.6" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.65)" stroke-width="0.5" />
          <circle cx="288.4" cy="408.4" r="1.4" fill="#ffffff" opacity="0.95" />
          <circle cx="415" cy="340" r="2" fill="url(#wetGlassDropCaustic)" stroke="rgba(255,255,255,0.5)" stroke-width="0.4" />
          <circle cx="414.2" cy="339.2" r="0.7" fill="#ffffff" opacity="0.9" />
        </pattern>
      </defs>

      <!-- Fill layers with SVG patterns -->
      <rect width="100%" height="100%" fill="url(#wetGlassDrops)" />
      <rect width="100%" height="100%" fill="url(#wetGlassDropsSecondary)" opacity="0.65" />
    </svg>
  </div>

  <div class="container mx-auto px-4 max-w-7xl relative z-10">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-14">
      <div class="inline-flex items-center justify-center gap-3 px-5 py-1.5 rounded-full bg-white/75 backdrop-blur-md border border-white/80 shadow-xs mb-4">
        <span class="h-[1px] w-8 bg-[#c9922a]"></span>
        <span class="text-xs md:text-sm uppercase tracking-[0.25em] text-[#1a747a] font-semibold">Tư Liệu & Thắng Cảnh</span>
        <span class="h-[1px] w-8 bg-[#c9922a]"></span>
      </div>
      <h2 class="text-3xl md:text-5xl font-bold uppercase tracking-wider text-[#2d2a26] mb-4 drop-shadow-[0_1px_1px_rgba(255,255,255,0.9)]">
        Bộ Sưu Tập Hình Ảnh
      </h2>
      <p class="text-[#4a443d] text-sm md:text-base leading-relaxed max-w-2xl mx-auto font-medium">
        Những khoảnh khắc thanh tịnh, hình ảnh chốn trú xứ Phật Đảnh Bảo Vương và hành trình hoằng pháp lợi sinh của Thầy Thích Long Viễn.
      </p>
    </div>

    <!-- Masonry Grid Layout -->
    <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-4 md:gap-6 space-y-4 md:space-y-6">
      
      <!-- Photo Item 1 -->
      <div class="break-inside-avoid inline-block w-full group relative rounded-2xl p-2.5 wet-glass-card">
        <div class="overflow-hidden rounded-xl bg-[#ede7dc] relative shadow-inner">
          <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiWrG8QMgmeOqWImQBYvu5PEp2LE5oIu_3q938ARdpnHt7v0efkwYytoOcQXQefWg3aD2SXi3ibTcvC5EngUp1V6jx0ROoVMHTjiFIoG5FBZivkDK9YcET5TbxM4AR5X_342-aylc1x0gAREkXRFDDySolJ5g9YystX1o4U_tF2ZogSVootU7CyB-SD/w1200-h630-p-k-no-nu/z3616887510472_80195938836eed2327021a205e04bf40.jpg" 
               alt="Thầy Thích Long Viễn" 
               class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105 block" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-75 group-hover:opacity-90 transition-opacity duration-300"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-1 group-hover:translate-y-0 transition-transform duration-300">
            <h3 class="text-sm font-semibold text-white group-hover:text-[#f4d084] transition-colors duration-300">Đại Đức Thích Long Viễn</h3>
            <p class="text-xs text-gray-200 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Chùa Phật Đảnh Bảo Vương</p>
          </div>
        </div>
      </div>

      <!-- Photo Item 2 -->
      <div class="break-inside-avoid inline-block w-full group relative rounded-2xl p-2.5 wet-glass-card">
        <div class="overflow-hidden rounded-xl bg-[#ede7dc] relative shadow-inner">
          <img src="https://scontent.fhan4-3.fna.fbcdn.net/v/t39.30808-6/771909463_122145146835111474_7908241927327642531_n.jpg?stp=dst-jpg_tt6&cstp=mx2048x1536&ctp=s2048x1536&_nc_cat=103&ccb=1-7&_nc_sid=127cfc&_nc_ohc=lZVUlyMbayIQ7kNvwH9RRVM&_nc_oc=AdoT3lpmsF8Ix0PV1DDDFmdO9C_l1PtHyUDQBF_vmwPhUp8GcEKq4R-X-SA4ae3_HMQ&_nc_zt=23&_nc_ht=scontent.fhan4-3.fna&_nc_gid=vu_P5BdFSejGaBx07SZ0ig&_nc_ss=7b2a8&oh=00_AQI4w1dmDSCk5gYgLGMLwxCrk-z9SDEBZWLZMY4UQqvN7Q&oe=6AA9E869" 
               alt="" 
               class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105 block" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-75 group-hover:opacity-90 transition-opacity duration-300"></div>
        </div>
      </div>

      <!-- Photo Item 3 -->
      <div class="break-inside-avoid inline-block w-full group relative rounded-2xl p-2.5 wet-glass-card">
        <div class="overflow-hidden rounded-xl bg-[#ede7dc] relative shadow-inner">
          <img src="https://scontent.fhan4-1.fna.fbcdn.net/v/t39.30808-6/754143416_122141915541111474_5794926958798317414_n.jpg?stp=dst-jpg_tt6&cstp=mx1348x1265&ctp=s1348x1265&_nc_cat=105&ccb=1-7&_nc_sid=127cfc&_nc_ohc=e6KV-Sq6WMcQ7kNvwFXxKzx&_nc_oc=Adq_I4FCqQB21c_wDR54Kk4Zx41E_XyHrjbbujBxq1BFfjcD-QhJ1uWXDCTjyZKdqKs&_nc_zt=23&_nc_ht=scontent.fhan4-1.fna&_nc_gid=TDscDnSFYgrTDWhtbwpbyw&_nc_ss=7b2a8&oh=00_AQKdKyCw3bTbVmKv2rOXxPcxTO8nM5py976FhyfKA7ZVDg&oe=6AAA0117" 
               alt="" 
               class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105 block" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-75 group-hover:opacity-90 transition-opacity duration-300"></div>
        </div>
      </div>

      <!-- Photo Item 4 -->
      <div class="break-inside-avoid inline-block w-full group relative rounded-2xl p-2.5 wet-glass-card">
        <div class="overflow-hidden rounded-xl bg-[#ede7dc] relative shadow-inner">
          <img src="https://scontent.fhan3-2.fna.fbcdn.net/v/t39.30808-6/794262190_122148382389111474_217835910334839665_n.jpg?stp=cp6_dst-jpg_tt6&cstp=mx1092x1446&ctp=s1092x1446&_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_ohc=J2V8S_Tm_p8Q7kNvwFdAwdf&_nc_oc=AdoL7MIXELGtZVTOmcR9kf0F9kGKGO3X1rdEJmARjiEGy3XMNWCIHX9JsoGNI7Dxh_Y&_nc_zt=23&_nc_ht=scontent.fhan3-2.fna&_nc_gid=iSd1Th0BHhg2sNaFY8aA2Q&_nc_ss=7b2a8&oh=00_AQLj3hNKkdlbuV1y8mfrSN5EmUeGfildX9TKitvNyo7evA&oe=6AA9D2FF" 
               alt="Kinh Sách & Biên Dịch" 
               class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105 block" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-75 group-hover:opacity-90 transition-opacity duration-300"></div>
        </div>
      </div>

      <!-- Photo Item 5 -->
      <div class="break-inside-avoid inline-block w-full group relative rounded-2xl p-2.5 wet-glass-card">
        <div class="overflow-hidden rounded-xl bg-[#ede7dc] relative shadow-inner">
          <img src="https://scontent.fhan3-4.fna.fbcdn.net/v/t39.30808-6/580860953_122101809267111474_305811052544553943_n.jpg?stp=dst-jpg_tt6&cstp=mx1440x1435&ctp=s1440x1435&_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=4B4yeCvlN64Q7kNvwFm9t3J&_nc_oc=AdoKxGWC3w3TCMFEAcH-N6TLbvexR8xplq8xLTZ3vQA5T06IBa7wVS_YdXzhKKWummg&_nc_zt=23&_nc_ht=scontent.fhan3-4.fna&_nc_gid=819W2aRV3fS3ClEw8by7Pw&_nc_ss=7b2a8&oh=00_AQJW4vDGJeIEdSl6_q1kx0MrTgtotkV3pA8xfC4twaRV9g&oe=6AA9D04E" 
               alt="Chân dung Thầy Thích Long Viễn" 
               class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105 block" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-75 group-hover:opacity-90 transition-opacity duration-300"></div>
        </div>
      </div>

      <!-- Photo Item 6 -->
      <div class="break-inside-avoid inline-block w-full group relative rounded-2xl p-2.5 wet-glass-card">
        <div class="overflow-hidden rounded-xl bg-[#ede7dc] relative shadow-inner">
          <img src="https://scontent.fhan3-3.fna.fbcdn.net/v/t39.30808-6/761497503_122143300941111474_3578873891614490672_n.jpg?stp=c0.187.1480.1480a_dst-jpg_tt6&cstp=mx1480x1480&ctp=s640x640&_nc_cat=101&ccb=1-7&_nc_sid=714c7a&_nc_ohc=9jtcHGA_XKkQ7kNvwF2BC9R&_nc_oc=Adr0_pjsHW_9qOpa1DeuJlUJQp8pC_8WNwW7f3tet5N1Uh9WkMoNLqSfFziZd8XQUn4&_nc_zt=23&_nc_ht=scontent.fhan3-3.fna&_nc_gid=hNDoRkI1psyQ2jrt8un2XA&_nc_ss=7b2a8&oh=00_AQLJqMg89TxNHdjBbCox0o_JLKHf7Ym9n_kyN4J0OGOMaA&oe=6AA9E757" 
               alt="" 
               class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105 block" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-75 group-hover:opacity-90 transition-opacity duration-300"></div>
          <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-1 group-hover:translate-y-0 transition-transform duration-300">
            <h3 class="text-sm font-semibold text-white group-hover:text-[#f4d084] transition-colors duration-300">Liên Hoa Hạ Sanh</h3>
            <p class="text-xs text-gray-200 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Biểu tượng điềm lành ứng mộng</p>
          </div>
        </div>
      </div>

      <!-- Photo Item 8 -->
      <div class="break-inside-avoid inline-block w-full group relative rounded-2xl p-2.5 wet-glass-card">
        <div class="overflow-hidden rounded-xl bg-[#ede7dc] relative shadow-inner">
          <img src="<?php echo IMG_URL;?>anh-thay-Thich-Long-Vien.jpg" 
               alt="" 
               class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105 block" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-75 group-hover:opacity-90 transition-opacity duration-300"></div>
        </div>
      </div>

      <!-- Photo Item 9 -->
      <div class="break-inside-avoid inline-block w-full group relative rounded-2xl p-2.5 wet-glass-card">
        <div class="overflow-hidden rounded-xl bg-[#ede7dc] relative shadow-inner">
          <img src="https://scontent.fhan4-2.fna.fbcdn.net/v/t39.30808-6/778664650_122146110525111474_1244461631909286304_n.jpg?stp=c0.91.571.571a_cp6_dst-jpg_tt6&cstp=mx571x571&ctp=s571x571&_nc_cat=111&ccb=1-7&_nc_sid=714c7a&_nc_ohc=Ly8bjh3mL9kQ7kNvwFqlO1a&_nc_oc=AdpdSIRKZoLzDbcIuH_NNk-ljaQGTfTcT4mSWqSFfWRbylyX0b5nOAj0qPIdk3Y5VDQ&_nc_zt=23&_nc_ht=scontent.fhan4-2.fna&_nc_gid=hNDoRkI1psyQ2jrt8un2XA&_nc_ss=7b2a8&oh=00_AQLAb0uMw1tzPELDYyj6Pb611qqBuxNkhMrfFKTqo8Yqbg&oe=6AA9F274" 
               alt="Phong Cảnh Khánh Hòa" 
               class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105 block" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-75 group-hover:opacity-90 transition-opacity duration-300"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="bg-[#faf8f5] py-12 md:py-20 text-[#2d2a26]">
  <div class="container mx-auto px-4 max-w-6xl">

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
  

  <!-- Testimonials Section -->
  <?php get_template_part('partials/sections/testimonials'); ?>

  </div>
</div>


<?php get_footer(); ?>
