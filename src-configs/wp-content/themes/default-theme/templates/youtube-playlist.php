<?php

/**
 * Template Name: Youtube Playlist
 */
get_header(); 

// Video playlist data
$videos = [
    [
        'id' => 'oDICquOoJ6c',
        'title' => 'Thi Kệ: Thân Ngoại Mộng Phi Thân Ký',
        'desc' => "Bài thi kệ kính niệm Tôn giả Tân Đầu Lô Phả La Đọa (Pindola Bharadvaja) – một vị Đại A La Hán trong Phật giáo.\n\nNội dung thể hiện những suy tư sâu sắc về lẽ vô thường, kiếp nhân sinh tạm bợ và những trăn trở của một hành giả trên con đường tìm cầu giải thoát, giác ngộ chân lý vô thượng.",
        'url' => 'https://www.youtube.com/watch?v=oDICquOoJ6c&list=PLQVTuLqUwoggn6XbpJCQa0VNKt_VSrMDJ',
        'transcript' => [
            ['time' => 0, 'text' => "Nẻo vắng chiều hoang khói lam đồng\nTừng đàn cò trắng luyện hư không\nCò bay trong khói chiều loang tím\nTổ ấm tìm về dưới cơn giông?"],
            ['time' => 15, 'text' => "Chao nghiêng từng cánh xô mưa gió\nRớt xuống đồng hoang nước ngập bờ\nTiếng lòng xé nát Cõi trời mơ\nTim đau Cánh rã Đâu bờ bình yên?"],
            ['time' => 30, 'text' => "Xót xa Lệ cháy Tam thiên\nĐoạn trường Ai hiểu Hàn ôn lòng mình?\nBâng khuâng thương bóng thương hình\nNhân sinh sự thế vị tình đảo điên"],
            ['time' => 45, 'text' => "Ái này khổ não truân chuyên\nHỷ- Tham câu hữu Thập Triền- Sử sanh\nSanh già bệnh chết đành rành\nHỏi ai thoát khỏi mong manh kiếp người?"],
            ['time' => 60, 'text' => "Vô thường cuộc sống nổi trôi\nVô thường Tan biến Luân hồi ngàn năm!\nMộng đông tánh Phật ngầm quên\nTrông cánh cò ướt chênh vênh giữa trời"],
            ['time' => 75, 'text' => "Lòng ta khắc khoải bồi hồi\nTim như lửa cháy lệ sôi máu hồng\nĐại Tâm biến mãn hư không?\nTâm Hành nguyện phát mà lòng nát tan!"],
            ['time' => 90, 'text' => "Kể từ vô thỉ thời gian\nNiết Bàn không nhập, gian nan tư nghì?\nQuyết đem ánh sáng Từ Bi\nPhủ trùm Tam Giới phá nghi trùng trùng"],
            ['time' => 105, 'text' => "Thiên thân hiện khắp không trung\nĐại Tâm quyết chí Đại Hùng hóa sanh\nĐêm về Lệ cháy Tàn canh\nThư lòng Với ánh đèn hồng Cô liêu.\nĐêm đêm gác tráng suy tư\nĐêm đêm nước mắt nối đèn thiên thu."],
            ['time' => 125, 'text' => "Thiên thu ca Khúc Mộng Du:\nDuy tâm vạn pháp thực mà hư?\nVạn pháp duy tâm? Hớ... kẻ mù!\nTa đây quăng hết vào nhà xí\nChống gậy tiêu dao giữa thái hư."],
            ['time' => 140, 'text' => "Thiên thu ngâm Truyền Gậy Mộng Du:\nAnh ơi! Có gậy chống đi chưa?\nNếu chưa có gậy ta cho gậy\nChống nát cõi Không cùng ta quậy\nĐã có gậy rồi? Khà khà\nTa cướp gậy của anh!"],
            ['time' => 155, 'text' => "Thiên thu ca Kệ Mộng Du:\nDộng gậy vào mồm kẻ thức thời\nThức thời thời thức thức thời thức\nĐã thức tri thời? Thời tri thức?\nĂn gậy thức thời kẻ vô tri!"],
            ['time' => 170, 'text' => "Thiên thu ngâm Nghèo Mộng Du:\nNgười chửi lão điên, kẻ chửi nghèo!\nTình không rách rưới hạnh trong veo\nNghèo hèn nên thân manh áo vá\nĐạo ắt tâm đầy châu báu đeo."],
            ['time' => 185, 'text' => "Thiên thu thiền Ngộ Mộng Du:\nDiệu cực hiển bày tánh bản nhiên\nDứt lìa hết thảy vọng tình duyên\nTrong Không rõ chiếu Không, Không đắc\nTrước mắt Chân Như chứng ngộ liền."]
        ]
    ],
    [
        'id' => 'Pz9GooNBB5Y',
        'title' => 'Thi Kệ: Hùng Tâm Nơi Đất Thiêng',
        'desc' => "Bài thi kệ mang âm hưởng hào hùng, thắp sáng chí nguyện tu học và tấm lòng tôn kính Tam Bảo nơi miền đất tâm linh thiêng liêng.\n\nLời thơ khuyến tấn các hành giả vững tin nơi Chánh pháp, tinh tấn vượt qua mọi khó khăn thử thách của trần gian.",
        'url' => 'https://www.youtube.com/watch?v=Pz9GooNBB5Y&list=PLQVTuLqUwoggn6XbpJCQa0VNKt_VSrMDJ',
        'transcript' => [
            ['time' => 0, 'text' => "Tháp đổ rêu phong lối địa đàng\nNghẹn ngào tiếng nấc lệ chứa chan\nĐại quân Hồi Giáo ngày xưa ấy\nThẳng tay tàn phá, hoại trùng quan."],
            ['time' => 15, 'text' => "Lặng lẽ tình trông, trong tiếc thương\nNalanda nổi tiếng Đại Học Đường\nBiết bao Long Tượng từ đây xuất\nSỏi đá nghìn năm mãi vấn vương!"],
            ['time' => 30, 'text' => "Máu đổ loang, rung cả trời chiều\nTiếng than, gầm rú, tiếng súng kêu\nTiếng xé lòng đau vang óc vãi\nTiếng hùng đại chí, tiếng hoả thiêu..."],
            ['time' => 45, 'text' => "Lệ đắng trùng dương vỡ tâm can\nMáu tuôn thành suối nhuốm thế gian\nThịt phơi như núi bầy nhầy khắp\nHãi hùng câm nín... Nói sao đan?"],
            ['time' => 60, 'text' => "Tôi trở về đây thăm chốn thiêng\nLòng đau, ruột cháy quá Tam thiên\nMáu lệ chảy trong niềm bi xót\nNấc nghẹn từng cơn qua bao phen!"],
            ['time' => 75, 'text' => "Đại nguyện hùng tâm quyết dựng xây\nCơ đồ Phật Pháp khởi từ đây\nDẫu cho thân tan, lửa thiêu đốt\nVĩnh kiếp thân này cũng không khuây!"],
            ['time' => 90, 'text' => "Nguyện cầu Tam Bảo chiếu hồng ân\nLong thiên gia hộ khắp thế nhân\nPhật Tâm sống dậy nơi đất Phật\nTứ sanh Cửu hữu nhập Pháp Thân!"]
        ]
    ],
    [
        'id' => 'vOG6B18XL_c',
        'title' => 'Thi Kệ: Hùng Chí Đại Trượng Phu',
        'desc' => "Khắc họa chí khí kiên cường của bậc trượng phu quyết chí xuất trần, dám buông xả mọi danh lợi thế gian để hướng đến quả vị giải thoát thanh tịnh.\n\nLời thi kệ khơi gợi nguồn năng lượng dũng mãnh, vượt lên trên mọi cám dỗ và ràng buộc thường tình.",
        'url' => 'https://www.youtube.com/watch?v=vOG6B18XL_c&list=PLQVTuLqUwoggn6XbpJCQa0VNKt_VSrMDJ',
        'transcript' => [
            ['time' => 0, 'text' => "Chấn thế hùng tâm chí nam nhi\nHoành xuất tam giới, phá tam kỳ\nThệ không thối chuyển Bồ Đề nguyện\nÂn Phật báo đền, quyết có khi."],
            ['time' => 15, 'text' => "Ma thiên diệt thế nhấn phàm gian\nNgũ trược sinh linh khổ ai màng?\nMạt thế, thế thời sao mạt thế?\nVô văn mặt kệ, nó chẳng màng!"],
            ['time' => 30, 'text' => "Khí tượng tung trời giáng oai long\nHá miệng cuồng phong nuốt vào lòng\nBốn bể vẫy vùng tan khí hải\nBước chân dặm nát cõi tây đông."],
            ['time' => 45, 'text' => "Sấm chớp tung trời quyết lật ngang\nĐảo ngược càn khôn cứu thế gian\nBi tâm hòa thể song linh chiếu\nHuyết cạn, thân tan, sá – chẳng màn!"],
            ['time' => 60, 'text' => "Ma ý rừng thiêng cuốn mọi người\nTa thề sống chết với các ngươi\nKiếm trí phá tan rừng ma ý\nĐại nguyện hóa thân tế độ đời!"],
            ['time' => 75, 'text' => "Nhân sinh hề! Tây Phương tiếp độ về!\nLuân hồi hề! Biến tri niệm quay về!\nKhuấy đảo trùng dương cuộc hóa sanh\nHóa sanh, sanh hóa bến phong trần."],
            ['time' => 90, 'text' => "Phong trần, đại mộng phi lai thể\nLai thể vô sanh với chân thân\nChân thân vô khứ diệc vô lai\nVô lai! Người hỏi: “Ta là ai?”"],
            ['time' => 105, 'text' => "Là ai? Ai biết? Nào ai biết?\nAi biết? Ta đi trong đêm dài!\nĐêm dài vô thỉ đến vô chung\nVô chung tâm thể hóa không trung\nKhông trung lệ cháy ôi, tình cháy!\nTình cháy thiên thu kiếp tương phùng!"]
        ]
    ],
    [
        'id' => 'khSGoSIdWDc',
        'title' => 'Thi Kệ: Đệ Tử Như Lai',
        'desc' => "Lời nhắc nhở chân tình và sâu sắc về sứ mệnh cùng bổn phận thiêng liêng của một người đệ tử Phật.\n\nKhuyên bảo người học đạo luôn giữ vững chánh niệm, khắc ghi những lời dạy vàng ngọc của Đức Thế Tôn để hành trì trong đời sống hằng ngày.",
        'url' => 'https://www.youtube.com/watch?v=khSGoSIdWDc&list=PLQVTuLqUwoggn6XbpJCQa0VNKt_VSrMDJ',
        'transcript' => [
            ['time' => 0, 'text' => "Ba cõi không an như nhà lửa\nLục thú xoay vần khổ tiếp nhau\nNgũ uẩn dường như mộng\nSáu căn chẳng bền chi\nMột lòng quyết phá lưới ngu si\nDắt dìu sanh chúng qua bờ mộng\nThệ tinh tấn Phát Bồ Đề\nĐộ thoát hết thảy chúng si mê\nViên thành đại quả ngôi Chánh Giác."],
            ['time' => 20, 'text' => "Thân là huyễn\nCảnh là huyễn\nNghiệp dữ gây cũng huyễn mà thôi\nThân- tâm- tánh ấy ngộ rồi?\nTa cùng với Phật: Ôi, thôi khác gì?\nThản nhiên trời đất mà đi\nTiêu dao tự tại không gì vướng chân."],
            ['time' => 40, 'text' => "Nguyện xin đại chúng một lòng\nTruyền đăng tục diệm soi đường chúng sanh!"],
            ['time' => 50, 'text' => "Ta đi... Lệ điểm... Tàn canh...\nLệ rơi... Hòa máu... Lệ thành ... Bi tâm...\nThương thay kiếp sống hồng trần\nNgược xuôi trong biển luân hồi ngàn năm\nBát phong thổi sóng lậu dâng\nBao giờ thoát khỏi Căn, Trần, Mộng đây?"],
            ['time' => 65, 'text' => "Suy tư... Ta đếm... Từng ngày...\nLệ tuôn... Tóc trắng... Hao gầy... Xác thân...\nSuy tư... Cõi nhớ...Phật ân...!\nTương tư... lệ cháy... Ta- bà... bóng đêm!"],
            ['time' => 80, 'text' => "Hỡi chúng sanh\nMau tỉnh giác\nĐừng để vọng tình đi lầm lạc\nNhư sấm sét\nQuyết định liền\nĐi lên? Hay khổ não triền miên?"],
            ['time' => 95, 'text' => "Thân vô thường\nCảnh vô thường\nKhông cho người chần chừ do dự:\nQuỷ vô thường! Sứ Diêm Vương!\nKia, Pháp trường! Không cho ai thoát khỏi\nNày, Địa ngục! Kìa, Ngạ quỷ! Đây, Súc sanh!\nĂn năn thôi, đã muộn!\nNhân với Quả công bằng\nCho nên phải:\nPhất cờ tâm\nVượt biển ái\nPhá luân hồi\nChấn ma quân\nNgay giờ quyết dứt liền ngay dứt\nChần chừ do dự lúc nào xong?"],
            ['time' => 120, 'text' => "Mau mau!\nNếu là kẻ Trượng phu\nHãy mở mắt thật to, nhìn thẳng vào lòng:\nPháp giới dậy tâm\nCung ma khởi diệt\nTrời đất kiên quyết\nĐã đến lúc:\nThệ chứng Bồ Đề\nVượt thoát bến mê\nPhá tan lưới ái\nĐạp bằng khổ hải\nDứt hẳn vô minh\nBước lên Diệu Giác\nKhông còn lầm lạc\nBạt tế chúng sanh\nChuyển vận diệu âm\nPhá nghi tứ chúng\nChánh pháp trùng tụng\nKiến lập đạo tràng\nHàng phục chúng ma\nThiệu long Thánh chủng\nTa thật chính là\nĐệ tử Như Lai!"]
        ]
    ]
];
?>

<div class="youtube-videos-wrapper bg-cream min-h-screen pb-16">
    
    <!-- Unified Hero Header & Video Player Block -->
    <section id="hero-playlist-banner" class="relative overflow-hidden bg-slate-950 text-white min-h-[550px] py-12 md:py-16 flex items-center transition-all duration-700">
        <!-- Background Layer with YouTube Active Video Thumbnail & Gradient Overlays -->
        <div id="hero-bg-layer" 
             class="absolute inset-0 bg-cover bg-center transition-all duration-700 ease-in-out transform scale-105 filter blur-xs md:blur-none opacity-75"
             style="background-image: url('https://img.youtube.com/vi/<?php echo esc_attr($videos[0]['id']); ?>/maxresdefault.jpg');">
        </div>
        
        <!-- Dark Overlay Gradients for optimal contrast -->
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950/65 via-slate-950/45 to-slate-950/25"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-slate-950/35"></div>

        <!-- Ambient Glow Decorative Elements -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-[#c9922a]/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-[#1a747a]/25 rounded-full blur-3xl pointer-events-none"></div>

        <!-- Hero Content & Main Player Container -->
        <div class="container mx-auto px-4 relative z-10">
            
            <!-- Section Header: Badge, Title & Author -->
            <div class="space-y-3 mb-6">
                <!-- Sub-badge / Category -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#c9922a]/20 border border-[#c9922a]/40 text-[#f3d38c] text-xs font-medium uppercase tracking-widest  backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-[#c9922a] animate-pulse"></span>
                    <span>Tuyển Tập Pháp Âm • Thi Kệ</span>
                </div>

                <!-- Dynamic Video Title -->
                <h1 id="hero-video-title" class="text-2xl sm:text-3xl md:text-4xl text-white font-light leading-snug tracking-wide transition-all duration-300 drop-shadow-md">
                    <?php echo esc_html($videos[0]['title']); ?>
                </h1>

                <!-- Author Info -->
                <div class="flex items-center gap-4 text-xs sm:text-sm text-neutral-200 uppercase tracking-widest  drop-shadow-sm">
                    <span class="flex items-center gap-2">
                        <i class="fa-solid fa-user-nib text-[#c9922a]"></i>
                        Diễn đọc: Tỷ kheo Thích Long Viễn
                    </span>
                </div>
            </div>

            <!-- Equal Height 2-Column Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">
                
                <!-- Left Column: Embedded YouTube Video Player & Description -->
                <div class="lg:col-span-7 flex flex-col">
                    <div id="main-player-deck" class="relative group flex-1 flex flex-col">
                        <!-- Glow behind player -->
                        <div class="absolute -inset-1 bg-gradient-to-r from-[#c9922a] to-[#1a747a] rounded-2xl blur-md opacity-30 group-hover:opacity-60 transition duration-500"></div>

                        <div class="relative flex-1 flex flex-col bg-slate-900/65 backdrop-blur-md rounded-2xl border border-white/20 overflow-hidden shadow-2xl">
                            <!-- 16:9 Main YouTube Player Iframe -->
                            <div class="relative w-full bg-black aspect-video shrink-0">
                                <iframe 
                                    id="active-video-frame"
                                    class="absolute inset-0 w-full h-full"
                                    src="https://www.youtube.com/embed/<?php echo esc_attr($videos[0]['id']); ?>?enablejsapi=1&rel=0" 
                                    title="<?php echo esc_attr($videos[0]['title']); ?>"
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    allowfullscreen
                                ></iframe>
                            </div>

                            <!-- Description Wrapper -->
                            <div id="desc-wrapper" class="p-4 md:p-5 bg-slate-900/60 backdrop-blur-md border-t border-white/10 flex-1">
                                <p id="active-video-desc" class="text-xs md:text-sm text-neutral-200 leading-relaxed whitespace-pre-line font-light">
                                    <?php echo esc_html($videos[0]['desc']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Equal Height Transcript Container -->
                <div class="lg:col-span-5 flex flex-col">
                    
                    <div class="bg-slate-900/65 border border-white/20 rounded-2xl p-5 md:p-6 backdrop-blur-md shadow-2xl flex-1 flex flex-col space-y-4">
                        
                        <!-- Transcript Section Header -->
                        <div class="flex items-center justify-between border-b border-white/10 pb-3 shrink-0">
                            <span class="text-xs font-semibold text-[#c9922a] uppercase tracking-wider flex items-center gap-2 ">
                                <i class="fa-solid fa-scroll"></i> Thi Kệ Lời Dạy • Transcript
                            </span>
                        </div>

                        <!-- Static Transcript Box (Matching Video Height) -->
                        <div id="script-wrapper" class="flex-1 min-h-0 border border-white/10 rounded-xl bg-[#faf8f5] text-slate-800 relative shadow-inner overflow-hidden" style="background-image: url('<?php echo esc_url(IMG_URL . 'parchment-bg.png'); ?>'); background-size: cover; background-position: center;">
                            <div id="script-scroll-container" class="h-full overflow-y-auto px-5 py-4 scrollbar-thin relative flex flex-col  max-h-[530px]">
                                <div id="script-paragraphs" class="w-full space-y-3 text-center my-auto">
                                    <!-- Populated via Javascript -->
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Playlist Grid Section (4 columns in a row) -->
    <section id="playlist-grid-section" class="py-12 md:py-16">
        <div class="container mx-auto px-4">
            
            <!-- Section Header -->
            <div class="flex items-center justify-between mb-8 pb-4 border-b border-neutral-200/60">
                <div>
                    <span class="text-[#c9922a] text-xs font-semibold uppercase tracking-widest ">Danh Sách Video</span>
                    <h3 class="text-2xl md:text-3xl text-slate-800 font-light mt-1">Tuyển Tập Pháp Âm</h3>
                </div>
                <span class="bg-[#1a747a]/10 text-[#1a747a] text-xs font-bold px-3.5 py-1.5 rounded-full  shadow-xs">
                    <?php echo count($videos); ?> Video
                </span>
            </div>

            <!-- 4 Columns Video Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php foreach ($videos as $index => $video) : 
                    $isActive = ($index === 0);
                    $activeClass = $isActive ? 'active border-[#c9922a] ring-2 ring-[#c9922a]/30 bg-[#faf8f5]' : 'border-neutral-200/80 hover:border-neutral-300 bg-white hover:shadow-md';
                    $indicatorClass = $isActive ? '' : 'hidden';
                    
                    $initialBlockquote = !empty($video['transcript']) ? $video['transcript'][0]['text'] : $video['desc'];
                ?>
                    <button 
                        type="button" 
                        class="video-card group flex flex-col h-full rounded-2xl border overflow-hidden transition-all duration-300 text-left cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#1a747a]/50 <?php echo $activeClass; ?>"
                        data-video-id="<?php echo esc_attr($video['id']); ?>"
                        data-title="<?php echo esc_attr($video['title']); ?>"
                        data-desc="<?php echo esc_attr($video['desc']); ?>"
                        data-blockquote="<?php echo esc_attr($initialBlockquote); ?>"
                        data-yt-url="<?php echo esc_url($video['url']); ?>"
                    >
                        <!-- Thumbnail Container (16:9) -->
                        <div class="relative w-full aspect-video bg-neutral-900 overflow-hidden shrink-0">
                            <img 
                                src="https://img.youtube.com/vi/<?php echo esc_attr($video['id']); ?>/hqdefault.jpg" 
                                alt="<?php echo esc_attr($video['title']); ?>" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                            />
                            <!-- Play Overlay Icon -->
                            <div class="absolute inset-0 bg-black/30 group-hover:bg-black/15 flex items-center justify-center transition-all duration-300">
                                <span class="w-11 h-11 rounded-full bg-[#c9922a]/90 group-hover:bg-[#c9922a] text-white flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-transform duration-300">
                                    <i class="fa-solid fa-play text-xs ml-0.5"></i>
                                </span>
                            </div>
                            <!-- Active Badge -->
                            <div class="active-dot absolute top-3 right-3 px-2.5 py-1 rounded-full bg-[#c9922a] text-white text-[10px] font-bold  tracking-wider shadow-md <?php echo $indicatorClass; ?>">
                                Đang phát
                            </div>
                        </div>

                        <!-- Video Content / Info -->
                        <div class="p-5 flex flex-col justify-between flex-1 space-y-3">
                            <div>
                                <h4 class="text-base font-semibold text-slate-800 line-clamp-2 leading-snug group-hover:text-[#1a747a] transition-colors duration-200">
                                    <?php echo esc_html($video['title']); ?>
                                </h4>
                                <p class="text-xs text-neutral-500 line-clamp-2 mt-2 font-light leading-relaxed">
                                    <?php echo esc_html($video['desc']); ?>
                                </p>
                            </div>
                            
                            <div class="pt-3 border-t border-neutral-100 flex items-center justify-between text-[11px] text-neutral-400 ">
                                <span>Thích Long Viễn</span>
                                <span class="text-[#1a747a] font-medium group-hover:translate-x-0.5 transition-transform duration-200 flex items-center gap-1">
                                    Phát video <i class="fa-solid fa-chevron-right text-[9px]"></i>
                                </span>
                            </div>
                        </div>
                    </button>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

</div>

<!-- Style Block for Transitions -->
<style>
#desc-wrapper {
    max-height: 500px;
    opacity: 1;
    transition: max-height 0.8s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s ease-in-out;
}
</style>

<!-- Interaction Script -->
<script>
// Pass PHP transcript data to JavaScript
const videoTranscripts = <?php echo json_encode(array_column($videos, 'transcript', 'id'), JSON_UNESCAPED_UNICODE); ?>;

document.addEventListener('DOMContentLoaded', function () {
    const videoCards = document.querySelectorAll('.video-card');
    const playerFrame = document.getElementById('active-video-frame');
    const playerDesc = document.getElementById('active-video-desc');
    
    const heroBgLayer = document.getElementById('hero-bg-layer');
    const heroTitle = document.getElementById('hero-video-title');
    const heroBlockquote = document.getElementById('hero-video-blockquote');

    const scriptContainer = document.getElementById('script-paragraphs');

    let player;
    let progressInterval;
    let activeIndex = -1;

    // Helper to update hero banner based on selected video
    function updateHeroBanner(videoId, title, desc, blockquoteText) {
        if (heroTitle) {
            heroTitle.classList.add('opacity-0');
            setTimeout(() => {
                heroTitle.textContent = title;
                heroTitle.classList.remove('opacity-0');
            }, 150);
        }
        if (heroBlockquote) {
            heroBlockquote.classList.add('opacity-0');
            setTimeout(() => {
                heroBlockquote.innerHTML = (blockquoteText || desc).replace(/\n/g, '<br>');
                heroBlockquote.classList.remove('opacity-0');
            }, 150);
        }
        
        if (heroBgLayer) {
            const maxresUrl = `https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`;
            const hqUrl = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;
            
            const img = new Image();
            img.onload = function () {
                if (img.naturalWidth > 120) {
                    heroBgLayer.style.backgroundImage = `url('${maxresUrl}')`;
                } else {
                    heroBgLayer.style.backgroundImage = `url('${hqUrl}')`;
                }
            };
            img.onerror = function () {
                heroBgLayer.style.backgroundImage = `url('${hqUrl}')`;
            };
            img.src = maxresUrl;
        }
    }

    // Render transcript for active video (static display without autoscroll)
    function renderTranscript(transcript) {
        if (!scriptContainer) return;
        scriptContainer.innerHTML = '';
        
        if (!transcript || transcript.length === 0) {
            scriptContainer.innerHTML = '<p class="text-neutral-400 italic text-xs font-light">Không có lời dịch/kịch bản cho video này.</p>';
            return;
        }
        
        transcript.forEach((para, index) => {
            const paraEl = document.createElement('div');
            paraEl.className = 'script-para text-slate-700 py-1.5 text-sm md:text-base leading-relaxed opacity-85 hover:opacity-100 transition-all cursor-pointer';
            paraEl.setAttribute('data-time', para.time);
            paraEl.setAttribute('data-index', index);
            
            paraEl.innerHTML = para.text.replace(/\n/g, '<br>');
            
            paraEl.addEventListener('click', () => {
                if (player && typeof player.seekTo === 'function') {
                    player.seekTo(para.time, true);
                    highlightParagraph(index);
                }
            });
            
            scriptContainer.appendChild(paraEl);
        });
    }

    function highlightParagraph(index) {
        if (index === activeIndex) return;
        
        const paras = scriptContainer.querySelectorAll('.script-para');
        paras.forEach((para, idx) => {
            if (idx === index) {
                para.className = 'script-para text-[#9e6f1a] font-bold text-sm md:text-base opacity-100 bg-[#c9922a]/15 rounded-lg px-3 py-1.5 transition-all shadow-xs';
            } else {
                para.className = 'script-para text-slate-700 py-1.5 text-sm md:text-base leading-relaxed opacity-85 hover:opacity-100 transition-all cursor-pointer';
            }
        });
        
        activeIndex = index;
    }

    function startProgressTracking() {
        stopProgressTracking();
        progressInterval = setInterval(() => {
            if (player && typeof player.getCurrentTime === 'function') {
                const currentTime = player.getCurrentTime();
                syncTranscript(currentTime);
            }
        }, 250);
    }

    function stopProgressTracking() {
        if (progressInterval) {
            clearInterval(progressInterval);
            progressInterval = null;
        }
    }

    function syncTranscript(time) {
        const paras = scriptContainer.querySelectorAll('.script-para');
        if (paras.length === 0) return;
        
        let targetIndex = -1;
        for (let i = 0; i < paras.length; i++) {
            const paraTime = parseFloat(paras[i].getAttribute('data-time'));
            if (time >= paraTime) {
                targetIndex = i;
            } else {
                break;
            }
        }
        
        if (targetIndex !== -1) {
            highlightParagraph(targetIndex);
        }
    }

    // Initialize YouTube Player
    window.onYouTubeIframeAPIReady = function () {
        initYoutubePlayer();
    };

    function initYoutubePlayer() {
        player = new YT.Player('active-video-frame', {
            events: {
                'onStateChange': onPlayerStateChange,
                'onReady': onPlayerReady
            }
        });
    }

    function onPlayerReady(event) {
        const activeCard = document.querySelector('.video-card.active');
        if (activeCard) {
            const videoId = activeCard.getAttribute('data-video-id');
            renderTranscript(videoTranscripts[videoId] || []);
        }
    }

    function onPlayerStateChange(event) {
        if (event.data === YT.PlayerState.PLAYING) {
            startProgressTracking();
        } else if (event.data === YT.PlayerState.ENDED) {
            stopProgressTracking();
        } else {
            stopProgressTracking();
        }
    }

    // Inject YouTube API
    if (!window.YT) {
        const tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        const firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    } else {
        initYoutubePlayer();
    }

    // Handle card clicks in 4-column playlist grid
    videoCards.forEach(card => {
        card.addEventListener('click', function () {
            if (this.classList.contains('active')) return;

            stopProgressTracking();

            const videoId = this.getAttribute('data-video-id');
            const title = this.getAttribute('data-title');
            const desc = this.getAttribute('data-desc');
            const blockquoteText = this.getAttribute('data-blockquote') || desc;

            // Update hero banner dynamically
            updateHeroBanner(videoId, title, desc, blockquoteText);

            // Reset active states on all cards
            videoCards.forEach(c => {
                c.classList.remove('active', 'border-[#c9922a]', 'ring-2', 'ring-[#c9922a]/30', 'bg-[#faf8f5]');
                c.classList.add('border-neutral-200/80', 'bg-white');
                const dot = c.querySelector('.active-dot');
                if (dot) dot.classList.add('hidden');
            });

            // Add active state to clicked card
            this.classList.add('active', 'border-[#c9922a]', 'ring-2', 'ring-[#c9922a]/30', 'bg-[#faf8f5]');
            this.classList.remove('border-neutral-200/80', 'bg-white');
            const activeDot = this.querySelector('.active-dot');
            if (activeDot) activeDot.classList.remove('hidden');

            // Update details block
            if (playerDesc) playerDesc.textContent = desc;

            // Load new transcript
            renderTranscript(videoTranscripts[videoId] || []);
            activeIndex = -1;

            // Load video in YouTube player
            if (player && typeof player.loadVideoById === 'function') {
                player.loadVideoById(videoId);
            } else {
                if (playerFrame) {
                    playerFrame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&enablejsapi=1&rel=0`;
                }
            }

            // Scroll smoothly to hero player
            const heroBanner = document.getElementById('hero-playlist-banner');
            if (heroBanner) {
                heroBanner.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Render first transcript immediately
    const initialActiveCard = document.querySelector('.video-card.active');
    if (initialActiveCard) {
        const videoId = initialActiveCard.getAttribute('data-video-id');
        renderTranscript(videoTranscripts[videoId] || []);
    }
});
</script>

<?php 
get_footer(); ?>