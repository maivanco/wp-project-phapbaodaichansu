<?php
/**
 * Single Template: Diệu Pháp Âm
 * Layout matching youtube-playlist with YouTube Player Hero and Related Posts Playlist Grid
 */

get_header();

while (have_posts()) :
    the_post();

    $current_post_id = get_the_ID();
    $current_video_id = get_field('youtube_video_id', $current_post_id);
    $current_title = get_the_title();
    $current_desc = get_the_content();
    if (empty($current_desc)) {
        $current_desc = get_the_excerpt();
    }
    if (empty($current_desc)) {
        $current_desc = __('Lời khai thị chân thực và thi kệ vi diệu được Thầy trùng tuyên nhằm khai sáng tâm thức trên đạo lộ giác ngộ.', 'pbdcs');
    }

    // Extract ACF video_transcript repeater for the current post
    $curr_t_rows = get_field('video_transcript', $current_post_id);
    $current_transcripts = [];
    if (!empty($curr_t_rows) && is_array($curr_t_rows)) {
        foreach ($curr_t_rows as $row) {
            $time = isset($row['start_from']) && $row['start_from'] !== '' ? (int)$row['start_from'] : 0;
            $text = isset($row['description']) ? trim($row['description']) : '';
            if (!empty($text)) {
                $current_transcripts[] = [
                    'time' => $time,
                    'text' => $text,
                ];
            }
        }
    }

    // Default video ID fallback if none set
    $display_video_id = !empty($current_video_id) ? $current_video_id : 'oDICquOoJ6c';

    // Query all dieu-phap-am posts for the playlist / related section
    $related_query = new WP_Query([
        'post_type'      => 'dieu-phap-am',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ]);

    $playlist_items = [];
    if ($related_query->have_posts()) {
        while ($related_query->have_posts()) {
            $related_query->the_post();
            $p_id = get_the_ID();
            $v_id = get_field('youtube_video_id', $p_id);
            $v_title = get_the_title($p_id);
            $v_permalink = get_permalink($p_id);
            $v_date = get_the_date('d/m/Y', $p_id);

            $thumb_src = !empty($v_id)
                ? 'https://img.youtube.com/vi/' . esc_attr($v_id) . '/hqdefault.jpg'
                : (has_post_thumbnail($p_id) ? get_the_post_thumbnail_url($p_id, 'medium_large') : IMG_URL . 'anh-thay-Thich-Long-Vien.jpg');

            $playlist_items[] = [
                'post_id'    => $p_id,
                'id'         => $v_id,
                'title'      => $v_title,
                'permalink'  => $v_permalink,
                'date'       => $v_date,
                'thumb'      => $thumb_src,
                'is_current' => ($p_id === $current_post_id),
            ];
        }
        wp_reset_postdata();
    }
?>

<?php if (function_exists('yoast_breadcrumb')) : ?>
    <section class="breadcrumbs py-4">
        <div class="container mx-auto px-4">
            <?php yoast_breadcrumb(); ?>
        </div>
    </section>
<?php endif; ?>

<div class="youtube-videos-wrapper bg-cream min-h-screen pb-16">
    
    <!-- Unified Hero Header & Video Player Block -->
    <section id="hero-playlist-banner" class="relative overflow-hidden bg-slate-950 text-white min-h-[550px] py-12 md:py-16 flex items-center transition-all duration-700">
        <!-- Background Layer with YouTube Active Video Thumbnail & Gradient Overlays -->
        <div id="hero-bg-layer" 
             class="absolute inset-0 bg-cover bg-center transition-all duration-700 ease-in-out transform scale-105 filter blur-xs md:blur-none opacity-75"
             style="background-image: url('https://img.youtube.com/vi/<?php echo esc_attr($display_video_id); ?>/maxresdefault.jpg');">
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
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#c9922a]/20 border border-[#c9922a]/40 text-[#f3d38c] text-xs font-medium uppercase tracking-widest backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-[#c9922a] animate-pulse"></span>
                    <span><?php _e('Tuyển Tập Pháp Âm • Thi Kệ', 'pbdcs'); ?></span>
                </div>

                <!-- Video Title -->
                <h1 id="hero-video-title" class="text-2xl sm:text-3xl md:text-4xl text-white font-light leading-snug tracking-wide transition-all duration-300 drop-shadow-md">
                    <?php echo esc_html($current_title); ?>
                </h1>

                <!-- Author Info -->
                <div class="flex items-center gap-4 text-xs sm:text-sm text-neutral-200 uppercase tracking-widest drop-shadow-sm">
                    <span class="flex items-center gap-2">
                        <i class="fa-solid fa-user-nib text-[#c9922a]"></i>
                        <?php _e('Diễn đọc: Tỷ kheo Thích Long Viễn', 'pbdcs'); ?>
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
                                    src="https://www.youtube.com/embed/<?php echo esc_attr($display_video_id); ?>?enablejsapi=1&rel=0" 
                                    title="<?php echo esc_attr($current_title); ?>"
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    allowfullscreen
                                ></iframe>
                            </div>

                            <!-- Description Wrapper -->
                            <div id="desc-wrapper" class="p-4 md:p-5 bg-slate-900/60 backdrop-blur-md border-t border-white/10 flex-1">
                                <div id="active-video-desc" class="text-xs md:text-sm text-neutral-200 leading-relaxed whitespace-pre-line font-light">
                                    <?php echo esc_html(wp_strip_all_tags($current_desc)); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Equal Height Transcript Container -->
                <div class="lg:col-span-5 flex flex-col">
                    
                    <div class="bg-slate-900/65 border border-white/20 rounded-2xl p-5 md:p-6 backdrop-blur-md shadow-2xl flex-1 flex flex-col space-y-4">
                        
                        <!-- Transcript Section Header -->
                        <div class="flex items-center justify-between border-b border-white/10 pb-3 shrink-0">
                            <span class="text-xs font-semibold text-[#c9922a] uppercase tracking-wider flex items-center gap-2">
                                <i class="fa-solid fa-scroll"></i> <?php _e('Thi Kệ Lời Dạy • Transcript', 'pbdcs'); ?>
                            </span>
                        </div>

                        <!-- Static Transcript Box (Matching Video Height) -->
                        <div id="script-wrapper" class="flex-1 min-h-0 border border-white/10 rounded-xl bg-[#faf8f5] text-slate-800 relative shadow-inner overflow-hidden" style="background-image: url('<?php echo esc_url(IMG_URL . 'parchment-bg.png'); ?>'); background-size: cover; background-position: center;">
                            <div id="script-scroll-container" class="h-full overflow-y-auto px-5 py-4 scrollbar-thin relative flex flex-col max-h-[300px]">
                                <div id="script-paragraphs" class="w-full space-y-3 text-center my-auto">
                                    <?php if (!empty($current_transcripts)) : ?>
                                        <?php foreach ($current_transcripts as $index => $item) : ?>
                                            <div 
                                                class="script-para text-slate-700 py-1.5 text-sm md:text-base leading-relaxed opacity-85 hover:opacity-100 transition-all cursor-pointer rounded-lg px-2"
                                                data-time="<?php echo esc_attr($item['time']); ?>"
                                                data-index="<?php echo esc_attr($index); ?>"
                                            >
                                                <?php echo nl2br(esc_html($item['text'])); ?>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <p class="text-neutral-400 italic text-xs font-light py-8">
                                            <?php _e('Đang cập nhật lời kệ / kịch bản cho video này.', 'pbdcs'); ?>
                                        </p>
                                    <?php endif; ?>
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
                    <span class="text-[#c9922a] text-xs font-semibold uppercase tracking-widest"><?php _e('Danh Sách Video', 'pbdcs'); ?></span>
                    <h3 class="text-2xl md:text-3xl text-slate-800 font-light mt-1"><?php _e('Tuyển Tập Diệu Pháp Âm', 'pbdcs'); ?></h3>
                </div>
                <span class="bg-[#1a747a]/10 text-[#1a747a] text-xs font-bold px-3.5 py-1.5 rounded-full shadow-xs">
                    <?php echo sprintf(__('%d Video', 'pbdcs'), count($playlist_items)); ?>
                </span>
            </div>

            <!-- 4 Columns Video Grid (Standard <a> Navigation) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php foreach ($playlist_items as $item) : 
                    $isActive = $item['is_current'];
                    $activeClass = $isActive 
                        ? 'border-[#c9922a] ring-2 ring-[#c9922a]/30 bg-[#faf8f5] shadow-sm' 
                        : 'border-neutral-200/80 hover:border-neutral-300 bg-white hover:shadow-lg hover:-translate-y-0.5';
                ?>
                    <a 
                        href="<?php echo esc_url($item['permalink']); ?>" 
                        class="video-card group flex flex-col h-full rounded-2xl border overflow-hidden transition-all duration-300 text-left <?php echo $activeClass; ?>"
                    >
                        <!-- Thumbnail Container (16:9) -->
                        <div class="relative w-full aspect-video bg-neutral-900 overflow-hidden shrink-0">
                            <img 
                                src="<?php echo esc_url($item['thumb']); ?>" 
                                alt="<?php echo esc_attr($item['title']); ?>" 
                                loading="lazy"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                            />
                            
                            <!-- Play Overlay Icon -->
                            <div class="absolute inset-0 bg-black/30 group-hover:bg-black/15 flex items-center justify-center transition-all duration-300">
                                <span class="w-11 h-11 rounded-full bg-[#c9922a]/90 group-hover:bg-[#c9922a] text-white flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-transform duration-300">
                                    <i class="fa-solid fa-play text-xs ml-0.5"></i>
                                </span>
                            </div>

                            <!-- Active Badge -->
                            <?php if ($isActive) : ?>
                                <div class="absolute top-3 right-3 px-2.5 py-1 rounded-full bg-[#c9922a] text-white text-[10px] font-bold tracking-wider shadow-md">
                                    <?php _e('Đang phát', 'pbdcs'); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Video Content / Info -->
                        <div class="p-5 flex flex-col justify-between flex-1 space-y-3">
                            <h4 class="text-base font-semibold text-slate-800 line-clamp-2 leading-snug group-hover:text-[#1a747a] transition-colors duration-200">
                                <?php echo esc_html($item['title']); ?>
                            </h4>
                            
                            <div class="pt-3 border-t border-neutral-100 flex items-center justify-between text-[11px] text-neutral-400">
                                <span><?php _e('Thích Long Viễn', 'pbdcs'); ?></span>
                                <span class="text-[#1a747a] font-medium group-hover:translate-x-0.5 transition-transform duration-200 flex items-center gap-1">
                                    <?php _e('Nghe thi kệ', 'pbdcs'); ?> <i class="fa-solid fa-chevron-right text-[9px]"></i>
                                </span>
                            </div>
                        </div>
                    </a>
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

<!-- YouTube Player Interaction Script for Current Video -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const scriptContainer = document.getElementById('script-paragraphs');
    const paras = scriptContainer ? scriptContainer.querySelectorAll('.script-para') : [];
    let player;
    let progressInterval;
    let activeIndex = -1;

    function highlightParagraph(index) {
        if (index === activeIndex) return;
        
        paras.forEach((para, idx) => {
            if (idx === index) {
                para.className = 'script-para text-[#9e6f1a] font-bold text-sm md:text-base opacity-100 bg-[#c9922a]/15 rounded-lg px-3 py-1.5 transition-all shadow-xs';
            } else {
                para.className = 'script-para text-slate-700 py-1.5 text-sm md:text-base leading-relaxed opacity-85 hover:opacity-100 transition-all cursor-pointer rounded-lg px-2';
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
        if (!paras || paras.length === 0) return;
        
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

    // Attach click to seek on transcript lines
    paras.forEach((para, index) => {
        para.addEventListener('click', function () {
            const time = parseFloat(this.getAttribute('data-time'));
            if (player && typeof player.seekTo === 'function') {
                player.seekTo(time, true);
                highlightParagraph(index);
            }
        });
    });

    // Initialize YouTube Player
    window.onYouTubeIframeAPIReady = function () {
        initYoutubePlayer();
    };

    function initYoutubePlayer() {
        player = new YT.Player('active-video-frame', {
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerStateChange(event) {
        if (event.data === YT.PlayerState.PLAYING) {
            startProgressTracking();
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
});
</script>

<?php
endwhile;

get_footer();
