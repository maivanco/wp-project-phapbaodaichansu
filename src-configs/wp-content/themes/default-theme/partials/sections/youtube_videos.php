<?php
/**
 * Partial Section: YouTube Videos (Diệu Pháp Âm Carousel)
 * Post Type: dieu-phap-am
 * Style: Light art background with leaves & continuous right-to-left marquee carousel
 * Brand colors: Gold #c9922a, Deep Teal #1a747a, Dark Neutral #2d2a26, Light Peach/Cream #fbf8f3
 */

$subtitle = $args['subtitle'] ?? get_sub_field('subtitle');
if (empty($subtitle)) {
    $subtitle = __('Pháp Âm Khai Thị', 'pbdcs');
}

$section_title = $args['section_title'] ?? get_sub_field('section_title');
if (empty($section_title)) {
    $section_title = __('Diệu Pháp Âm', 'pbdcs');
}

$description = $args['description'] ?? get_sub_field('description');
if (empty($description)) {
    $description = __('Những bài pháp giảng, khai thị chân thực và thi kệ vi diệu được Thầy trùng tuyên nhằm khai sáng tâm thức trên đạo lộ giác ngộ.', 'pbdcs');
}

// Query all dieu-phap-am posts
$videos_query = new WP_Query([
    'post_type'      => 'dieu-phap-am',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
]);

$posts_list = $videos_query->posts;
$total_posts = count($posts_list);

// Duplicate items if needed so marquee seamlessly loops with full density
$carousel_items = [];
if ($total_posts > 0) {
    $repeat_count = max(1, (int) ceil(6 / $total_posts));
    for ($i = 0; $i < $repeat_count; $i++) {
        foreach ($posts_list as $p) {
            $carousel_items[] = $p;
        }
    }
}
?>

<section class="sec-youtube-carousel relative bg-[#fbf8f3] bg-no-repeat bg-cover py-16 md:py-24 overflow-hidden"
         style="background-image: url('<?php echo IMG_URL . 'bg-carousel-02.avif'; ?>');">
    
    <!-- Subtle top & bottom lighting overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-[#faf8f5]/80 via-transparent to-[#faf8f5]/80 pointer-events-none"></div>
    <div class="absolute top-0 right-1/4 w-96 h-96 bg-[#c9922a]/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-[#1a747a]/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 w-full">
        <!-- Top Signature Section Title -->
        <div class="container mx-auto px-4 text-center max-w-3xl mb-12 md:mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#1a747a]/10 border border-[#1a747a]/25 text-[#1a747a] text-xs font-semibold uppercase tracking-[0.25em] mb-4 shadow-xs">
                <span class="w-2 h-2 rounded-full bg-[#1a747a] animate-pulse"></span>
                <span><?php echo esc_html($subtitle); ?></span>
            </div>

            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-[#2d2a26] mb-4">
                <span class="text-gold"><?php echo esc_html($section_title); ?></span>
            </h2>

            <div class="flex items-center justify-center gap-3 my-4">
                <span class="h-px w-16 bg-gradient-to-r from-transparent to-[#c9922a]"></span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="text-[#c9922a] flex-shrink-0">
                    <circle cx="12" cy="12" r="3" fill="currentColor"/>
                    <circle cx="12" cy="12" r="7" stroke="currentColor" stroke-width="1" stroke-dasharray="2 2"/>
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="0.5"/>
                </svg>
                <span class="h-px w-16 bg-gradient-to-l from-transparent to-[#c9922a]"></span>
            </div>

            <?php if (!empty($description)) : ?>
                <p class="text-sm md:text-base text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>
        </div>

        <?php if (!empty($carousel_items)) : ?>
            <!-- Full Items Continuous Marquee Carousel Container (Right to Left Floating) -->
            <div class="w-full relative py-4">
                <div id="youtube-marquee-slider" class="youtube-marquee-slick">
                    <?php 
                    $item_counter = 0;
                    foreach ($carousel_items as $post_obj) : 
                        $item_counter++;
                        $post_id = $post_obj->ID;
                        $video_id = get_field('youtube_video_id', $post_id);
                        $permalink = get_permalink($post_id);
                        $post_title = get_the_title($post_id);
                        $post_date = get_the_date('d/m/Y', $post_id);
                        
                        // Determine thumbnail URL
                        $thumb_url = '';
                        if (!empty($video_id)) {
                            $thumb_url = 'https://img.youtube.com/vi/' . esc_attr($video_id) . '/maxresdefault.jpg';
                        } elseif (has_post_thumbnail($post_id)) {
                            $thumb_url = get_the_post_thumbnail_url($post_id, 'large');
                        } else {
                            $thumb_url = IMG_URL . 'anh-thay-Thich-Long-Vien.jpg';
                        }
                    ?>
                        <div class="slide-marquee-item px-3 md:px-4 outline-none">
                            <div class="group/card bg-white/95 border border-[#c9922a]/20 hover:border-[#1a747a]/50 rounded-2xl p-5 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-full backdrop-blur-xs">
                                
                                <!-- Video Thumbnail & Play Trigger -->
                                <a href="<?php echo esc_url($permalink); ?>" 
                                class="relative overflow-hidden rounded-xl bg-black aspect-video mb-4 shadow-sm group/thumb">
                                    <img 
                                        src="<?php echo esc_url($thumb_url); ?>" 
                                        alt="<?php echo esc_attr($post_title); ?>"
                                        width="1280"
                                        height="720"
                                        loading="lazy"
                                        class="w-full h-full object-cover object-center transform transition-transform duration-500 group-hover/thumb:scale-105"
                                    />
                                </a>

                                <!-- Card Title -->
                                <h3 class="text-base sm:text-lg font-bold text-[#2d2a26] group-hover/card:text-[#1a747a] transition-colors duration-200 line-clamp-2 leading-snug mb-2">
                                    <a href="<?php echo esc_url($permalink); ?>">
                                        <?php echo esc_html($post_title); ?>
                                    </a>
                                </h3>

                                <!-- Read More Action Button Footer -->
                                <div class="pt-3 border-t border-gray-100 flex items-center justify-between gap-2">
                                    <a 
                                        href="<?php echo esc_url($permalink); ?>" 
                                        class="inline-flex items-center gap-1.5 text-xs font-semibold text-[#1a747a] hover:text-[#c9922a] transition-colors duration-200"
                                    >
                                        <span><?php _e('Nghe thi kệ', 'pbdcs'); ?></span>
                                        <svg class="w-3.5 h-3.5 transform transition-transform duration-200 group-hover/card:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                        </svg>
                                    </a>

                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
       
        <?php endif; ?>
    </div>
</section>