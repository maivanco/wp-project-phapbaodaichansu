<?php
/**
 * Template Name: Hộ Pháp Phật Giáo
 */
get_header(); 

// Data array for all Dharma Protectors with real custom generated and verified temple images
$dharma_protectors = [
  [
    'id' => 'vi-da-ton-thien',
    'title' => 'Hộ Pháp Vi Đà Tôn Thiên Bồ Tát',
    'sanskrit' => 'Skanda / Veda Bodhisattva',
    'chinese' => '韋馱尊天菩薩',
    'role' => 'Thủ Hộ Tam Bảo & Tăng Đoàn',
    'image' => IMG_URL . 'ho-phap-vi-da.jpg',
    'weapons' => 'Chày Kim Cang (Vajra Pestle), Áo giáp vàng kim dũng mãnh',
    'short_desc' => 'Vị Hộ Pháp đứng uy dũng bên Chánh điện, cầm chày Kim Cang bảo vệ Tăng đoàn tu học và giữ gìn xá lợi Phật.',
    'full_desc' => 'Vi Đà Tôn Thiên Bồ Tát là vị Nam Thiên Đại Tướng Quân dũng mãnh. Khi Đức Thế Tôn nhập Niết Bàn, La Sát Quỷ lén trộm xá lợi Phật, chính Ngài đã dõng mãnh đuổi theo thu hồi xá lợi về cho chư Thiên và nhân loại thờ phụng. Ngài phát nguyện: "Ở đâu có Tăng đoàn tu hành chân chính, ở đó có Vi Đà bái hộ."',
    'vows' => 'Bảo vệ Tam Bảo, giữ gìn xá lợi Phật, hộ trì Tăng đoàn tu học thanh tịnh, xua đuổi ma chướng.',
    'mantra' => 'Nam Mô Phổ Hiền Vi Đà Tôn Thiên Bồ Tát Ha Ha Ha Ha Ma Ha Mật'
  ],
  [
    'id' => 'tieu-dien-dai-si',
    'title' => 'Tiêu Diện Đại Sĩ',
    'sanskrit' => 'Jvalamukha / Avalokiteśvara Manifestation',
    'chinese' => '焦面大士 (面燃王菩薩)',
    'role' => 'Diện Nhiên Vương Bồ Tát - Quan Âm Hóa Thân',
    'image' => IMG_URL . 'tieu-dien-dai-si.jpg',
    'weapons' => 'Lưỡi lửa, hai sừng nhọn uy nghi, Cờ lệnh cứu độ Ngạ Quỷ',
    'short_desc' => 'Hóa thân dũng mãnh của Bồ Tát Quán Thế Âm với diện tướng rực lửa chiêu phục ma quân và cứu khổ cõi Ngạ Quỷ.',
    'full_desc' => 'Tiêu Diện Đại Sĩ (Diện Nhiên Vương Bồ Tát) là hiện thân mật tích của Bồ Tát Quán Thế Âm. Mang dung mạo phát ra ngọn lửa đỏ, hai sừng nhọn, lưỡi dài phun lửa, Ngài dùng uy lực hàng phục các loài ma quỷ hung tợn, chủ trì đàn tràng Chẩn Tế Mông Sơn ban phát cơm ăn áo mặc và khai thị giải thoát.',
    'vows' => 'Cứu độ chúng sinh cõi Ngạ Quỷ, trấn áp ma chướng kiêu man, biến khổ đau thành hoa sen giải thoát.',
    'mantra' => 'Nam Mô Diện Nhiên Vương Bồ Tát Ma Ha Tát'
  ],
  [
    'id' => 'dai-tu-tai-thien',
    'title' => 'Đại Tự Tại Thiên Vương',
    'sanskrit' => 'Maheśvara / Śiva',
    'chinese' => '大自在天王',
    'role' => 'Vua Cõi Sắc Cứu Cánh Thiên - Hộ Trì Thiền Định',
    'image' => IMG_URL . 'dai-tu-tai-thien.jpg',
    'weapons' => 'Tam xoa kích (Trishula), Bảo tháp, Tràng hạt Kim Cang',
    'short_desc' => 'Vị Thiên Vương tối cao cai quản cõi Sắc Giới, nguyện quy y Phật Pháp, trấn áp kiêu man và che chở cho người tu thiền.',
    'full_desc' => 'Đại Tự Tại Thiên (Maheśvara) là vị Trời cai quản đỉnh cao nhất của cõi Sắc Giới (Sắc Cứu Cánh Thiên). Trong kinh điển Phật giáo Đại thừa, Ngài kính ngưỡng Đức Thế Tôn, phát nguyện xả bỏ tâm kiêu man ngoại đạo để trở thành vị Hộ Pháp đắc lực bảo hộ Phật Pháp và hành giả thiền định.',
    'vows' => 'Trấn áp tà ma ngoại đạo, bảo vệ chốn thanh tịnh cho người tu tập thiền định, ban trí tuệ thanh tịnh.',
    'mantra' => 'Om Mahesvaraya Namah'
  ],
  [
    'id' => 'tu-dai-thien-vuong',
    'title' => 'Tứ Đại Thiên Vương',
    'sanskrit' => 'Cāturmahārājika / Four Heavenly Kings',
    'chinese' => '四大天王 (護世四天王)',
    'role' => 'Bốn Vị Vua Cai Quản Bốn Phương Núi Tu Di',
    'image' => IMG_URL . 'tu-dai-thien-vuong.jpg',
    'weapons' => 'Đàn Pipa, Bảo Kiếm, Rắn Thần/Xích Long, Lọng Báu Trắng',
    'short_desc' => '4 vị Vương giữ gìn thế giới: Đông Phương Trì Quốc, Nam Phương Tăng Trưởng, Tây Phương Quảng Mục, Bắc Phương Đa Văn.',
    'full_desc' => 'Tứ Đại Thiên Vương cai quản 4 phương hướng núi Tu Di. Đông Phương Trì Quốc Thiên Vương dùng đàn Pipa cảm hóa chúng sinh; Nam Phương Tăng Trưởng dùng bảo kiếm phát triển thiện căn; Tây Phương Quảng Mục dùng mắt thần và xích long quán sát thế gian; Bắc Phương Đa Văn (Tài Bảo Thiên Vương) mang lọng báu che chở Tam Bảo.',
    'vows' => 'Bảo vệ thế giới an bình, giúp Phật tử gia tăng công đức, che chở chốn tự viện 4 phương.',
    'mantra' => 'Om Caturmaharaja Swaha'
  ],
  [
    'id' => 'gia-lam-bo-tat',
    'title' => 'Già Lam Bồ Tát (Quan Công)',
    'sanskrit' => 'Saṅghārāma Bodhisattva',
    'chinese' => '伽藍菩薩 (關聖帝君)',
    'role' => 'Thần Trấn Giữ Tự Viện - Hộ Trì Thiền Môn',
    'image' => IMG_URL . 'gia-lam-bo-tat.jpg',
    'weapons' => 'Thanh Long Yển Nguyệt Đao, Áo giáp xanh uy nghi',
    'short_desc' => 'Vị Hộ Pháp trung nghĩa tuyệt đối. Ngài quy y Phật Pháp dưới sự hóa độ của Trí Giả Đại Sư, phát nguyện trấn giữ chốn Già Lam.',
    'full_desc' => 'Già Lam Bồ Tát (Quan Thánh Đế Quân) được Tổ Trí Giả Đại Sư hóa độ trao ngũ giới quy y Tam Bảo trên núi Ngọc Tuyền. Ngài phát nguyện mang uy lực trung nghĩa thanh cao để bảo vệ tài sản, sự tịnh ninh cho chùa chiền và chư Tăng tu học.',
    'vows' => 'Bảo vệ chốn Già Lam tự viện, trừ khử kẻ gian quấy phá thiền môn.',
    'mantra' => 'Nam Mô Già Lam Phụ Pháp Bồ Tát'
  ],
  [
    'id' => 'dai-hac-thien',
    'title' => 'Đại Hắc Thiên Hộ Pháp',
    'sanskrit' => 'Mahākāla / Great Black One',
    'chinese' => '大黑天神 (瑪哈嘎拉)',
    'role' => 'Hộ Pháp Mật Tông - Trừ Vô Minh & Hộ Đạo Trang',
    'image' => IMG_URL . 'dai-hac-thien.jpg',
    'weapons' => 'Dao gạt vô minh (Kartika), Bình sọ người (Kapala), Tràng hạt lâu la',
    'short_desc' => 'Vị Hộ Pháp uy nghiêm Mật Tông tượng trưng cho sức mạnh tiêu trừ tham-sân-si và đập tan chướng ngại.',
    'full_desc' => 'Đại Hắc Thiên (Mahākāla) là hóa thân dũng mãnh của Đức Quán Thế Âm nhằm nhiếp phục các lực lượng ma quỷ hung hãn. Ba mắt quan sát ba thời, thần lực rực rỡ giúp đập tan mọi chướng ngại trên con đường giác ngộ.',
    'vows' => 'Đập tan vô minh phiền não, tiêu trừ nghèo khổ thiếu thốn, bảo vệ hành giả tu học.',
    'mantra' => 'Om Mahakalaya Soha'
  ],
  [
    'id' => 'de-thich-thien',
    'title' => 'Đế Thích Thiên Vương (Trời Đế Thích)',
    'sanskrit' => 'Śakra Devānām Indra',
    'chinese' => '帝釋天王 (釋提桓因)',
    'role' => 'Chủ Cõi Trời Đao Lợi (Trời Trụ Tam Thập Tam)',
    'image' => 'https://images.unsplash.com/photo-1545389336-cf090694435e?q=80&w=800&auto=format&fit=crop',
    'weapons' => 'Lọng hoa báu, Bảo ngọc Như Ý, Voi thần Airavata (33 đầu)',
    'short_desc' => 'Ngọc Hoàng Thiên Chủ cõi Đao Lợi, thường dẫn đầu chư Thiên xuống cõi trần thỉnh Đức Phật thuyết pháp và che lọng bảo vệ Ngài.',
    'full_desc' => 'Đế Thích Thiên Vương (Śakra) trị vì cõi trời Đao Lợi ngự trên đỉnh núi Tu Di. Ngài thành kính tuyệt đối với Đức Thế Tôn, thường che lọng báu cho Ngài và hộ trì người thọ trì Kinh Kim Cang, Pháp Hoa.',
    'vows' => 'Hộ trì người đọc tụng thọ trì Kinh Kim Cang, Pháp Hoa; bảo vệ người nhân từ.',
    'mantra' => 'Nam Mô Đế Thích Thiên Vương Bồ Tát'
  ],
  [
    'id' => 'dai-pham-thien',
    'title' => 'Đại Phạm Thiên Vương',
    'sanskrit' => 'Brahmā Sahāmpati',
    'chinese' => '大梵天王',
    'role' => 'Chủ Cõi Sơ Thiền Phạm Thiên - Vị Thỉnh Chuyển Pháp Luân',
    'image' => 'https://images.unsplash.com/photo-1518241353330-0f7941c2d9b5?q=80&w=800&auto=format&fit=crop',
    'weapons' => 'Pháp Ốc (Tùng ốc), Đóa Hoa Sen Vàng, Bình Cam Lồ',
    'short_desc' => 'Vị Thiên Vương đầu tiên dâng hoa sen vàng kính thỉnh Đức Thế Tôn Chuyển Pháp Luân sau khi thành đạo dưới cội Bồ Đề.',
    'full_desc' => 'Đại Phạm Thiên Vương (Brahmā) cai quản cõi Sơ Thiền. Khi Đức Thế Tôn đắc quả Chánh Đẳng Chánh Giác, Phạm Thiên Vương đã giáng trần quỳ dâng hoa sen vàng kính thỉnh Đức Phật thuyết pháp vì lợi ích muôn loài.',
    'vows' => 'Kính thỉnh Chánh Pháp trường tồn, hộ trì chư Tăng giảng kinh thuyết pháp.',
    'mantra' => 'Om Brahmane Namah'
  ],
  [
    'id' => 'bat-bo-kim-cang',
    'title' => 'Bát Bộ Kim Cang Lực Sĩ',
    'sanskrit' => 'Eight Vajra Guardians / Vajrapāṇi',
    'chinese' => '八部金剛力士',
    'role' => 'Tám Vị Kim Cang Thần Lực Hộ Trì Kinh Kim Cang',
    'image' => 'https://images.unsplash.com/photo-1599839575945-a9e5af0c3fa5?q=80&w=800&auto=format&fit=crop',
    'weapons' => 'Chày Kim Cang, Bảo kiếm, Xích sắt, Bát tiên chấn ma',
    'short_desc' => 'Tám vị thần lực sĩ dũng mãnh (Thanh Trừ Tai, Tịch Độc Thần, Hoàng Tùy Cầu...) chuyên hộ trì người đọc tụng Kinh Kim Cang.',
    'full_desc' => 'Bát Bộ Kim Cang gồm 8 vị Thần Lực Sĩ có thân hình kim cương bất biến, phát nguyện bảo vệ hành giả tu tập bát nhã trí tuệ và tiêu trừ tai nạn.',
    'vows' => 'Trấn phá ma chướng, tiêu trừ tai nạn bệnh tật, hộ trì hành giả tụng Kinh Kim Cang.',
    'mantra' => 'Nam Mô Bát Đại Kim Cang Mật Tích Bồ Tát'
  ],
  [
    'id' => 'ma-loi-chi-thien',
    'title' => 'Ma Lợi Chi Thiên Bồ Tát',
    'sanskrit' => 'Mārīcī Devī',
    'chinese' => '摩利支天菩薩',
    'role' => 'Nữ Thần Hộ Pháp Ẩn Hình - Cứu Nạn Trộm Cướp',
    'image' => 'https://images.unsplash.com/photo-1519817650390-64a93db51149?q=80&w=800&auto=format&fit=crop',
    'weapons' => 'Xe báu 7 heo thần, Cung tên vàng, Gương thần ẩn hình',
    'short_desc' => 'Vị Nữ Bồ Tát có thần lực ẩn hình biến hóa, che chở chúng sinh thoát khỏi nguy hiểm của chiến tranh, trộm cướp, hoạn nạn.',
    'full_desc' => 'Ma Lợi Chi Thiên (Mārīcī) tượng trưng cho ánh sáng đi trước mặt trời. Ngài có thần lực ẩn hình kẻ thù không thể bắt hay hại, che chở bình an trong mọi chuyến đi xa.',
    'vows' => 'Ẩn hình che chở hành giả thoát khỏi oán đối, trộm cướp, tù ngục, nạn tai đường xa.',
    'mantra' => 'Om Marici Mam Swaha'
  ],
  [
    'id' => 'cat-tuong-thien-nu',
    'title' => 'Cát Tường Thiên Nữ',
    'sanskrit' => 'Śrīmahādevī / Lakṣmī',
    'chinese' => '吉祥天女 (大吉祥天女)',
    'role' => 'Nữ Thần Ban Phước Cát Tường - Trang Nghiêm Đạo Trang',
    'image' => 'https://images.unsplash.com/photo-1609137144813-7d9921338f24?q=80&w=800&auto=format&fit=crop',
    'weapons' => 'Ngọc Như Ý, Đóa Hoa Sen Hồng, Ấn Bố Thí Phước Lành',
    'short_desc' => 'Vị Thiên Nữ mang lại may mắn, trang nghiêm công đức và sự thịnh vượng tâm linh cho người phụng sự Tam Bảo.',
    'full_desc' => 'Đại Cát Tường Thiên Nữ phát nguyện đem lại sự an lạc, đầy đủ về cả vật chất lẫn tinh thần cho những Phật tử thành tâm hướng thiện.',
    'vows' => 'Trang nghiêm đạo trang, tiêu trừ nghèo nàn, ban phước lành và sự cát tường.',
    'mantra' => 'Om Mahasriye Swaha'
  ],
  [
    'id' => 'thien-long-bat-bo',
    'title' => 'Thiên Long Bát Bộ Hộ Pháp',
    'sanskrit' => 'Aṣṭagatayaḥ / Eight Classes of Beings',
    'chinese' => '天龍八部護法',
    'role' => 'Tám Chủng Tộc Quần Sanh Bảo Vệ Phật Pháp',
    'image' => 'https://images.unsplash.com/photo-1563245372-f21724e3856d?q=80&w=800&auto=format&fit=crop',
    'weapons' => 'Bảo châu Long Vương, Cánh vàng Ca Lâu La, Đàn thần Càn Thát Bà',
    'short_desc' => '8 chủng tộc siêu nhiên (Thiên, Long, Dạ Xoa, Càn Thát Bà, A Tu La, Ca Lâu La, Khẩn Na La, Ma Hầu La Già) bảo vệ chốn thiền môn.',
    'full_desc' => 'Thiên Long Bát Bộ gồm 8 lực lượng hùng mạnh trong vũ trụ quy phục dưới ánh sáng từ bi của Phật Pháp, lập hàng rào bảo vệ pháp hội và kinh điển.',
    'vows' => 'Lập hàng rào bảo vệ pháp hội, che chở kinh điển và người tu học khỏi sự quấy phá của ma vương.',
    'mantra' => 'Nam Mô Thiên Long Bát Bộ Chư Hiền Thánh Chúng'
  ]
];
?>

<!-- Full Screen Hero Banner: Realistic Heavenly Celestial Realm of Dharma Protectors -->
<section id="hero-realm-section" class="relative w-full min-h-screen flex items-center justify-center overflow-hidden text-white bg-black select-none">
  
  <!-- Scene 1 Background Image: Majestic Celestial Imperial Palace (Attachment Style) -->
  <div id="hero-bg-scene-1" 
       class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-1000 transform scale-105 opacity-100" 
       style="background-image: url('<?php echo esc_url(IMG_URL . 'dharma-protectors-hero-majestic.jpg'); ?>');">
  </div>

  <!-- Scene 2 Background Image: Dragon Marble Pillars & Floating Golden Temple -->
  <div id="hero-bg-scene-2" 
       class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-1000 transform scale-105 opacity-0 pointer-events-none" 
       style="background-image: url('<?php echo esc_url(IMG_URL . 'dharma-protectors-hero-sky.jpg'); ?>');">
  </div>

  <!-- Scene 3 Background Image: Grand White Marble Sky Bridge Causeway -->
  <div id="hero-bg-scene-3" 
       class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-1000 transform scale-105 opacity-0 pointer-events-none" 
       style="background-image: url('<?php echo esc_url(IMG_URL . 'dharma-protectors-hero-bridge.jpg'); ?>');">
  </div>

  <!-- Ambient Volumetric Lighting & Atmospheric Gradients -->
  <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-[#faf8f5]"></div>
  <div class="absolute inset-0 bg-radial from-amber-400/15 via-transparent to-black/70 pointer-events-none"></div>

  <!-- Animated Ethereal Mist Particle Glow Overlay -->
  <div class="absolute inset-x-0 bottom-0 h-64 bg-gradient-to-t from-[#faf8f5] via-[#faf8f5]/40 to-transparent pointer-events-none"></div>

  <!-- Main Hero Content Container -->
  <div class="relative z-10 container mx-auto px-4 text-center max-w-6xl py-20 flex flex-col items-center justify-center min-h-screen">
    
    <!-- Hero Glassmorphic Main Card -->
    <div class="w-full bg-black/40 backdrop-blur-xl border border-amber-300/30 rounded-3xl p-6 md:p-12 shadow-[0_25px_60px_rgba(0,0,0,0.75)] relative overflow-hidden">
      
      <!-- Corner Decorative Gold Ornaments -->
      <div class="absolute top-3 left-3 w-6 h-6 border-t-2 border-l-2 border-amber-400/60 rounded-tl-lg pointer-events-none"></div>
      <div class="absolute top-3 right-3 w-6 h-6 border-t-2 border-r-2 border-amber-400/60 rounded-tr-lg pointer-events-none"></div>
      <div class="absolute bottom-3 left-3 w-6 h-6 border-b-2 border-l-2 border-amber-400/60 rounded-bl-lg pointer-events-none"></div>
      <div class="absolute bottom-3 right-3 w-6 h-6 border-b-2 border-r-2 border-amber-400/60 rounded-br-lg pointer-events-none"></div>

      <!-- Top Pill Badge with Live Pulse -->
      <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-amber-500/20 border border-amber-300/40 text-amber-200 text-xs md:text-sm uppercase font-bold tracking-[0.25em] mb-6 shadow-inner">
        <span class="relative flex h-2.5 w-2.5">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-amber-300"></span>
        </span>
        <span>Tam Bảo Thủ Hộ • Chốn Thiên Cung & Già Lam Tịnh Cảnh</span>
      </div>

      <!-- Sino-Vietnamese Sacred Sub-header -->
      <p class="text-xs md:text-sm text-amber-300/90 tracking-[0.35em] uppercase mb-3 drop-shadow">
        護 法 尊 天 • 鎮 壓 魔 軍 • 護 持 正 法
      </p>

      <!-- Main Hero Title with Realistic Gold Metallic Gradient -->
      <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-white uppercase mb-6 leading-[1.15] drop-shadow-[0_8px_20px_rgba(0,0,0,0.9)]">
        Các Vị Đại Hộ Pháp <br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-100 via-amber-300 via-yellow-200 to-amber-400">
          Trong Phật Giáo
        </span>
      </h1>

      <!-- Inspirational Quote & Description -->
      <p class="text-sm md:text-lg text-gray-200 max-w-3xl mx-auto leading-relaxed italic mb-8 drop-shadow-md font-light">
        "Chốn Thiên Cung & Già Lam Tịnh Cảnh — Nơi Chư Vị Hộ Pháp Dõng Mãnh Phát Nguyện Bảo Hộ Chánh Pháp, Giữ Gìn Tăng Đoàn Thanh Tịnh & Che Chở Cho Người Tu Chân Chính."
      </p>

      <!-- Quick Search & Category Filter Chips -->
      <div class="flex flex-wrap items-center justify-center gap-2 md:gap-3 mb-10 max-w-4xl mx-auto">
        <span class="text-xs uppercase font-semibold text-amber-300/80 mr-1 hidden sm:inline-block">Lọc nhanh:</span>
        <button onclick="quickFilter('vi da')" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-amber-400/30 border border-white/20 hover:border-amber-300 text-xs font-semibold text-gray-200 hover:text-amber-200 transition-all shadow-sm flex items-center gap-1.5">
          <span>⚡ Vi Đà Tôn Thiên</span>
        </button>
        <button onclick="quickFilter('tieu dien')" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-amber-400/30 border border-white/20 hover:border-amber-300 text-xs font-semibold text-gray-200 hover:text-amber-200 transition-all shadow-sm flex items-center gap-1.5">
          <span>🔥 Tiêu Diện Đại Sĩ</span>
        </button>
        <button onclick="quickFilter('tu dai')" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-amber-400/30 border border-white/20 hover:border-amber-300 text-xs font-semibold text-gray-200 hover:text-amber-200 transition-all shadow-sm flex items-center gap-1.5">
          <span>👑 Tứ Đại Thiên Vương</span>
        </button>
        <button onclick="quickFilter('bat bo')" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-amber-400/30 border border-white/20 hover:border-amber-300 text-xs font-semibold text-gray-200 hover:text-amber-200 transition-all shadow-sm flex items-center gap-1.5">
          <span>🛡️ Bát Bộ Kim Cang</span>
        </button>
        <button onclick="quickFilter('gia lam')" class="px-3.5 py-1.5 rounded-full bg-white/10 hover:bg-amber-400/30 border border-white/20 hover:border-amber-300 text-xs font-semibold text-gray-200 hover:text-amber-200 transition-all shadow-sm flex items-center gap-1.5">
          <span>⛩️ Già Lam Bồ Tát</span>
        </button>
      </div>

      <!-- Statistics Badge Grid Inside Hero -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 w-full max-w-4xl mx-auto mb-8">
        <div class="bg-gradient-to-b from-white/15 to-white/5 backdrop-blur-md border border-amber-300/20 rounded-2xl p-4 text-center shadow-lg hover:border-amber-400/50 transition-all">
          <span class="block text-2xl md:text-4xl font-extrabold text-amber-300 drop-shadow">12+</span>
          <span class="text-[11px] md:text-xs text-gray-300 uppercase tracking-wider font-semibold">Tôn Vị Hộ Pháp</span>
        </div>
        <div class="bg-gradient-to-b from-white/15 to-white/5 backdrop-blur-md border border-teal-300/20 rounded-2xl p-4 text-center shadow-lg hover:border-teal-400/50 transition-all">
          <span class="block text-2xl md:text-4xl font-extrabold text-teal-300 drop-shadow">Realistic</span>
          <span class="text-[11px] md:text-xs text-gray-300 uppercase tracking-wider font-semibold">8K Tôn Tượng</span>
        </div>
        <div class="bg-gradient-to-b from-white/15 to-white/5 backdrop-blur-md border border-amber-300/20 rounded-2xl p-4 text-center shadow-lg hover:border-amber-400/50 transition-all">
          <span class="block text-2xl md:text-4xl font-extrabold text-amber-300 drop-shadow">Ngoại Hộ</span>
          <span class="text-[11px] md:text-xs text-gray-300 uppercase tracking-wider font-semibold">Trấn Áp Ma Quân</span>
        </div>
        <div class="bg-gradient-to-b from-white/15 to-white/5 backdrop-blur-md border border-teal-300/20 rounded-2xl p-4 text-center shadow-lg hover:border-teal-400/50 transition-all">
          <span class="block text-2xl md:text-4xl font-extrabold text-teal-300 drop-shadow">Nội Hộ</span>
          <span class="text-[11px] md:text-xs text-gray-300 uppercase tracking-wider font-semibold">Phá Tan Phiền Não</span>
        </div>
      </div>

      <!-- Action Buttons & Background Scene Controller -->
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
        <!-- Scroll CTA Button -->
        <a href="#dharma-list" 
           class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4 bg-gradient-to-r from-amber-600 via-amber-500 to-amber-600 hover:from-amber-500 hover:to-amber-400 text-white font-bold uppercase tracking-wider text-xs md:text-sm rounded-full transition-all duration-300 shadow-[0_10px_25px_rgba(201,146,42,0.5)] hover:scale-105 border border-amber-300/50">
          <span>Chiêm Bái Chư Vị Hộ Pháp</span>
          <svg class="w-4 h-4 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
          </svg>
        </a>

        <!-- Interactive Scene Switcher Pill Bar -->
        <div class="flex flex-wrap items-center justify-center gap-1.5 p-1.5 bg-black/60 backdrop-blur-md border border-white/20 rounded-full text-xs">
          <button id="btn-scene-1" 
                  onclick="switchHeroScene(1)" 
                  class="px-4 py-2 rounded-full font-semibold transition-all duration-300 bg-amber-500 text-white shadow-md">
            🏛️ Cảnh 1: Hoàng Cung Vân Hải (Uy Nghi)
          </button>
          <button id="btn-scene-2" 
                  onclick="switchHeroScene(2)" 
                  class="px-4 py-2 rounded-full font-semibold transition-all duration-300 text-gray-300 hover:text-white hover:bg-white/10">
            🌌 Cảnh 2: Điện Cột Rồng
          </button>
          <button id="btn-scene-3" 
                  onclick="switchHeroScene(3)" 
                  class="px-4 py-2 rounded-full font-semibold transition-all duration-300 text-gray-300 hover:text-white hover:bg-white/10">
            🌉 Cảnh 3: Đại Lộ Thiên Giới
          </button>
        </div>
      </div>

    </div>

  </div>
</section>



<!-- Unified Dharma Protectors Directory & Live Search Section -->
<div id="dharma-list" class="bg-[#faf8f5] py-12 md:py-20 text-[#2d2a26]">
  <div class="container mx-auto px-4 max-w-7xl">

    <!-- Section Header & Live Search Bar -->
    <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-12 bg-white border border-[#2d2a26]/15 rounded-2xl p-6 shadow-sm">
      <div>
        <h2 class="text-2xl md:text-3xl font-bold uppercase text-[#2d2a26]">
          Danh Sách Chư Vị ĐẠI HỘ PHÁP
        </h2>
        <p class="text-xs md:text-sm text-gray-600 mt-1">
          Tôn tượng, pháp khí và bản nguyện hộ trì Phật Pháp
        </p>
      </div>

      <!-- Live Search Input -->
      <div class="relative w-full md:w-80">
        <input type="text" 
               id="search-input" 
               placeholder="Tìm kiếm vị Hộ Pháp (Vi Đà, Tiêu Diện, Quan Công...)" 
               class="w-full pl-10 pr-4 py-3 bg-[#faf8f5] border border-gray-300 rounded-xl text-sm focus:outline-none focus:border-[#1a747a] focus:ring-1 focus:ring-[#1a747a] transition-all shadow-inner" />
        <svg class="w-4 h-4 absolute left-3.5 top-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
      </div>
    </div>

    <!-- Dharma Protectors Grid -->
    <div id="protectors-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
      
      <?php foreach ($dharma_protectors as $item): ?>
        <article class="protector-card bg-white border border-[#2d2a26]/10 rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col justify-between group"
                 data-title="<?php echo esc_attr(mb_strtolower($item['title'] . ' ' . $item['sanskrit'] . ' ' . $item['role'])); ?>">
          
          <div>
            <!-- Card Image Header -->
            <div class="relative aspect-[4/3] overflow-hidden bg-gray-900">
              <img src="<?php echo esc_url($item['image']); ?>" 
                   alt="<?php echo esc_attr($item['title']); ?>" 
                   class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-95 group-hover:opacity-100" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent"></div>

              <!-- Title Overlay on Image -->
              <div class="absolute bottom-4 left-4 right-4">
                <p class="text-xs text-amber-300 font-semibold uppercase tracking-wider mb-1">
                  <?php echo esc_html($item['role']); ?>
                </p>
                <h3 class="text-xl md:text-2xl font-bold text-white leading-snug">
                  <?php echo esc_html($item['title']); ?>
                </h3>
                <p class="text-xs text-gray-300 italic mt-0.5">
                  <?php echo esc_html($item['sanskrit']); ?> • <?php echo esc_html($item['chinese']); ?>
                </p>
              </div>
            </div>

            <!-- Card Body -->
            <div class="p-6 space-y-4">
              <p class="text-sm text-gray-700 leading-relaxed line-clamp-3">
                <?php echo esc_html($item['short_desc']); ?>
              </p>

              <!-- Key Weapon / Iconography -->
              <div class="pt-3 border-t border-dashed border-gray-200">
                <div class="flex items-start gap-2 text-xs text-gray-600">
                  <span class="font-bold text-gray-800 shrink-0">Pháp khí:</span>
                  <span><?php echo esc_html($item['weapons']); ?></span>
                </div>
              </div>
            </div>
          </div>

          <!-- Card Footer CTA -->
          <div class="p-6 pt-0">
            <button onclick="openProtectorModal('<?php echo esc_js($item['id']); ?>')"
                    class="w-full py-3 px-4 bg-[#faf8f5] hover:bg-[#1a747a] text-[#1a747a] hover:text-white border border-[#1a747a]/30 rounded-xl text-xs font-semibold uppercase tracking-wider transition-all duration-300 flex items-center justify-center gap-2 group-hover:border-[#1a747a] shadow-sm">
              <span>Xem Chi Tiết & Tôn Tượng</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg>
            </button>
          </div>

        </article>
      <?php endforeach; ?>

    </div>

    <!-- Empty Search Result Notice -->
    <div id="no-results" class="hidden text-center py-16 bg-white rounded-2xl border border-dashed border-gray-300 mt-8">
      <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 9.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
      </svg>
      <p class="text-base font-semibold text-gray-700">Không tìm thấy vị Hộ Pháp phù hợp</p>
      <p class="text-xs text-gray-500 mt-1">Vui lòng thử tìm kiếm bằng tên khác (ví dụ: Vi Đà, Tiêu Diện, Quan Công...).</p>
    </div>

    <!-- Doctrine & Educational Section: Nội Hộ & Ngoại Hộ -->
    <section class="bg-gradient-to-br from-[#162325] to-[#1e3235] text-white rounded-3xl p-8 md:p-12 shadow-2xl relative overflow-hidden my-20">
      <!-- Background Ambient Glow -->
      <div class="absolute -top-24 -right-24 w-96 h-96 bg-[#c9922a]/10 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-[#1a747a]/20 rounded-full blur-3xl pointer-events-none"></div>

      <div class="relative z-10 max-w-4xl mx-auto">
        <div class="text-center mb-8">
          <span class="text-xs uppercase tracking-[0.25em] text-[#c9922a] font-semibold block mb-2">
            Triết Lý & Giáo Lý Phật Giáo
          </span>
          <h2 class="text-2xl md:text-4xl font-bold uppercase tracking-wide text-white">
            Ý Nghĩa Thật Sự Của Hộ Pháp: Nội Hộ & Ngoại Hộ
          </h2>
          <div class="h-[1px] w-20 bg-[#c9922a] mt-4 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-gray-200">
          
          <!-- Ngoại Hộ -->
          <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm space-y-3">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-[#c9922a]/20 flex items-center justify-center text-[#c9922a] font-bold text-lg">
                🛡️
              </div>
              <h3 class="text-lg font-bold text-white uppercase tracking-wider">1. Ngoại Hộ Pháp (Bên Ngoài)</h3>
            </div>
            <p class="text-sm leading-relaxed text-gray-300">
              Là việc chư Thiên, Thần Vương, Kim Cang Lực Sĩ phát nguyện bảo vệ chốn thiền môn thanh tịnh, che chở cho Tăng đoàn tu học, xua đuổi ma quân ngoại đạo và tiêu trừ các chướng ngại vật chất giúp hành giả an tâm tu tập.
            </p>
          </div>

          <!-- Nội Hộ -->
          <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm space-y-3">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-[#1a747a]/30 flex items-center justify-center text-[#1a747a] font-bold text-lg">
                🧘‍♂️
              </div>
              <h3 class="text-lg font-bold text-white uppercase tracking-wider">2. Nội Hộ Pháp (Bên Trong)</h3>
            </div>
            <p class="text-sm leading-relaxed text-gray-300">
              Đây là cốt tủy tối cao! Mỗi người tu chính là vị Hộ Pháp cho bản thân. Dùng thanh kiếm Trí Tuệ Bát Nhã để chặt đứt tham-sân-si, giữ gìn Giới-Định-Tuệ thanh tịnh, bảo vệ hạt giống Bồ Đề trong tâm không bị ngọn gió vô minh quấy phá.
            </p>
          </div>

        </div>

        <!-- Pull Quote -->
        <div class="mt-8 pt-8 border-t border-white/10 text-center italic text-sm md:text-base text-amber-200">
          "Giữ gìn một tâm niệm thanh tịnh, không nhiễm ô bởi phiền não thế gian — đó chính là cúng tàng vị Hộ Pháp chân thật nhất trong lòng mỗi chúng sinh."
        </div>
      </div>
    </section>

  </div>
</div>

<!-- Interactive Detail Modal Popup -->
<div id="protector-modal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-black/75 backdrop-blur-sm flex items-center justify-center p-4">
  <div class="relative w-full max-w-3xl bg-white rounded-3xl shadow-2xl overflow-hidden transform transition-all my-8" onclick="event.stopPropagation()">
    
    <!-- Modal Close Button -->
    <button onclick="closeProtectorModal()" class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-black/50 hover:bg-black text-white flex items-center justify-center transition-colors">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>

    <!-- Modal Content Layout -->
    <div id="modal-content">
      <!-- Dynamic Content Injected Here via JavaScript -->
    </div>

  </div>
</div>

<!-- Inline JavaScript for Live Search & Modal Popup -->
<script>
const protectorsData = <?php echo json_encode($dharma_protectors, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;

document.addEventListener('DOMContentLoaded', function() {
  const cards = document.querySelectorAll('.protector-card');
  const searchInput = document.getElementById('search-input');
  const noResults = document.getElementById('no-results');

  searchInput.addEventListener('input', function(e) {
    const query = e.target.value.toLowerCase().trim();
    filterProtectors(query);
  });
});

function filterProtectors(query) {
  const cards = document.querySelectorAll('.protector-card');
  const noResults = document.getElementById('no-results');
  let visibleCount = 0;

  cards.forEach(card => {
    const title = card.getAttribute('data-title');
    if (!query || title.includes(query)) {
      card.classList.remove('hidden');
      visibleCount++;
    } else {
      card.classList.add('hidden');
    }
  });

  if (visibleCount === 0) {
    noResults.classList.remove('hidden');
  } else {
    noResults.classList.add('hidden');
  }
}

function quickFilter(keyword) {
  const searchInput = document.getElementById('search-input');
  if (searchInput) {
    searchInput.value = keyword;
    filterProtectors(keyword.toLowerCase().trim());
    const dharmaList = document.getElementById('dharma-list');
    if (dharmaList) {
      dharmaList.scrollIntoView({ behavior: 'smooth' });
    }
  }
}

function switchHeroScene(sceneId) {
  const bg1 = document.getElementById('hero-bg-scene-1');
  const bg2 = document.getElementById('hero-bg-scene-2');
  const bg3 = document.getElementById('hero-bg-scene-3');
  const btn1 = document.getElementById('btn-scene-1');
  const btn2 = document.getElementById('btn-scene-2');
  const btn3 = document.getElementById('btn-scene-3');

  const bgs = [bg1, bg2, bg3];
  const btns = [btn1, btn2, btn3];

  bgs.forEach((bg, idx) => {
    if (!bg) return;
    if (idx + 1 === sceneId) {
      bg.classList.remove('opacity-0', 'pointer-events-none');
      bg.classList.add('opacity-100');
    } else {
      bg.classList.remove('opacity-100');
      bg.classList.add('opacity-0', 'pointer-events-none');
    }
  });

  btns.forEach((btn, idx) => {
    if (!btn) return;
    if (idx + 1 === sceneId) {
      btn.className = 'px-4 py-2 rounded-full font-semibold transition-all duration-300 bg-amber-500 text-white shadow-md';
    } else {
      btn.className = 'px-4 py-2 rounded-full font-semibold transition-all duration-300 text-gray-300 hover:text-white hover:bg-white/10';
    }
  });
}


function openProtectorModal(id) {
  const item = protectorsData.find(p => p.id === id);
  if (!item) return;

  const modal = document.getElementById('protector-modal');
  const modalContent = document.getElementById('modal-content');

  modalContent.innerHTML = `
    <div class="relative aspect-video w-full bg-gray-900 overflow-hidden">
      <img src="${item.image}" alt="${item.title}" class="w-full h-full object-cover opacity-95" />
      <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
      <div class="absolute bottom-6 left-6 right-6 text-white">
        <span class="inline-block text-xs uppercase font-semibold tracking-wider px-3 py-1 rounded-full bg-white/20 backdrop-blur-md mb-2">
          ${item.role}
        </span>
        <h2 class="text-2xl md:text-4xl font-bold">${item.title}</h2>
        <p class="text-sm text-amber-300 italic mt-1 font-medium">${item.sanskrit} • ${item.chinese}</p>
      </div>
    </div>

    <div class="p-6 md:p-8 space-y-6 max-h-[60vh] overflow-y-auto">
      <div>
        <h4 class="text-xs uppercase font-bold text-[#1a747a] tracking-wider mb-2">Hành Trạng & Ý Nghĩa Tâm Linh</h4>
        <p class="text-sm md:text-base text-gray-700 leading-relaxed">${item.full_desc}</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-t border-gray-100 pt-4">
        <div class="bg-[#faf8f5] p-4 rounded-xl border border-gray-200">
          <h5 class="text-xs font-bold text-gray-800 uppercase tracking-wider mb-1">Pháp Khí Tượng Trưng</h5>
          <p class="text-sm text-gray-600">${item.weapons}</p>
        </div>
        <div class="bg-[#faf8f5] p-4 rounded-xl border border-gray-200">
          <h5 class="text-xs font-bold text-gray-800 uppercase tracking-wider mb-1">Bản Nguyện Hộ Trì</h5>
          <p class="text-sm text-gray-600">${item.vows}</p>
        </div>
      </div>

      ${item.mantra ? `
        <div class="bg-[#1a747a]/5 border border-[#1a747a]/20 p-4 rounded-xl text-center">
          <h5 class="text-xs font-bold uppercase tracking-wider text-[#1a747a] mb-1">Bài Kệ / Chú Ngữ Phù Hộ</h5>
          <p class="text-sm font-semibold text-[#1a747a] italic">"${item.mantra}"</p>
        </div>
      ` : ''}
    </div>
  `;

  modal.classList.remove('hidden');
  document.body.style.overflow = 'hidden';
}

function closeProtectorModal() {
  const modal = document.getElementById('protector-modal');
  modal.classList.add('hidden');
  document.body.style.overflow = 'auto';
}

document.getElementById('protector-modal').addEventListener('click', closeProtectorModal);
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') closeProtectorModal();
});
</script>

<?php get_footer(); ?>
