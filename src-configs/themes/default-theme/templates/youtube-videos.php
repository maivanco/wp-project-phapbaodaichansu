<?php

/**
 * Template Name: Youtube Videos
 */
get_header(); 

// Video playlist data
$videos = [
    [
        'id' => 'oDICquOoJ6c',
        'title' => 'Thi Kệ: Thân Ngoại Mộng Phi Thân Ký',
        'desc' => "Bài thi kệ kính niệm Tôn giả Tân Đầu Lô Phả La Đọa (Pindola Bharadvaja) – một vị Đại A La Hán trong Phật giáo.\n\nNội dung thể hiện những suy tư sâu sắc về lẽ vô thường, kiếp nhân sinh tạm bợ và những trăn trở của một hành giả trên con đường tìm cầu giải thoát, giác ngộ chân lý vô thượng.",
        'url' => 'https://www.youtube.com/watch?v=oDICquOoJ6c&list=PLQVTuLqUwoggn6XbpJCQa0VNKt_VSrMDJ',
    ],
    [
        'id' => 'Pz9GooNBB5Y',
        'title' => 'Thi Kệ: Hùng Tâm Nơi Đất Thiêng',
        'desc' => "Bài thi kệ mang âm hưởng hào hùng, thắp sáng chí nguyện tu học và tấm lòng tôn kính Tam Bảo nơi miền đất tâm linh thiêng liêng.\n\nLời thơ khuyến tấn các hành giả vững tin nơi Chánh pháp, tinh tấn vượt qua mọi khó khăn thử thách của trần gian.",
        'url' => 'https://www.youtube.com/watch?v=Pz9GooNBB5Y&list=PLQVTuLqUwoggn6XbpJCQa0VNKt_VSrMDJ',
    ],
    [
        'id' => 'vOG6B18XL_c',
        'title' => 'Thi Kệ: Hùng Chí Đại Trượng Phu',
        'desc' => "Khắc họa chí khí kiên cường của bậc trượng phu quyết chí xuất trần, dám buông xả mọi danh lợi thế gian để hướng đến quả vị giải thoát thanh tịnh.\n\nLời thi kệ khơi gợi nguồn năng lượng dũng mãnh, vượt lên trên mọi cám dỗ và ràng buộc thường tình.",
        'url' => 'https://www.youtube.com/watch?v=vOG6B18XL_c&list=PLQVTuLqUwoggn6XbpJCQa0VNKt_VSrMDJ',
    ],
    [
        'id' => 'khSGoSIdWDc',
        'title' => 'Thi Kệ: Đệ Tử Như Lai',
        'desc' => "Lời nhắc nhở chân tình và sâu sắc về sứ mệnh cùng bổn phận thiêng liêng của một người đệ tử Phật.\n\nKhuyên bảo người học đạo luôn giữ vững chánh niệm, khắc ghi những lời dạy vàng ngọc của Đức Thế Tôn để hành trì trong đời sống hằng ngày.",
        'url' => 'https://www.youtube.com/watch?v=khSGoSIdWDc&list=PLQVTuLqUwoggn6XbpJCQa0VNKt_VSrMDJ',
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
            <div class="grid grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- Main Featured Player Column -->
                <div id="main-player-deck" class="lg:col-span-8">
                    <div class="bg-white rounded-2xl border border-neutral-100 overflow-hidden shadow-sm transition-all duration-300">
                        <!-- Video Frame Box -->
                        <div class="relative w-full bg-black overflow-hidden group" style="aspect-ratio: 16/9;">
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

                            <div class="w-full h-px bg-neutral-100 mb-6"></div>

                            <p id="active-video-desc" class="text-sm md:text-base text-neutral-600 leading-relaxed whitespace-pre-line font-light">
                                <?php echo esc_html($videos[0]['desc']); ?>
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Playlist Queue Column -->
                <div class="lg:col-span-4">
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

<!-- Interaction Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const videoCards = document.querySelectorAll('.video-card');
    const playerFrame = document.getElementById('active-video-frame');
    const playerTitle = document.getElementById('active-video-title');
    const playerDesc = document.getElementById('active-video-desc');
    const playerYtLink = document.getElementById('active-video-yt-link');
    const playerDeck = document.getElementById('main-player-deck');

    videoCards.forEach(card => {
        card.addEventListener('click', function () {
            // Check if it's already active
            if (this.classList.contains('active')) return;

            // Extract attributes
            const videoId = this.getAttribute('data-video-id');
            const title = this.getAttribute('data-title');
            const desc = this.getAttribute('data-desc');
            const ytUrl = this.getAttribute('data-yt-url');

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

            // Update player and details block
            if (playerFrame) {
                playerFrame.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&enablejsapi=1&rel=0`;
            }
            if (playerTitle) playerTitle.textContent = title;
            if (playerDesc) playerDesc.textContent = desc;
            if (playerYtLink) playerYtLink.href = ytUrl;

            // Scroll to player for smaller viewports (tablet & mobile)
            if (window.innerWidth < 1024 && playerDeck) {
                playerDeck.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});
</script>

<?php 
get_footer(); ?>