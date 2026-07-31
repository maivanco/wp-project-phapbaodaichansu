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
    
    <!-- Hero Header Block (Marquee Style) -->
    <section class="py-16 md:py-24 border-b border-warmGray-200/50 bg-[#faf8f5]/60 relative">
        
        <div class="md-container mx-auto px-4 text-center relative z-10 grid grid-cols-2">
            <figure class="p">
                <img src="<?php echo IMG_URL?>thay-Thich-Long-Vien.jpg" alt="Tỷ kheo Thích Long Viễn" class="rounded-xl" />
                <figcaption class="text-xs p-4">
                    <p>Kính niệm Tôn Giả Piṇḍola Bhāradvāja Đại A La Hán</p>
                </figcaption>
            </figure>
            
            <div class="content-wrapper">
                <span class="text-xs font-semibold uppercase tracking-[0.25em] mb-3 block">
                    Tuyển Tập Pháp Âm
                </span>
                <p class="font-handwriting text-4xl sm:text-5xl text-[#c9922a] mt-2 mb-6">
                    Thích Long Viễn
                </p>
                <div class="max-w-2xl mx-auto h-px bg-gradient-to-r from-transparent via-[#c9922a]/40 to-transparent"></div>
                <p class="max-w-2xl mx-auto text-sm md:text-base text-neutral-600 leading-relaxed mt-6 font-light">
                    Tổng hợp các bài Thi Kệ diễn đọc bởi Tỷ kheo Thích Long Viễn, mang ánh sáng chánh pháp và triết lý giác ngộ sâu sắc đến với độc giả và hành giả trên con đường tu học.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Deck / Video Section -->
    <section class="py-12 md:py-16">
        <div class="container mx-auto px-4">
            <div id="main-player-deck" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- Main Featured Player Column -->
                <div class="lg:col-span-8">
                    <div class="bg-white rounded-2xl border border-neutral-100 overflow-hidden shadow-sm transition-all duration-300">
                        
                        <!-- Full-width Video Player -->
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

                        <!-- Video Details Box -->
                        <div class="p-6 md:p-8">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="bg-[#1a747a]/10 text-[#1a747a] text-[10px] font-bold px-2.5 py-0.5 rounded-full uppercase tracking-wider font-mono">
                                    Đang phát
                                </span>
                                <span class="text-xs text-neutral-500 uppercase tracking-widest font-mono">
                                    Thi Kệ
                                </span>
                            </div>
                            
                            <h2 id="active-video-title" class="text-2xl md:text-3xl text-slate-800 font-light leading-snug mb-3">
                                <?php echo esc_html($videos[0]['title']); ?>
                            </h2>

                            <div class="flex items-center gap-4 text-xs text-neutral-400 uppercase tracking-widest font-mono mb-6">
                                <span>Tác giả: Thích Long Viễn</span>
                            </div>

                            <div class="w-full h-px bg-neutral-100"></div>

                            <!-- Description Wrapper (shown initially, hidden slowly on play) -->
                            <div id="desc-wrapper" class="overflow-hidden mt-6">
                                <p id="active-video-desc" class="text-sm md:text-base text-neutral-600 leading-relaxed whitespace-pre-line font-light">
                                    <?php echo esc_html($videos[0]['desc']); ?>
                                </p>
                            </div>

                            

                        </div>
                    </div>
                </div>

                <!-- Playlist Queue Column -->
                <div class="lg:col-span-4 relative">

                    <!-- Scrolling Transcript Banner (hidden initially, shown slowly on play) -->
                    <div id="script-wrapper" class="absolute overflow-hidden border-neutral-100 bg-[#faf8f5] rounded-xl" style="background-image: url('<?php echo esc_url(IMG_URL . 'parchment-bg.png'); ?>'); background-size: cover; background-position: center;">
                        <!-- Banner Header -->
                        <div class="p-3 border-b border-neutral-200/50 bg-[#faf8f5]/85 backdrop-blur-xs flex items-center justify-between z-10 relative">
                            <span class="text-xs font-semibold text-[#c9922a] uppercase tracking-wider flex items-center gap-1.5 font-mono">
                                <i class="fa-solid fa-scroll"></i> Thi Kệ Lời Dạy
                            </span>
                            <button id="toggle-autoscroll" class="text-[10px] bg-white border border-neutral-200 hover:border-neutral-300 text-neutral-600 px-2 py-0.5 rounded flex items-center gap-1 cursor-pointer transition-all">
                                <span id="autoscroll-indicator" class="inline-block w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                <span id="autoscroll-text">Tự cuộn</span>
                            </button>
                        </div>

                        <!-- Scrolling container -->
                        <div id="script-scroll-container" class="overflow-y-auto px-4 py-8 scrollbar-thin relative scroll-smooth flex flex-col items-center h-[300px]">
                            <div class="h-20 shrink-0"></div>
                            <div id="script-paragraphs" class="w-full space-y-6 text-center">
                                <!-- Populated via Javascript -->
                            </div>
                            <div class="h-24 shrink-0"></div>
                        </div>
                    </div>

                    <div class="bg-white/80 backdrop-blur rounded-2xl border border-neutral-100 p-6 shadow-sm">
                        <h3 class="font-title text-sm font-semibold tracking-wider text-neutral-500 uppercase mb-5 flex items-center justify-between">
                            <span>Danh sách phát</span>
                            <span class="bg-[#1a747a]/10 text-[#1a747a] text-xs font-bold px-2.5 py-0.5 rounded-full font-mono">
                                <?php echo count($videos); ?> Video
                            </span>
                        </h3>

                        <!-- Video List Container -->
                        <div class="space-y-4 max-h-[550px] overflow-y-auto pr-1 scrollbar-thin">
                            <?php foreach ($videos as $index => $video) : 
                                $isActive = ($index === 0);
                                $activeClass = $isActive ? 'active border-[#c9922a] bg-[#faf8f5]' : 'border-neutral-100 hover:border-neutral-200 bg-white hover:bg-neutral-50';
                                $indicatorClass = $isActive ? '' : 'hidden';
                            ?>
                                <button 
                                    type="button" 
                                    class="video-card w-full text-left flex items-start gap-4 p-3 border rounded-xl transition-all duration-300 group cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#1a747a]/50 <?php echo $activeClass; ?>"
                                    data-video-id="<?php echo esc_attr($video['id']); ?>"
                                    data-title="<?php echo esc_attr($video['title']); ?>"
                                    data-desc="<?php echo esc_attr($video['desc']); ?>"
                                    data-yt-url="<?php echo esc_url($video['url']); ?>"
                                >
                                    <!-- Video Thumbnail -->
                                    <div class="relative w-28 md:w-32 bg-neutral-100 rounded-lg overflow-hidden shrink-0 shadow-sm" style="aspect-ratio: 16/9;">
                                        <img 
                                            src="https://img.youtube.com/vi/<?php echo esc_attr($video['id']); ?>/mqdefault.jpg" 
                                            alt="<?php echo esc_attr($video['title']); ?>" 
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                                        />
                                        <!-- Play overlay icon -->
                                        <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                            <span class="w-8 h-8 rounded-full bg-white/95 flex items-center justify-center text-[#1a747a] shadow-sm transform scale-90 group-hover:scale-100 transition-transform duration-300">
                                                <i class="fa-solid fa-play text-xs ml-0.5"></i>
                                            </span>
                                        </div>
                                        <!-- Duration / Active dot -->
                                        <div class="active-dot absolute top-2 right-2 w-2.5 h-2.5 bg-[#c9922a] rounded-full <?php echo $indicatorClass; ?>"></div>
                                    </div>

                                    <!-- Video Info -->
                                    <div class="min-w-0 flex-1 py-0.5">
                                        <h4 class="font-title text-sm font-medium text-slate-800 line-clamp-2 leading-snug group-hover:text-[#1a747a] transition-colors duration-200">
                                            <?php echo esc_html($video['title']); ?>
                                        </h4>
                                    </div>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<!-- Style Block for Transitions -->
<style>
#desc-wrapper {
    max-height: 500px;
    opacity: 1;
    transition: max-height 0.8s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s ease-in-out, margin-top 0.8s ease-in-out;
}
#script-wrapper {
    max-height: 0;
    opacity: 0;
    border-width: 0;
    transition: max-height 0.8s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.5s ease-in-out, margin-top 0.8s ease-in-out, border-width 0.3s ease-in-out;
}

#main-player-deck.is-playing #desc-wrapper {
    max-height: 0 !important;
    opacity: 0 !important;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    pointer-events: none;
}
#main-player-deck.is-playing #script-wrapper {
    max-height: 450px !important;
    opacity: 1 !important;
    margin-top: 1.5rem !important;
    border-width: 1px !important;
    pointer-events: auto;
}
</style>

<!-- Interaction Script -->
<script>
// Pass PHP transcript data to JavaScript
const videoTranscripts = <?php echo json_encode(array_column($videos, 'transcript', 'id'), JSON_UNESCAPED_UNICODE); ?>;

document.addEventListener('DOMContentLoaded', function () {
    const videoCards = document.querySelectorAll('.video-card');
    const playerFrame = document.getElementById('active-video-frame');
    const playerTitle = document.getElementById('active-video-title');
    const playerDesc = document.getElementById('active-video-desc');
    const playerDeck = document.getElementById('main-player-deck');
    
    const scrollContainer = document.getElementById('script-scroll-container');
    const scriptContainer = document.getElementById('script-paragraphs');
    const toggleAutoscroll = document.getElementById('toggle-autoscroll');
    const autoscrollIndicator = document.getElementById('autoscroll-indicator');
    const autoscrollText = document.getElementById('autoscroll-text');

    let player;
    let progressInterval;
    let activeIndex = -1;
    let autoscrollEnabled = true;

    // Render transcript for active video immediately
    function renderTranscript(transcript) {
        if (!scriptContainer) return;
        scriptContainer.innerHTML = '';
        
        if (!transcript || transcript.length === 0) {
            scriptContainer.innerHTML = '<p class="text-neutral-400 italic text-xs font-light">Không có lời dịch/kịch bản cho video này.</p>';
            return;
        }
        
        transcript.forEach((para, index) => {
            const paraEl = document.createElement('div');
            // Dimmed inactive style
            paraEl.className = 'script-para text-slate-500/50 opacity-40 scale-95 transition-all duration-300 cursor-pointer hover:opacity-75 font-serif py-2 text-sm leading-relaxed';
            paraEl.setAttribute('data-time', para.time);
            paraEl.setAttribute('data-index', index);
            
            // Format newlines
            paraEl.innerHTML = para.text.replace(/\n/g, '<br>');
            
            // Seek on click
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
                // Highlighted active style
                para.className = 'script-para text-slate-900 font-semibold text-base transform scale-105 opacity-100 transition-all duration-300 filter drop-shadow-[0_2px_4px_rgba(201,146,42,0.15)] py-2';
            } else {
                para.className = 'script-para text-slate-500/50 opacity-40 scale-95 transition-all duration-300 cursor-pointer hover:opacity-75 font-serif py-2 text-sm leading-relaxed';
            }
        });
        
        activeIndex = index;
        
        if (autoscrollEnabled && scrollContainer) {
            const activePara = paras[index];
            if (activePara) {
                const containerHeight = scrollContainer.clientHeight;
                const paraOffsetTop = activePara.offsetTop;
                const paraHeight = activePara.clientHeight;
                const targetScrollTop = paraOffsetTop - (containerHeight / 2) + (paraHeight / 2);
                
                scrollContainer.scrollTo({
                    top: targetScrollTop,
                    behavior: 'smooth'
                });
            }
        }
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

    // Toggle autoscroll button
    if (toggleAutoscroll) {
        toggleAutoscroll.addEventListener('click', () => {
            autoscrollEnabled = !autoscrollEnabled;
            if (autoscrollEnabled) {
                autoscrollIndicator.className = 'inline-block w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse';
                autoscrollText.textContent = 'Tự cuộn';
                // Trigger immediate scroll to active index
                if (activeIndex !== -1) {
                    const paras = scriptContainer.querySelectorAll('.script-para');
                    const activePara = paras[activeIndex];
                    if (activePara && scrollContainer) {
                        const containerHeight = scrollContainer.clientHeight;
                        const paraOffsetTop = activePara.offsetTop;
                        const paraHeight = activePara.clientHeight;
                        scrollContainer.scrollTo({
                            top: paraOffsetTop - (containerHeight / 2) + (paraHeight / 2),
                            behavior: 'smooth'
                        });
                    }
                }
            } else {
                autoscrollIndicator.className = 'inline-block w-1.5 h-1.5 rounded-full bg-neutral-300';
                autoscrollText.textContent = 'Ngưng cuộn';
            }
        });
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
        // Player is ready
        const activeCard = document.querySelector('.video-card.active');
        if (activeCard) {
            const videoId = activeCard.getAttribute('data-video-id');
            renderTranscript(videoTranscripts[videoId] || []);
        }
    }

    function onPlayerStateChange(event) {
        if (event.data === YT.PlayerState.PLAYING) {
            if (playerDeck && !playerDeck.classList.contains('is-playing')) {
                playerDeck.classList.add('is-playing');
            }
            startProgressTracking();
        } else if (event.data === YT.PlayerState.ENDED) {
            if (playerDeck) {
                playerDeck.classList.remove('is-playing');
            }
            stopProgressTracking();
        } else {
            // For paused state, keep the transcript open so the user can read it
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
        // API already loaded (e.g. page refreshed)
        initYoutubePlayer();
    }

    // Handle card clicks in playlist
    videoCards.forEach(card => {
        card.addEventListener('click', function () {
            if (this.classList.contains('active')) return;

            // Reset transitions and playing classes when switching videos
            if (playerDeck) {
                playerDeck.classList.remove('is-playing');
            }
            stopProgressTracking();

            const videoId = this.getAttribute('data-video-id');
            const title = this.getAttribute('data-title');
            const desc = this.getAttribute('data-desc');

            // Reset active states on all cards
            videoCards.forEach(c => {
                c.classList.remove('active', 'border-[#c9922a]', 'bg-[#faf8f5]');
                c.classList.add('border-neutral-100', 'bg-white');
                const dot = c.querySelector('.active-dot');
                if (dot) dot.classList.add('hidden');
            });

            // Add active state to clicked card
            this.classList.add('active', 'border-[#c9922a]', 'bg-[#faf8f5]');
            this.classList.remove('border-neutral-100', 'bg-white');
            const activeDot = this.querySelector('.active-dot');
            if (activeDot) activeDot.classList.remove('hidden');

            // Update details block
            if (playerTitle) playerTitle.textContent = title;
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

            // Scroll to player for smaller viewports
            if (window.innerWidth < 1024 && playerDeck) {
                playerDeck.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Render first transcript immediately in case YouTube API takes time
    const initialActiveCard = document.querySelector('.video-card.active');
    if (initialActiveCard) {
        const videoId = initialActiveCard.getAttribute('data-video-id');
        renderTranscript(videoTranscripts[videoId] || []);
    }
});
</script>

<?php 
get_footer(); ?>