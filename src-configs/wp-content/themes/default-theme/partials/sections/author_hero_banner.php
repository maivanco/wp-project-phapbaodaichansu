<?php
/**
 * Partial Section: Author Fullscreen Hero Banner
 * 
 * Displays the sacred meditation portrait of Thích Long Viễn as a fullscreen hero banner.
 * Seamlessly extends non-16:9 aspect ratio with tailored lateral ambient stone tones
 * and displays the sacred Zen poem in a luminous transparent frosted glass box at the bottom.
 */

$banner_image = IMG_URL . 'thay-thich-long-vien-toa-thien.jpg';
?>

<section id="author-hero-banner" 
         class="relative w-full h-[85vh] md:h-[92vh] lg:h-[calc(100vh-80px)] min-h-[600px] max-h-[1050px] overflow-hidden flex flex-col justify-end items-center select-none bg-[#1d1815]"
         aria-label="<?php esc_attr_e('Hình ảnh Đại Đức Thích Long Viễn toạ thiền và thi kệ', 'pbdcs'); ?>">

  <!-- Ambient Extension Layer: Matching Left (Sandstone) & Right (Granite) Temple Atmosphere -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden" aria-hidden="true">
    <!-- Blurred Full-bleed Ambient Backdrop from the original photo -->
    <img src="<?php echo esc_url($banner_image); ?>" 
         alt="" 
         class="w-full h-full object-cover object-center filter blur-xl md:blur-2xl scale-110 opacity-95 brightness-[0.98] contrast-[1.02] transform" />
    
    <!-- Top subtle vignette for clean header separation -->
    <div class="absolute inset-x-0 top-0 h-20 bg-gradient-to-b from-black/30 via-black/10 to-transparent"></div>

    <!-- Bottom ambient dark vignette specifically for the poem box readability -->
    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-[#0e0c0a]/95 via-[#0e0c0a]/65 to-transparent"></div>
  </div>

  <!-- Foreground Main Image: Center 4:3 Sacred Composition with Seamless Feathered Edges -->
  <div class="relative z-10 w-full h-full flex items-center justify-center pointer-events-none">
    <img src="<?php echo esc_url($banner_image); ?>" 
         alt="Đại Đức Thích Long Viễn toạ thiền" 
         class="h-full w-full md:w-auto object-cover md:object-contain object-center max-h-[85vh] md:max-h-[92vh] lg:max-h-[calc(100vh-80px)] select-none md:[mask-image:linear-gradient(to_right,transparent_0%,black_3%,black_97%,transparent_100%)] md:[-webkit-mask-image:linear-gradient(to_right,transparent_0%,black_3%,black_97%,transparent_100%)]" />
  </div>

  <!-- Transparent Frosted Glass Poem Box at the Bottom -->
  <div class="absolute bottom-4 sm:bottom-6 md:bottom-8 left-1/2 -translate-x-1/2 z-20 w-[94%] sm:w-[88%] max-w-xl md:max-w-2xl px-5 py-3.5 sm:px-7 sm:py-4 rounded-2xl bg-[#120f0d]/30 backdrop-blur-md border border-[#c9922a]/40 shadow-[0_12px_40px_rgba(0,0,0,0.6)] text-center transition-all duration-300 hover:bg-[#120f0d]/75 hover:border-[#c9922a]/60">
    
    <!-- Sacred 4-Line Poem Content -->
    <div class="space-y-1 sm:space-y-1.5 text-[#fcfaf7] text-2xl lg:text-3xl leading-relaxed tracking-wide drop-shadow-[0_2px_4px_rgba(0,0,0,0.9)] font-handwriting">
      <p>Diệu thượng trùng san xuyên vạn kiếp</p>
      <p>Pháp tòa chi nội trụ thiên tâm</p>
      <p>Liên đàng lục đạo hoằng hựu hiệp</p>
      <p>Hoa khai bách diệp lý trùng san.</p>
    </div>

    <!-- Bottom Delicate Emblem -->
    <div class="mt-2 flex items-center justify-center gap-2">
      <span class="h-[1px] w-5 bg-[#c9922a]/40"></span>
      <span class="w-1.5 h-1.5 rotate-45 bg-[#c9922a]/80 rounded-[1px]"></span>
      <span class="h-[1px] w-5 bg-[#c9922a]/40"></span>
    </div>

  </div>

</section>
