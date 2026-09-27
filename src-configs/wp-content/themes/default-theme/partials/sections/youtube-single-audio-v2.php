<?php
/**
 * Partial Section: YouTube Single Audio V2 (Thiền Vị & Thi Kệ Cuộn Chậm)
 *
 * An artistic, minimalist Zen audio experience for YouTube recitations / dharma discourses.
 * Key Characteristics:
 *  - Simplified controls: ONLY a single sacred Play/Pause button (no bulky docks/sliders).
 *  - Ambient background: Photographic composition on the right (Tôn Sư Thích Long Viễn)
 *    seamlessly blended with the deep twilight mountain indigo palette on the left.
 *  - Dynamic Art Script: A meditative transcript/verse that smoothly scrolls from bottom
 *    to top while audio is playing, pausing instantly when paused.
 *  - Clean typography adhering strictly to the theme's primary body font.
 *
 * Default Video: https://www.youtube.com/watch?v=hG_UsyRIPsM (Tâm thư cảnh sách)
 */

$video_id       = !empty($args['video_id']) ? $args['video_id'] : 'hG_UsyRIPsM';
$section_title  = !empty($args['section_title']) ? $args['section_title'] : __('Tâm Thư Cảnh Sách', 'pbdcs');
$quote_text     = !empty($args['quote_text']) ? $args['quote_text'] : __('"Tâm thư cảnh sách của Tôn Sư gửi đến tất cả đại chúng"', 'pbdcs');
$bg_image       = !empty($args['bg_image']) ? $args['bg_image'] : IMG_URL . 'anh-thay-alone.jpg';

// Sample Buddhist transcript/script paragraphs (user can customize later or pass in via $args['script_items'])
$default_script_paragraphs = [
    [
        'title'   => __('Khai Thị Đại Chúng', 'pbdcs'),
        'content' => __("Kính gửi toàn thể hàng đệ tử và đại chúng hữu duyên,\nTrên bước đường tu nhân học Phật giữa cõi thế gian vô thường,\nMuôn duyên hợp tan như bọt nước đầu gành, bừng sáng rồi tan biến.", 'pbdcs'),
    ],
    [
        'title'   => __('Cảnh Tỉnh Vô Thường', 'pbdcs'),
        'content' => __("Ngày nay đã qua, mạng căn giảm bớt, như cá cạn nước nào có vui chi?\nĐại chúng hãy siêng năng tinh tấn, như cứu lửa cháy trên đầu,\nChỉ nghĩ đến vô thường, chớ để ngày tháng trôi qua uổng phí.", 'pbdcs'),
    ],
    [
        'title'   => __('Quay Về Nương Tựa Tự Tánh', 'pbdcs'),
        'content' => __("Hãy giữ lòng thanh tịnh, lắng lòng nghe tiếng niệm Phật giữa đêm thanh vắng.\nMỗi bước chân đi là một bước trở về quê hương giác ngộ,\nBuông xả hết thảy phiền não, hỷ nộ ái ố nơi trần gian.", 'pbdcs'),
    ],
    [
        'title'   => __('Thi Kệ Tôn Sư', 'pbdcs'),
        'content' => __("Diệu thượng trùng san xuyên vạn kiếp,\nPháp tòa chi nội trụ thiên tâm.\nLiên đàng lục đạo hoằng hựu hiệp,\nHoa khai bách diệp lý trùng san.", 'pbdcs'),
    ],
    [
        'title'   => __('Hồi Hướng Bồ Đề', 'pbdcs'),
        'content' => __("Nguyện cầu ánh sáng chánh pháp trường tồn soi rọi khắp muôn phương,\nChúng sanh muôn loài đều thấm nhuần cam lồ pháp vị,\nBồ-đề tâm kiên cố, đồng quy cõi Tây Phương cực lạc thanh lương.", 'pbdcs'),
    ],
];

$script_items = (!empty($args['script_items']) && is_array($args['script_items'])) ? $args['script_items'] : $default_script_paragraphs;
?>

<section id="yt-audio-v2-section"
         class="relative w-full min-h-[85vh] lg:min-h-screen overflow-hidden select-none bg-[#0c131d] text-white flex items-center"
         data-video-id="<?php echo esc_attr($video_id); ?>"
         aria-label="<?php echo esc_attr($section_title); ?>">

    <!-- 1. Ambient Background Layer (Deep Twilight Mountain Mist expanding left) -->
    <div class="absolute inset-0 pointer-events-none select-none overflow-hidden" aria-hidden="true">
        <!-- Deep atmospheric radial gradient base matching the misty sky of the photo -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_75%_35%,#243750_0%,#111a28_45%,#0a0f17_100%)] opacity-95"></div>

        <!-- Subtle Zen Light Orbs -->
        <div class="absolute top-1/4 left-10 w-96 h-96 bg-[#c9922a]/10 rounded-full blur-[140px]"></div>
        <div class="absolute bottom-10 left-1/3 w-[500px] h-[350px] bg-[#1a385c]/25 rounded-full blur-[120px]"></div>

        <!-- Delicate Zen stippling grain -->
        <div class="absolute inset-0 opacity-[0.035] bg-[radial-gradient(#edd8b0_1px,transparent_1px)] [background-size:28px_28px]"></div>
    </div>

    <!-- 2. Sacred Portrait Background on the Right Side (Seamless Feathered Blend) -->
    <div class="absolute right-0 top-0 bottom-0 w-full lg:w-[60%] xl:w-[54%] pointer-events-none overflow-hidden z-0" aria-hidden="true">
        <!-- Monk Image overlooking the vast misty mountains -->
        <img src="<?php echo esc_url($bg_image); ?>"
             alt="<?php esc_attr_e('Tôn Sư Thích Long Viễn toạ thiền trên đỉnh núi', 'pbdcs'); ?>"
             class="w-full h-full object-cover object-[75%_top] lg:object-right-top select-none opacity-60 sm:opacity-75 lg:opacity-90 contrast-[1.03] brightness-[0.96] transition-transform duration-1000 ease-out"
             id="yt-v2-bg-monk-img" />

        <!-- Seamless horizontal gradient fade from deep indigo-black on left to transparent on right -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#0c131d] via-[#0c131d]/75 lg:via-[#0c131d]/35 to-transparent"></div>

        <!-- Top & Bottom atmospheric mist fades -->
        <div class="absolute inset-x-0 top-0 h-28 bg-gradient-to-b from-[#0c131d] to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-[#0c131d] via-[#0c131d]/70 to-transparent"></div>

        <!-- Subtle golden robe resonance orb -->
        <div class="absolute bottom-16 right-16 w-72 h-72 bg-[#c9922a]/15 rounded-full blur-[110px]"></div>
    </div>

    <!-- 3. Foreground Content: Left-Aligned Art Layout & Scrolling Script -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-12 py-16 md:py-20 lg:py-24 relative z-10 w-full">
        <div class="max-w-2xl lg:max-w-xl xl:max-w-2xl">

            <!-- Zen Badge -->
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/[0.04] border border-[#c9922a]/30 text-[#edd8b0] text-xs uppercase tracking-[0.22em] mb-4 backdrop-blur-xs">
                <span class="w-1.5 h-1.5 rounded-full bg-[#c9922a] animate-pulse"></span>
                <span><?php _e('Pháp Âm Thanh Tịnh', 'pbdcs'); ?></span>
            </div>

            <!-- Main Title -->
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-light tracking-wide text-[#fcfaf7] mb-3 leading-tight drop-shadow-md">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#ffffff] via-[#f7ecd6] to-[#d4a359]">
                    <?php echo esc_html($section_title); ?>
                </span>
            </h2>

            <!-- Subtle Gold Accent Divider -->
            <div class="flex items-center gap-3 my-3">
                <span class="h-px w-12 bg-gradient-to-r from-[#c9922a] to-transparent"></span>
                <span class="w-1.5 h-1.5 rotate-45 bg-[#c9922a]/80 rounded-[1px]"></span>
                <span class="h-px w-24 bg-gradient-to-r from-[#c9922a]/60 to-transparent"></span>
            </div>

            <!-- Introductory Quote / Monastic Excerpt -->
            <p class="text-sm sm:text-base text-slate-300/85 italic font-light mb-8 max-w-lg leading-relaxed">
                <?php echo esc_html($quote_text); ?>
            </p>

            <!-- Minimalist Controller: ONLY Play/Pause Button with Breathing Zen Aura -->
            <div class="flex items-center gap-5 sm:gap-6 mb-8 sm:mb-10">
                <!-- Sacred Round Button Container -->
                <div class="relative flex items-center justify-center flex-shrink-0">
                    <!-- Outer pulsating resonance rings (animated when playing) -->
                    <div class="yt-v2-pulse-ring yt-v2-pulse-ring-1 absolute w-full h-full rounded-full border border-[#c9922a]/60 pointer-events-none opacity-0"></div>
                    <div class="yt-v2-pulse-ring yt-v2-pulse-ring-2 absolute w-full h-full rounded-full border border-[#c9922a]/40 pointer-events-none opacity-0"></div>

                    <!-- Main Play / Pause Button -->
                    <button id="yt-v2-play-btn"
                            type="button"
                            class="relative z-10 w-16 h-16 sm:w-18 sm:h-18 rounded-full bg-gradient-to-br from-[#dfa637] via-[#c9922a] to-[#a36f1c] text-[#0d131e] flex items-center justify-center shadow-[0_0_35px_rgba(201,146,42,0.45)] hover:shadow-[0_0_55px_rgba(201,146,42,0.75)] hover:scale-105 active:scale-95 transition-all duration-300 cursor-pointer group"
                            aria-label="<?php esc_attr_e('Phát hoặc tạm dừng pháp âm', 'pbdcs'); ?>"
                            title="<?php esc_attr_e('Chạm để phát âm thanh', 'pbdcs'); ?>">
                        <i id="yt-v2-play-icon" class="fa-solid fa-play text-xl sm:text-2xl ml-1 group-hover:scale-110 transition-transform duration-200"></i>
                    </button>
                </div>

                <!-- Artistic Status & Live Audio Indicator -->
                <div class="flex flex-col justify-center">
                    <span id="yt-v2-play-label" class="text-base sm:text-lg font-medium text-[#fcfaf7] tracking-wide transition-colors">
                        <?php _e('Lắng nghe pháp âm', 'pbdcs'); ?>
                    </span>

                    <div class="flex items-center gap-2 mt-1">
                        <!-- Soundwave bars (pulse when playing) -->
                        <div id="yt-v2-soundwave" class="flex items-end gap-1 h-3.5 opacity-40 transition-opacity">
                            <span class="yt-v2-wave-bar w-0.5 h-3 bg-[#c9922a] rounded-full"></span>
                            <span class="yt-v2-wave-bar w-0.5 h-3 bg-[#c9922a] rounded-full"></span>
                            <span class="yt-v2-wave-bar w-0.5 h-3 bg-[#c9922a] rounded-full"></span>
                            <span class="yt-v2-wave-bar w-0.5 h-3 bg-[#c9922a] rounded-full"></span>
                        </div>

                        <span id="yt-v2-status-hint" class="text-xs text-[#edd8b0]/70 font-light tracking-wider">
                            <?php _e('Chạm để phát', 'pbdcs'); ?>
                        </span>
                    </div>
                </div>
            </div>

            <!-- 4. Meditative Script Viewport (Runs bottom-to-top when playing) -->
            <div class="relative w-full rounded-2xl bg-[#090e17]/55 border border-[#c9922a]/25 backdrop-blur-md p-6 sm:p-8 shadow-[0_15px_45px_rgba(0,0,0,0.5)] transition-all duration-500 hover:border-[#c9922a]/45">
                
                <!-- Zen Corner Brackets for Art Style -->
                <span class="absolute top-2.5 left-3 text-[#c9922a]/30 text-xs pointer-events-none select-none">⌜</span>
                <span class="absolute top-2.5 right-3 text-[#c9922a]/30 text-xs pointer-events-none select-none">⌝</span>
                <span class="absolute bottom-2.5 left-3 text-[#c9922a]/30 text-xs pointer-events-none select-none">⌞</span>
                <span class="absolute bottom-2.5 right-3 text-[#c9922a]/30 text-xs pointer-events-none select-none">⌟</span>

                <!-- Script Header Tab -->
                <div class="flex items-center justify-between border-b border-white/10 pb-3 mb-4">
                    <span class="text-xs font-medium uppercase tracking-[0.2em] text-[#edd8b0]/80 flex items-center gap-2">
                        <i class="fa-solid fa-scroll text-[#c9922a] text-[11px]"></i>
                        <?php _e('Những lời sách tấn của Tôn Sư', 'pbdcs'); ?>
                    </span>
                </div>

                <!-- Scrolling Viewport with Top & Bottom Feathered Fade Masks -->
                <div id="yt-v2-script-viewport"
                     class="relative h-[220px] sm:h-[260px] md:h-[290px] overflow-hidden select-none cursor-grab active:cursor-grabbing"
                     style="-webkit-mask-image: linear-gradient(to bottom, transparent 0%, black 16%, black 84%, transparent 100%); mask-image: linear-gradient(to bottom, transparent 0%, black 16%, black 84%, transparent 100%);"
                     aria-live="polite">

                    <!-- Continuous Motion Track (smoothly scrolls from bottom to top) -->
                    <div id="yt-v2-script-track" class="w-full transform will-change-transform">
                        <!-- Content Block A -->
                        <div class="yt-v2-script-block space-y-6 text-left py-2">
                            <?php foreach ($script_items as $index => $item): ?>
                                <article class="yt-v2-script-item border-l-2 border-[#c9922a]/30 pl-4 sm:pl-5 transition-colors hover:border-[#c9922a]">
                                    <?php if (!empty($item['title'])): ?>
                                        <h4 class="text-xs sm:text-sm font-medium uppercase tracking-wider text-[#d4a359] mb-1.5 flex items-center gap-2">
                                            <span class="w-1 h-1 rounded-full bg-[#c9922a]"></span>
                                            <?php echo esc_html($item['title']); ?>
                                        </h4>
                                    <?php endif; ?>
                                    <p class="text-sm sm:text-base text-slate-200/90 leading-relaxed font-light whitespace-pre-line">
                                        <?php echo nl2br(esc_html($item['content'])); ?>
                                    </p>
                                </article>
                            <?php endforeach; ?>
                        </div>

                        <!-- Gentle Divider Between Seamless Loops -->
                        <div class="flex items-center justify-center gap-2 my-8 opacity-40 select-none">
                            <span class="h-px w-10 bg-[#c9922a]"></span>
                            <span class="text-[#c9922a] text-xs">☸</span>
                            <span class="h-px w-10 bg-[#c9922a]"></span>
                        </div>

                        <!-- Content Block B (Duplicate for seamless infinite upward scroll) -->
                        <div class="yt-v2-script-block space-y-6 text-left py-2" aria-hidden="true">
                            <?php foreach ($script_items as $index => $item): ?>
                                <article class="yt-v2-script-item border-l-2 border-[#c9922a]/30 pl-4 sm:pl-5 transition-colors hover:border-[#c9922a]">
                                    <?php if (!empty($item['title'])): ?>
                                        <h4 class="text-xs sm:text-sm font-medium uppercase tracking-wider text-[#d4a359] mb-1.5 flex items-center gap-2">
                                            <span class="w-1 h-1 rounded-full bg-[#c9922a]"></span>
                                            <?php echo esc_html($item['title']); ?>
                                        </h4>
                                    <?php endif; ?>
                                    <p class="text-sm sm:text-base text-slate-200/90 leading-relaxed font-light whitespace-pre-line">
                                        <?php echo nl2br(esc_html($item['content'])); ?>
                                    </p>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- Hidden Offscreen YouTube IFrame Container (Audio Engine) -->
    <div id="yt-v2-iframe-host" class="absolute w-1 h-1 opacity-0 pointer-events-none overflow-hidden select-none -z-50" aria-hidden="true">
        <div id="yt-v2-player"></div>
    </div>

</section>

<!-- Scoped Styling for Animations -->
<style>
    /* Pulsating aura around play button */
    @keyframes yt-v2-pulse {
        0% {
            transform: scale(1);
            opacity: 0.75;
        }
        50% {
            transform: scale(1.3);
            opacity: 0.25;
        }
        100% {
            transform: scale(1.58);
            opacity: 0;
        }
    }

    .yt-v2-is-playing .yt-v2-pulse-ring-1 {
        animation: yt-v2-pulse 2.2s cubic-bezier(0, 0.2, 0.8, 1) infinite;
    }

    .yt-v2-is-playing .yt-v2-pulse-ring-2 {
        animation: yt-v2-pulse 2.2s cubic-bezier(0, 0.2, 0.8, 1) infinite 0.7s;
    }

    /* Soundwave bars animation */
    @keyframes yt-v2-soundwave-dance {
        0%, 100% {
            height: 3px;
            opacity: 0.5;
        }
        50% {
            height: 14px;
            opacity: 1;
        }
    }

    .yt-v2-is-playing .yt-v2-wave-bar {
        animation: yt-v2-soundwave-dance 1s ease-in-out infinite alternate;
    }

    .yt-v2-is-playing .yt-v2-wave-bar:nth-child(1) { animation-duration: 0.75s; }
    .yt-v2-is-playing .yt-v2-wave-bar:nth-child(2) { animation-duration: 1.1s; animation-delay: 0.15s; }
    .yt-v2-is-playing .yt-v2-wave-bar:nth-child(3) { animation-duration: 0.85s; animation-delay: 0.3s; }
    .yt-v2-is-playing .yt-v2-wave-bar:nth-child(4) { animation-duration: 1.25s; animation-delay: 0.2s; }
</style>

<!-- YouTube Player & Smooth Script Scrolling Engine -->
<script>
(function() {
    'use strict';

    const section = document.getElementById('yt-audio-v2-section');
    if (!section) return;

    const videoId = section.getAttribute('data-video-id') || 'hG_UsyRIPsM';

    // UI Elements
    const playBtn        = document.getElementById('yt-v2-play-btn');
    const playIcon       = document.getElementById('yt-v2-play-icon');
    const playLabel      = document.getElementById('yt-v2-play-label');
    const statusHint     = document.getElementById('yt-v2-status-hint');
    const soundwave      = document.getElementById('yt-v2-soundwave');
    const scriptViewport = document.getElementById('yt-v2-script-viewport');
    const scriptTrack    = document.getElementById('yt-v2-script-track');

    let player = null;
    let isPlayerReady = false;
    let isPlaying = false;

    // Scrolling Engine Variables
    let scrollOffset = 0;
    let scrollSpeed = 22; // Pixels per second (contemplative, gentle reading speed)
    let lastFrameTime = null;
    let animFrameId = null;
    let isUserHovered = false;
    let isDragging = false;
    let startY = 0;
    let dragStartOffset = 0;

    // Measure loop height
    function getLoopDistance() {
        const firstBlock = scriptTrack.querySelector('.yt-v2-script-block');
        if (!firstBlock) return 500;
        // Total height of first block + divider margin
        return firstBlock.offsetHeight + 64;
    }

    // Main animation loop for smooth, jank-free script motion
    function motionLoop(now) {
        if (!isPlaying) {
            animFrameId = null;
            return;
        }

        if (!lastFrameTime) lastFrameTime = now;
        const delta = (now - lastFrameTime) / 1000;
        lastFrameTime = now;

        // Auto-scroll when not actively paused by user hover/drag
        if (!isUserHovered && !isDragging) {
            scrollOffset += scrollSpeed * delta;
            const loopDistance = getLoopDistance();

            // Seamless infinite cycle: wrap around without any visible glitch
            if (scrollOffset >= loopDistance) {
                scrollOffset -= loopDistance;
            }

            scriptTrack.style.transform = 'translate3d(0, -' + scrollOffset.toFixed(2) + 'px, 0)';
        }

        animFrameId = requestAnimationFrame(motionLoop);
    }

    function startScriptMotion() {
        if (!animFrameId) {
            lastFrameTime = performance.now();
            animFrameId = requestAnimationFrame(motionLoop);
        }
    }

    function stopScriptMotion() {
        if (animFrameId) {
            cancelAnimationFrame(animFrameId);
            animFrameId = null;
        }
        lastFrameTime = null;
    }

    // Toggle Play/Pause
    function togglePlayback() {
        if (!player || !isPlayerReady) return;

        if (isPlaying) {
            player.pauseVideo();
        } else {
            player.playVideo();
        }
    }

    // YouTube State Change Handling
    function onPlayerStateChange(event) {
        // -1: unstarted, 0: ended, 1: playing, 2: paused, 3: buffering
        if (event.data === YT.PlayerState.PLAYING) {
            isPlaying = true;
            section.classList.add('yt-v2-is-playing');
            playIcon.className = 'fa-solid fa-pause text-xl sm:text-2xl ml-0';
            playLabel.textContent = '<?php echo esc_js(__('Đang phát pháp âm', 'pbdcs')); ?>';
            statusHint.textContent = '<?php echo esc_js(__('Đang lắng nghe...', 'pbdcs')); ?>';
            soundwave.classList.remove('opacity-40');
            soundwave.classList.add('opacity-100');
            startScriptMotion();
        } else if (event.data === YT.PlayerState.PAUSED) {
            isPlaying = false;
            section.classList.remove('yt-v2-is-playing');
            playIcon.className = 'fa-solid fa-play text-xl sm:text-2xl ml-1';
            playLabel.textContent = '<?php echo esc_js(__('Tạm dừng pháp âm', 'pbdcs')); ?>';
            statusHint.textContent = '<?php echo esc_js(__('Chạm để tiếp tục', 'pbdcs')); ?>';
            soundwave.classList.remove('opacity-100');
            soundwave.classList.add('opacity-40');
            stopScriptMotion();
        } else if (event.data === YT.PlayerState.BUFFERING) {
            statusHint.textContent = '<?php echo esc_js(__('Đang tải âm thanh...', 'pbdcs')); ?>';
        } else if (event.data === YT.PlayerState.ENDED) {
            isPlaying = false;
            section.classList.remove('yt-v2-is-playing');
            playIcon.className = 'fa-solid fa-rotate-right text-xl sm:text-2xl ml-0';
            playLabel.textContent = '<?php echo esc_js(__('Phát lại từ đầu', 'pbdcs')); ?>';
            statusHint.textContent = '<?php echo esc_js(__('Đã hoàn mãn', 'pbdcs')); ?>';
            soundwave.classList.remove('opacity-100');
            soundwave.classList.add('opacity-40');
            stopScriptMotion();
        }
    }

    // Initialize YouTube Player
    function initV2Player() {
        player = new YT.Player('yt-v2-player', {
            videoId: videoId,
            playerVars: {
                autoplay: 0,
                controls: 0,
                playsinline: 1,
                rel: 0,
                modestbranding: 1,
                iv_load_policy: 3
            },
            events: {
                'onReady': function() {
                    isPlayerReady = true;
                    player.setVolume(85);
                    statusHint.textContent = '<?php echo esc_js(__('Sẵn sàng lắng nghe', 'pbdcs')); ?>';
                },
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // Load YouTube API script asynchronously if needed
    function loadYouTubeApi() {
        if (window.YT && window.YT.Player) {
            initV2Player();
        } else {
            const existing = document.querySelector('script[src*="youtube.com/iframe_api"]');
            if (!existing) {
                const tag = document.createElement('script');
                tag.src = 'https://www.youtube.com/iframe_api';
                const first = document.getElementsByTagName('script')[0];
                first.parentNode.insertBefore(tag, first);
            }
            const prevCallback = window.onYouTubeIframeAPIReady;
            window.onYouTubeIframeAPIReady = function() {
                if (typeof prevCallback === 'function') prevCallback();
                initV2Player();
            };
        }
    }

    // Event Bindings
    playBtn.addEventListener('click', togglePlayback);

    // Interactive Hover: pause auto-scroll so user can comfortably read a line
    scriptViewport.addEventListener('mouseenter', function() {
        isUserHovered = true;
    });

    scriptViewport.addEventListener('mouseleave', function() {
        isUserHovered = false;
    });

    // Touch & Mouse Drag to manually adjust reading position
    scriptViewport.addEventListener('mousedown', function(e) {
        isDragging = true;
        startY = e.clientY;
        dragStartOffset = scrollOffset;
    });

    window.addEventListener('mousemove', function(e) {
        if (!isDragging) return;
        const deltaY = startY - e.clientY;
        const loopDistance = getLoopDistance();
        scrollOffset = (dragStartOffset + deltaY);
        if (scrollOffset < 0) scrollOffset = 0;
        if (scrollOffset >= loopDistance) scrollOffset -= loopDistance;
        scriptTrack.style.transform = 'translate3d(0, -' + scrollOffset.toFixed(2) + 'px, 0)';
    });

    window.addEventListener('mouseup', function() {
        isDragging = false;
    });

    // Touch support for mobile reading
    scriptViewport.addEventListener('touchstart', function(e) {
        if (e.touches && e.touches[0]) {
            isDragging = true;
            startY = e.touches[0].clientY;
            dragStartOffset = scrollOffset;
        }
    }, { passive: true });

    scriptViewport.addEventListener('touchmove', function(e) {
        if (!isDragging || !e.touches || !e.touches[0]) return;
        const deltaY = startY - e.touches[0].clientY;
        const loopDistance = getLoopDistance();
        scrollOffset = (dragStartOffset + deltaY);
        if (scrollOffset < 0) scrollOffset = 0;
        if (scrollOffset >= loopDistance) scrollOffset -= loopDistance;
        scriptTrack.style.transform = 'translate3d(0, -' + scrollOffset.toFixed(2) + 'px, 0)';
    }, { passive: true });

    scriptViewport.addEventListener('touchend', function() {
        isDragging = false;
    });

    // Trackpad / Mousewheel Scroll support
    scriptViewport.addEventListener('wheel', function(e) {
        e.preventDefault();
        const loopDistance = getLoopDistance();
        scrollOffset += e.deltaY * 0.6;
        if (scrollOffset < 0) scrollOffset = 0;
        if (scrollOffset >= loopDistance) scrollOffset -= loopDistance;
        scriptTrack.style.transform = 'translate3d(0, -' + scrollOffset.toFixed(2) + 'px, 0)';
    }, { passive: false });

    // Initialize on DOM Ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', loadYouTubeApi);
    } else {
        loadYouTubeApi();
    }
})();
</script>
