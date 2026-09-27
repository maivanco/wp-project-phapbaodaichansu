<?php
/**
 * Partial Section: YouTube Single Audio Banner (Tâm Thư Cảnh Sách)
 *
 * Designed for static banner YouTube videos with audio/voice recitation.
 * Features:
 *  - Fullscreen immersive Zen banner presentation
 *  - Real-time countdown timer (-mm:ss) and elapsed time
 *  - Dynamic multi-bar audio wave / volume equalizer effect
 *  - Interactive volume control with mute toggle & percentage feedback
 *  - Precision timeline scrubber with instant seek & hover tooltip
 *  - 10s skip backward / forward & replay controls
 *  - Seamless toggle between Zen Audio Banner Mode & Live YouTube Video Mode
 *  - Native HTML5 Fullscreen immersion mode
 *
 * Video: https://www.youtube.com/watch?v=hG_UsyRIPsM
 * Title: "Tâm thư cảnh sách"
 */

$video_id       = !empty($args['video_id']) ? $args['video_id'] : 'hG_UsyRIPsM';
$section_title  = !empty($args['section_title']) ? $args['section_title'] : __('Tâm Thư Cảnh Sách', 'pbdcs');
$quote_text     = !empty($args['quote_text']) ? $args['quote_text'] : __('"Pháp âm cảnh tỉnh người mê, phá tan mộng ảo vô thường, quay về nương tựa tánh giác thanh tịnh."', 'pbdcs');
$approx_duration = !empty($args['duration']) ? $args['duration'] : '10:18';

// High-resolution YouTube thumbnail banner
$banner_thumb_max = "https://img.youtube.com/vi/{$video_id}/maxresdefault.jpg";
$banner_thumb_hq  = "https://i.ytimg.com/vi/{$video_id}/hqdefault.jpg";
?>

<section id="tam-thu-canh-sach-section" 
         class="relative w-full min-h-[92vh] lg:min-h-screen py-16 md:py-20 px-4 flex flex-col justify-between items-center text-white overflow-hidden bg-[#141210] transition-all duration-700 relative"
         data-video-id="<?php echo esc_attr($video_id); ?>"
         aria-label="<?php echo esc_attr($section_title); ?>">
    <img class="absolute top-0 right-[-15%] opacity-[0.5]" src="<?php echo IMG_URL?>anh-thay-alone.jpg" alt="" />
    <!-- Background Ambient Layer: YouTube Banner Blur & Atmospheric Zen Glow -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden select-none">
        <!-- Blurred Banner Backdrop -->
        <img src="<?php echo esc_url($banner_thumb_max); ?>" 
             alt="<?php echo esc_attr($section_title); ?>" 
             onerror="this.onerror=null; this.src='<?php echo esc_url($banner_thumb_hq); ?>';"
             class="absolute inset-0 w-full h-full object-cover object-center filter blur-2xl scale-110 opacity-30 transform transition-transform duration-10000 ease-out" 
             id="yt-audio-backdrop-img" />

        <!-- Deep Dark Gradient Vignette for Readability & Focus -->
        <div class="absolute inset-0 bg-radial from-transparent via-[#141210]/60 to-[#141210]"></div>

        <!-- Spiritual Golden & Teal Light Orbs -->
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#c9922a]/15 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#1a747a]/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-[#c9922a]/10 rounded-full blur-[120px] pointer-events-none"></div>

        <!-- Subtle Zen Watermark Graphic Grid -->
        <div class="absolute inset-0 opacity-[0.03] bg-[radial-gradient(#c9922a_1px,transparent_1px)] [background-size:24px_24px]"></div>
    </div>

    <!-- Section Header (Top) -->
    <header class="relative z-10 w-full max-w-4xl mx-auto text-center mb-6 md:mb-8">
        <!-- Main Title -->
        <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-white mb-3 drop-shadow-md">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#fbf8f3] via-[#edd8b0] to-[#c9922a]">
                <?php echo esc_html($section_title); ?>
            </span>
        </h2>

        <!-- Gold Accent Line with Lotus Motif -->
        <div class="flex items-center justify-center gap-3 my-3">
            <span class="h-px w-16 bg-gradient-to-r from-transparent to-[#c9922a]"></span>
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" class="text-[#c9922a] flex-shrink-0 animate-pulse">
                <circle cx="12" cy="12" r="3" fill="currentColor"/>
                <circle cx="12" cy="12" r="7" stroke="currentColor" stroke-width="1" stroke-dasharray="2 2"/>
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="0.5"/>
            </svg>
            <span class="h-px w-16 bg-gradient-to-l from-transparent to-[#c9922a]"></span>
        </div>

        <!-- Monastic Orator Note / Excerpt -->
        <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed italic">
            <?php echo esc_html($quote_text); ?>
        </p>
    </header>

    <!-- Centerpiece: Static Banner Showcase & Dual Mode Player Frame -->
    <main class="relative z-10 w-full max-w-4xl mx-auto flex-1 flex flex-col justify-center my-auto">
        <div id="yt-banner-showcase-card" 
             class="group relative rounded-2xl md:rounded-3xl p-2.5 sm:p-3 bg-white/[0.04] border border-[#c9922a]/25 shadow-2xl backdrop-blur-md transition-all duration-500 hover:border-[#c9922a]/50">
            
            <!-- Video / Banner Visual Screen Container -->
            <div class="relative w-full aspect-video rounded-xl md:rounded-2xl overflow-hidden bg-black shadow-inner flex items-center justify-center">
                
                <!-- 1. The High-Res Static YouTube Banner Graphic -->
                <div id="yt-static-banner-visual" class="absolute inset-0 w-full h-full transition-opacity duration-500">
                    <img src="<?php echo esc_url($banner_thumb_max); ?>" 
                         alt="<?php echo esc_attr($section_title); ?>"
                         onerror="this.onerror=null; this.src='<?php echo esc_url($banner_thumb_hq); ?>';"
                         class="w-full h-full object-cover object-center transform transition-transform duration-700 group-hover:scale-102" />

                    <!-- Ambient Shadow overlay on top and bottom -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-black/60 pointer-events-none"></div>

                    <!-- Top Banner Badges Bar -->
                    <div class="absolute top-3 left-3 right-3 flex items-center justify-between z-20 pointer-events-auto">
                        <!-- Live Status Pill -->
                        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-black/60 border border-white/15 text-xs text-gray-200 backdrop-blur-md shadow-xs">
                            <span id="yt-audio-status-dot" class="w-2 h-2 rounded-full bg-gray-400"></span>
                            <span id="yt-audio-status-text" class="font-medium tracking-wide">Sẵn sàng phát</span>
                        </div>
                    </div>

                    <!-- Dynamic Central Equalizer Overlay (Pulsing over banner when playing) -->
                    <div id="yt-banner-equalizer-overlay" 
                         class="absolute inset-x-0 bottom-6 sm:bottom-8 flex flex-col items-center justify-center pointer-events-none z-20 px-4">
                        
                        <!-- Soundwave Visualizer Bars -->
                        <div class="flex items-end justify-center gap-1 sm:gap-1.5 h-10 sm:h-14 mb-2">
                            <?php for ($i = 1; $i <= 28; $i++): ?>
                                <span class="yt-eq-bar w-1 sm:w-1.5 rounded-full bg-gradient-to-t from-[#c9922a] via-[#f1c40f] to-[#1a747a] opacity-85 transition-all duration-150"
                                      data-bar-index="<?php echo $i; ?>"
                                      style="height: 4px; animation-delay: <?php echo ($i * 0.05); ?>s;"></span>
                            <?php endfor; ?>
                        </div>

                        <!-- Reciter Info in Banner -->
                        <div class="text-center">
                            <span class="text-xs uppercase tracking-[0.2em] text-[#e6b359] font-medium drop-shadow-sm">
                                TÂM THƯ CẢNH SÁCH CỦA TÔN SƯ GỬI ĐẾN ĐẠI CHÚNG
                            </span>
                        </div>
                    </div>

                    <!-- Big Central Play Trigger Overlay (Visible when paused or stopped) -->
                    <div id="yt-center-play-overlay" 
                         class="absolute inset-0 flex items-center justify-center z-30 transition-all duration-300">
                        <button id="yt-center-play-btn" 
                                type="button" 
                                class="w-18 h-18 sm:w-22 sm:h-22 rounded-full bg-gradient-to-br from-[#dfa637] to-[#b37d1e] text-[#141210] flex items-center justify-center shadow-[0_0_40px_rgba(201,146,42,0.65)] hover:shadow-[0_0_60px_rgba(201,146,42,0.9)] hover:scale-108 active:scale-95 transition-all duration-300 cursor-pointer group/btn"
                                aria-label="<?php esc_attr_e('Phát âm thanh', 'pbdcs'); ?>">
                            <i id="yt-center-play-icon" class="fa-solid fa-play text-2xl sm:text-3xl ml-1 group-hover/btn:scale-110 transition-transform duration-200"></i>
                        </button>
                    </div>
                </div>

                <!-- 2. The Live YouTube IFrame Player (Hidden by default, switchable on demand) -->
                <div id="yt-player-iframe-wrapper" class="absolute inset-0 w-full h-full opacity-0 pointer-events-none transition-opacity duration-500 z-10">
                    <div id="yt-single-audio-player" class="w-full h-full"></div>
                </div>

            </div>

            <!-- Sleek Control Dock: Timeline Scrubber, Countdown, Equalizer & Volume -->
            <div class="w-full mt-3 p-3 sm:p-4 rounded-xl bg-black/60 border border-white/10 backdrop-blur-lg flex flex-col gap-3">
                
                <!-- Timeline & Countdown Row -->
                <div class="w-full flex flex-col gap-1.5">
                    
                    <!-- Top Info Line: Elapsed Time & Countdown Time Badge -->
                    <div class="flex items-center justify-between text-xs text-gray-300 select-none">
                        <!-- Current Elapsed Time -->
                        <div class="flex items-center gap-1.5 font-medium">
                            <i class="fa-regular fa-clock text-[#c9922a] text-[11px]"></i>
                            <span id="yt-current-time-display">00:00</span>
                            <span class="text-gray-500">/</span>
                            <span id="yt-duration-display" class="text-gray-400"><?php echo esc_html($approx_duration); ?></span>
                        </div>

                        <!-- Dynamic Countdown Time Badge -->
                        <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md bg-[#c9922a]/15 border border-[#c9922a]/30 text-xs shadow-xs">
                            <span class="text-gray-300 text-[11px]"><?php _e('Còn lại:', 'pbdcs'); ?></span>
                            <span id="yt-countdown-display" class="font-bold text-[#f5d799] tracking-wider font-mono-none">
                                -<?php echo esc_html($approx_duration); ?>
                            </span>
                        </div>
                    </div>

                    <!-- Interactive Timeline Scrubber -->
                    <div class="relative w-full py-1.5 group/scrubber cursor-pointer" id="yt-progress-container">
                        <!-- Background Rail -->
                        <div class="w-full h-1.5 sm:h-2 rounded-full bg-white/15 overflow-hidden relative">
                            <!-- Buffered progress -->
                            <div id="yt-buffer-bar" class="absolute top-0 left-0 h-full bg-white/25 rounded-full transition-all duration-300" style="width: 0%;"></div>
                            <!-- Played progress -->
                            <div id="yt-played-bar" class="absolute top-0 left-0 h-full bg-gradient-to-r from-[#b37d1e] to-[#f1c40f] rounded-full transition-[width] duration-100" style="width: 0%;"></div>
                        </div>

                        <!-- Scrubber Knob / Thumb -->
                        <div id="yt-scrubber-thumb" 
                             class="absolute top-1/2 -translate-y-1/2 -translate-x-1/2 w-3.5 h-3.5 sm:w-4 sm:h-4 rounded-full bg-white border-2 border-[#c9922a] shadow-md opacity-0 group-hover/scrubber:opacity-100 transition-opacity duration-150 pointer-events-none"
                             style="left: 0%;"></div>

                        <!-- Hover Time Tooltip -->
                        <div id="yt-scrubber-tooltip" 
                             class="absolute -top-7 -translate-x-1/2 px-2 py-0.5 rounded bg-black/90 border border-[#c9922a]/40 text-[11px] text-[#f5d799] font-medium opacity-0 pointer-events-none transition-opacity duration-150 shadow-md">
                            00:00
                        </div>
                    </div>
                </div>

                <!-- Bottom Control Actions Row -->
                <div class="flex flex-wrap items-center justify-between gap-3 pt-1 border-t border-white/10">
                    
                    <!-- Left: Playback Controls (Skip -10s, Play/Pause, Skip +10s, Replay) -->
                    <div class="flex items-center gap-2 sm:gap-3">
                        <!-- Replay from beginning -->
                        <button id="yt-btn-replay" 
                                type="button" 
                                class="w-8 h-8 rounded-full bg-white/5 hover:bg-white/15 text-gray-300 hover:text-white flex items-center justify-center transition-colors cursor-pointer"
                                title="<?php esc_attr_e('Phát lại từ đầu', 'pbdcs'); ?>">
                            <i class="fa-solid fa-backward-step text-xs"></i>
                        </button>

                        <!-- Skip Backward 10s -->
                        <button id="yt-btn-backward-10" 
                                type="button" 
                                class="relative w-8 h-8 rounded-full bg-white/5 hover:bg-white/15 text-gray-300 hover:text-white flex items-center justify-center transition-colors cursor-pointer"
                                title="<?php esc_attr_e('Lùi 10 giây', 'pbdcs'); ?>">
                            <i class="fa-solid fa-rotate-left text-xs"></i>
                            <span class="absolute -bottom-1 -right-1 text-[8px] font-bold text-[#c9922a]">10</span>
                        </button>

                        <!-- Primary Play / Pause Toggle Button -->
                        <button id="yt-dock-play-btn" 
                                type="button" 
                                class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-[#c9922a] hover:bg-[#dfa637] text-[#141210] flex items-center justify-center shadow-lg transition-transform hover:scale-105 active:scale-95 cursor-pointer"
                                aria-label="<?php esc_attr_e('Phát/Tạm dừng', 'pbdcs'); ?>">
                            <i id="yt-dock-play-icon" class="fa-solid fa-play text-sm ml-0.5"></i>
                        </button>

                        <!-- Skip Forward 10s -->
                        <button id="yt-btn-forward-10" 
                                type="button" 
                                class="relative w-8 h-8 rounded-full bg-white/5 hover:bg-white/15 text-gray-300 hover:text-white flex items-center justify-center transition-colors cursor-pointer"
                                title="<?php esc_attr_e('Tua tới 10 giây', 'pbdcs'); ?>">
                            <i class="fa-solid fa-rotate-right text-xs"></i>
                            <span class="absolute -bottom-1 -right-1 text-[8px] font-bold text-[#c9922a]">10</span>
                        </button>
                    </div>

                    <!-- Center Mini Visualizer Wave (Indicates Volume & Audio Activity in Dock) -->
                    <div class="hidden md:flex items-center gap-1 px-3 py-1.5 rounded-full bg-white/5 border border-white/10">
                        <span class="text-[11px] text-gray-400 mr-1.5"><?php _e('Âm thanh', 'pbdcs'); ?></span>
                        <div class="flex items-end gap-1 h-4">
                            <span class="yt-dock-wave-bar w-1 bg-[#c9922a] rounded-full" style="height: 4px;"></span>
                            <span class="yt-dock-wave-bar w-1 bg-[#c9922a] rounded-full" style="height: 4px;"></span>
                            <span class="yt-dock-wave-bar w-1 bg-[#c9922a] rounded-full" style="height: 4px;"></span>
                            <span class="yt-dock-wave-bar w-1 bg-[#c9922a] rounded-full" style="height: 4px;"></span>
                            <span class="yt-dock-wave-bar w-1 bg-[#c9922a] rounded-full" style="height: 4px;"></span>
                        </div>
                    </div>

                    <!-- Right: Volume Effect & Control (Mute Toggle + Range Slider + Percentage) -->
                    <div class="flex items-center gap-2">
                        <!-- Mute / Unmute Button -->
                        <button id="yt-btn-mute" 
                                type="button" 
                                class="w-8 h-8 rounded-full bg-white/5 hover:bg-white/15 text-gray-300 hover:text-white flex items-center justify-center transition-colors cursor-pointer"
                                title="<?php esc_attr_e('Tắt/Bật tiếng', 'pbdcs'); ?>">
                            <i id="yt-mute-icon" class="fa-solid fa-volume-high text-xs text-[#c9922a]"></i>
                        </button>

                        <!-- Volume Slider -->
                        <div class="relative flex items-center w-20 sm:w-28">
                            <input id="yt-volume-slider" 
                                   type="range" 
                                   min="0" 
                                   max="100" 
                                   value="85" 
                                   step="1"
                                   class="w-full h-1.5 bg-white/20 rounded-lg appearance-none cursor-pointer accent-[#c9922a] focus:outline-none"
                                   aria-label="<?php esc_attr_e('Điều chỉnh âm lượng', 'pbdcs'); ?>" />
                        </div>

                        <!-- Volume Percentage Display -->
                        <span id="yt-volume-percent-label" class="text-xs text-gray-300 font-medium w-8 text-right select-none">
                            85%
                        </span>
                    </div>

                </div>

            </div>

        </div>
    </main>

    <!-- Bottom Buddhist Verse / Footer Notice -->
    <footer class="relative z-10 w-full max-w-3xl mx-auto text-center mt-6 select-none">
        <p class="text-xs text-gray-400">
            <?php _e('Tâm thư cảnh sách của Tôn Sư gửi đến đại chúng', 'pbdcs'); ?>
        </p>
    </footer>

</section>

<!-- Scoped Styling for Dynamic Audio Visualizer & Keyframes -->
<style>
    /* Custom Soundwave Equalizer Animation */
    @keyframes yt-eq-pulse {
        0%, 100% {
            height: 4px;
            opacity: 0.6;
        }
        50% {
            height: 38px;
            opacity: 1;
        }
    }

    @keyframes yt-dock-pulse {
        0%, 100% {
            height: 4px;
        }
        50% {
            height: 16px;
        }
    }

    .yt-eq-playing .yt-eq-bar {
        animation: yt-eq-pulse 1.2s ease-in-out infinite alternate;
    }

    .yt-eq-playing .yt-dock-wave-bar {
        animation: yt-dock-pulse 0.9s ease-in-out infinite alternate;
    }

    /* Staggered animation delays for visualizer bars */
    .yt-eq-playing .yt-eq-bar:nth-child(2n) { animation-duration: 0.8s; }
    .yt-eq-playing .yt-eq-bar:nth-child(3n) { animation-duration: 1.1s; }
    .yt-eq-playing .yt-eq-bar:nth-child(5n) { animation-duration: 1.4s; }
    .yt-eq-playing .yt-eq-bar:nth-child(7n) { animation-duration: 0.95s; }

    .yt-eq-playing .yt-dock-wave-bar:nth-child(1) { animation-delay: 0.1s; }
    .yt-eq-playing .yt-dock-wave-bar:nth-child(2) { animation-delay: 0.3s; }
    .yt-eq-playing .yt-dock-wave-bar:nth-child(3) { animation-delay: 0.2s; }
    .yt-eq-playing .yt-dock-wave-bar:nth-child(4) { animation-delay: 0.4s; }
    .yt-eq-playing .yt-dock-wave-bar:nth-child(5) { animation-delay: 0.15s; }

    /* Custom range input styling */
    #yt-volume-slider::-webkit-slider-thumb {
        appearance: none;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #c9922a;
        box-shadow: 0 0 6px rgba(201, 146, 42, 0.8);
        cursor: pointer;
        transition: transform 0.15s ease;
    }
    #yt-volume-slider::-webkit-slider-thumb:hover {
        transform: scale(1.25);
    }
    #yt-volume-slider::-moz-range-thumb {
        width: 12px;
        height: 12px;
        border: none;
        border-radius: 50%;
        background: #c9922a;
        box-shadow: 0 0 6px rgba(201, 146, 42, 0.8);
        cursor: pointer;
    }
</style>

<!-- YouTube IFrame API Controller Script -->
<script>
(function() {
    'use strict';

    const section = document.getElementById('tam-thu-canh-sach-section');
    if (!section) return;

    const videoId = section.getAttribute('data-video-id') || 'hG_UsyRIPsM';

    // UI Elements
    const centerPlayOverlay = document.getElementById('yt-center-play-overlay');
    const centerPlayBtn     = document.getElementById('yt-center-play-btn');
    const centerPlayIcon    = document.getElementById('yt-center-play-icon');
    const dockPlayBtn       = document.getElementById('yt-dock-play-btn');
    const dockPlayIcon      = document.getElementById('yt-dock-play-icon');
    
    const statusDot         = document.getElementById('yt-audio-status-dot');
    const statusText        = document.getElementById('yt-audio-status-text');
    const countdownDisplay  = document.getElementById('yt-countdown-display');
    const currentTimeDisplay= document.getElementById('yt-current-time-display');
    const durationDisplay   = document.getElementById('yt-duration-display');
    
    const progressContainer = document.getElementById('yt-progress-container');
    const playedBar         = document.getElementById('yt-played-bar');
    const bufferBar         = document.getElementById('yt-buffer-bar');
    const scrubberThumb     = document.getElementById('yt-scrubber-thumb');
    const scrubberTooltip   = document.getElementById('yt-scrubber-tooltip');
    
    const btnReplay         = document.getElementById('yt-btn-replay');
    const btnBackward10     = document.getElementById('yt-btn-backward-10');
    const btnForward10      = document.getElementById('yt-btn-forward-10');
    
    const btnMute           = document.getElementById('yt-btn-mute');
    const muteIcon          = document.getElementById('yt-mute-icon');
    const volumeSlider      = document.getElementById('yt-volume-slider');
    const volumePercentLabel= document.getElementById('yt-volume-percent-label');
    
    const toggleVideoLabel  = document.getElementById('yt-video-toggle-label');
    const staticBannerView  = document.getElementById('yt-static-banner-visual');
    const videoIframeWrapper= document.getElementById('yt-player-iframe-wrapper');

    let player = null;
    let isPlayerReady = false;
    let isPlaying = false;
    let isVideoMode = false;
    let progressTimer = null;
    let cachedDuration = 618; // approx 10:18 fallback until player loads
    let previousVolume = 85;

    // Helper: Format seconds to mm:ss
    function formatTime(totalSec) {
        if (isNaN(totalSec) || totalSec < 0) totalSec = 0;
        const mins = Math.floor(totalSec / 60);
        const secs = Math.floor(totalSec % 60);
        return (mins < 10 ? '0' : '') + mins + ':' + (secs < 10 ? '0' : '') + secs;
    }

    // Helper: Format countdown as -mm:ss
    function formatCountdown(remainingSec) {
        if (isNaN(remainingSec) || remainingSec <= 0) return '00:00';
        return '-' + formatTime(remainingSec);
    }

    // Update Visualizer Wave active state
    function setVisualizerState(active) {
        if (active) {
            section.classList.add('yt-eq-playing');
        } else {
            section.classList.remove('yt-eq-playing');
        }
    }

    // Update Volume Icon & label
    function updateVolumeUI(volume, isMuted) {
        if (isMuted || volume === 0) {
            muteIcon.className = 'fa-solid fa-volume-xmark text-xs text-red-400';
            volumeSlider.value = 0;
            volumePercentLabel.textContent = '0%';
        } else {
            volumeSlider.value = volume;
            volumePercentLabel.textContent = volume + '%';
            if (volume < 50) {
                muteIcon.className = 'fa-solid fa-volume-low text-xs text-[#c9922a]';
            } else {
                muteIcon.className = 'fa-solid fa-volume-high text-xs text-[#c9922a]';
            }
        }
    }

    // Update Time & Scrubber display
    function updatePlaybackProgress() {
        if (!player || !isPlayerReady) return;

        try {
            const currentTime = player.getCurrentTime() || 0;
            const duration = player.getDuration() || cachedDuration;
            if (duration > 0) cachedDuration = duration;

            const remaining = Math.max(0, duration - currentTime);
            const percent = duration > 0 ? (currentTime / duration) * 100 : 0;

            // Update text elements
            currentTimeDisplay.textContent = formatTime(currentTime);
            durationDisplay.textContent = formatTime(duration);
            countdownDisplay.textContent = formatCountdown(remaining);

            // Update progress bars
            playedBar.style.width = percent + '%';
            scrubberThumb.style.left = percent + '%';

            // Loaded buffer progress
            const loadedFraction = player.getVideoLoadedFraction ? player.getVideoLoadedFraction() : 0;
            bufferBar.style.width = (loadedFraction * 100) + '%';
        } catch (e) {
            console.warn('Error updating progress:', e);
        }
    }

    function startProgressLoop() {
        stopProgressLoop();
        updatePlaybackProgress();
        progressTimer = setInterval(updatePlaybackProgress, 250);
    }

    function stopProgressLoop() {
        if (progressTimer) {
            clearInterval(progressTimer);
            progressTimer = null;
        }
    }

    // Toggle Play / Pause
    function togglePlay() {
        if (!player || !isPlayerReady) return;

        if (isPlaying) {
            player.pauseVideo();
        } else {
            player.playVideo();
        }
    }

    // Seek player to target seconds
    function seekTo(seconds) {
        if (!player || !isPlayerReady) return;
        player.seekTo(seconds, true);
        updatePlaybackProgress();
    }

    // Initialize YouTube IFrame Player
    function initYTPlayer() {
        player = new YT.Player('yt-single-audio-player', {
            videoId: videoId,
            playerVars: {
                autoplay: 0,
                controls: 1,
                playsinline: 1,
                rel: 0,
                modestbranding: 1,
                iv_load_policy: 3
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    function onPlayerReady(event) {
        isPlayerReady = true;
        const dur = player.getDuration();
        if (dur > 0) {
            cachedDuration = dur;
            durationDisplay.textContent = formatTime(dur);
            countdownDisplay.textContent = formatCountdown(dur);
        }

        // Apply initial volume
        player.setVolume(85);
        updateVolumeUI(85, false);

        statusDot.className = 'w-2 h-2 rounded-full bg-emerald-400 animate-pulse';
        statusText.textContent = 'Sẵn sàng';
    }

    function onPlayerStateChange(event) {
        // YT.PlayerState: -1 (unstarted), 0 (ended), 1 (playing), 2 (paused), 3 (buffering), 5 (video cued)
        if (event.data === YT.PlayerState.PLAYING) {
            isPlaying = true;
            centerPlayOverlay.classList.add('opacity-0', 'pointer-events-none');
            dockPlayIcon.className = 'fa-solid fa-pause text-sm';
            statusDot.className = 'w-2 h-2 rounded-full bg-[#c9922a] animate-ping';
            statusText.textContent = 'Đang phát âm thanh';
            setVisualizerState(true);
            startProgressLoop();
        } else if (event.data === YT.PlayerState.PAUSED) {
            isPlaying = false;
            centerPlayOverlay.classList.remove('opacity-0', 'pointer-events-none');
            centerPlayIcon.className = 'fa-solid fa-play text-2xl sm:text-3xl ml-1';
            dockPlayIcon.className = 'fa-solid fa-play text-sm ml-0.5';
            statusDot.className = 'w-2 h-2 rounded-full bg-amber-400';
            statusText.textContent = 'Tạm dừng';
            setVisualizerState(false);
            stopProgressLoop();
        } else if (event.data === YT.PlayerState.BUFFERING) {
            statusDot.className = 'w-2 h-2 rounded-full bg-blue-400 animate-pulse';
            statusText.textContent = 'Đang tải...';
        } else if (event.data === YT.PlayerState.ENDED) {
            isPlaying = false;
            centerPlayOverlay.classList.remove('opacity-0', 'pointer-events-none');
            centerPlayIcon.className = 'fa-solid fa-rotate-right text-2xl sm:text-3xl';
            dockPlayIcon.className = 'fa-solid fa-rotate-right text-sm';
            statusDot.className = 'w-2 h-2 rounded-full bg-gray-400';
            statusText.textContent = 'Đã hoàn thành';
            setVisualizerState(false);
            stopProgressLoop();
            playedBar.style.width = '100%';
            countdownDisplay.textContent = '00:00';
        }
    }

    // Load YouTube API script asynchronously if needed
    function loadYTApi() {
        if (window.YT && window.YT.Player) {
            initYTPlayer();
        } else {
            const existingScript = document.querySelector('script[src*="youtube.com/iframe_api"]');
            if (!existingScript) {
                const tag = document.createElement('script');
                tag.src = 'https://www.youtube.com/iframe_api';
                const firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            }
            
            const prevOnYouTubeIframeAPIReady = window.onYouTubeIframeAPIReady;
            window.onYouTubeIframeAPIReady = function() {
                if (typeof prevOnYouTubeIframeAPIReady === 'function') {
                    prevOnYouTubeIframeAPIReady();
                }
                initYTPlayer();
            };
        }
    }

    // Event Bindings
    centerPlayBtn.addEventListener('click', togglePlay);
    dockPlayBtn.addEventListener('click', togglePlay);

    // Skip controls
    btnReplay.addEventListener('click', function() {
        seekTo(0);
        if (!isPlaying) togglePlay();
    });

    btnBackward10.addEventListener('click', function() {
        if (!player || !isPlayerReady) return;
        const cur = player.getCurrentTime() || 0;
        seekTo(Math.max(0, cur - 10));
    });

    btnForward10.addEventListener('click', function() {
        if (!player || !isPlayerReady) return;
        const cur = player.getCurrentTime() || 0;
        const dur = player.getDuration() || cachedDuration;
        seekTo(Math.min(dur, cur + 10));
    });

    // Scrubber click & drag seek
    let isScrubbing = false;

    function handleScrubberAction(e) {
        const rect = progressContainer.getBoundingClientRect();
        const clientX = e.clientX || (e.touches && e.touches[0] ? e.touches[0].clientX : 0);
        const clickX = Math.max(0, Math.min(clientX - rect.left, rect.width));
        const fraction = clickX / rect.width;
        const targetSec = fraction * cachedDuration;
        seekTo(targetSec);
    }

    progressContainer.addEventListener('click', handleScrubberAction);

    progressContainer.addEventListener('mousemove', function(e) {
        const rect = progressContainer.getBoundingClientRect();
        const hoverX = Math.max(0, Math.min(e.clientX - rect.left, rect.width));
        const fraction = hoverX / rect.width;
        const hoverSec = fraction * cachedDuration;

        scrubberTooltip.textContent = formatTime(hoverSec);
        scrubberTooltip.style.left = (fraction * 100) + '%';
        scrubberTooltip.style.opacity = '1';
    });

    progressContainer.addEventListener('mouseleave', function() {
        scrubberTooltip.style.opacity = '0';
    });

    // Volume Slider & Mute
    volumeSlider.addEventListener('input', function() {
        const val = parseInt(this.value, 10);
        if (!player || !isPlayerReady) return;

        if (val === 0) {
            player.mute();
            updateVolumeUI(0, true);
        } else {
            if (player.isMuted()) player.unMute();
            player.setVolume(val);
            previousVolume = val;
            updateVolumeUI(val, false);
        }
    });

    btnMute.addEventListener('click', function() {
        if (!player || !isPlayerReady) return;

        if (player.isMuted()) {
            player.unMute();
            const restoreVol = previousVolume > 0 ? previousVolume : 80;
            player.setVolume(restoreVol);
            updateVolumeUI(restoreVol, false);
        } else {
            previousVolume = player.getVolume();
            player.mute();
            updateVolumeUI(0, true);
        }
    });

    // Initialize once DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', loadYTApi);
    } else {
        loadYTApi();
    }
})();
</script>
