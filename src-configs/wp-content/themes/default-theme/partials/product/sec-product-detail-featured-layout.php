<?php 
$product = $args['product'];
$product_desc = apply_filters('woocommerce_short_description', $product->get_description());
$product_gallery = $product->get_gallery_image_ids();

?>

<section id="featured-product" class="grid grid-cols-[56.25vh_1fr] max-mobile:grid-cols-1 relative overflow-hidden">

    <aside id="featured-video" class="relative max-mobile:w-full max-mobile:h-screen">
        <iframe width="100%" height="800" class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/gBWR9sAKsLo?si=xWDRs-MSL1CA7INJ&autoplay=1" title="NGỌC LỆ BI TÂM - QUÁN THẾ ÂM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </aside>

    <?php if($product_gallery): ?>
    <aside id="featured-product-slider" class="
    after:absolute after:z-10 after:inset-x-0 after:bottom-0 after:h-24 after:bg-gradient-to-t after:from-[#0d0a08]/60 after:to-transparent">
        <?php foreach($product_gallery as $slide_id): ?>
        <div class="slide">
            <?php 
            render_img_by_id($slide_id, 'large', [
                'class' => 'max-h-screen w-full',
            ]);
            ?>
        </div>
        <?php endforeach; ?>
        
    </aside>
    <?php endif; ?>
    
    <aside class="wysiwyg open bg-[rgba(13_10_8_/_100%)] max-w-[670px] px-6 absolute top-0 right-0 z-20
    before:absolute before:z-10 before:inset-y-0 before:left-[-128px] before:w-32 before:bg-gradient-to-r before:from-transparent before:to-[#0d0a08]
    max-tablet:max-w-full max-tablet:relative max-tablet:px-0 max-tablet:col-[1/-1]
    ">
        <button id="toggle-featured-product-content" type="button" class="absolute z-20 top-[100px] -left-[48px] cursor-pointer w-12 h-12 bg-[#e73f5c] text-white"><i class="fa-solid fa-chevron-right"></i></button>
        <div class="wrapper h-screen overflow-y-auto p-[50px_20px] text-justify
        max-tablet:h-auto max-tablet:overflow-visible
        ">
            <div class="scrolling text-white/70 leading-[1.9] text-sm xl:text-[0.9rem] font-light">
                <div class="flex items-center gap-3 mb-8 text-gold-gradient text-xs tracking-[0.3em] uppercase font-light">
                    <span class="block w-12 h-px bg-gradient-to-r from-[#c9922a] to-transparent"></span>
                    Pháp Bảo
                </div>
                <h1 class="font-serif text-4xl text-gold-gradient mb-2 font-handwriting pr-3">
                    <?php echo $product->get_name(); ?>
                </h1>
                <p class="text-white/40 text-sm tracking-widest uppercase mb-8 mt-3">Sách ảnh &amp; Lời huấn thị của Chân Sư Thích Long Viễn</p>
                <div class="flex items-center gap-3 mb-8">
                    <span class="block w-12 h-px bg-gradient-to-r from-[#c9922a] to-transparent"></span>
                    <svg width="16" height="16" viewBox="0 0 16 16" class="text-[#c9922a] flex-shrink-0">
                        <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                        <circle cx="8" cy="8" r="5" fill="none" stroke="currentColor" stroke-width="0.5"></circle>
                        <circle cx="8" cy="8" r="7.5" fill="none" stroke="currentColor" stroke-width="0.3" stroke-dasharray="2 2"></circle>
                    </svg>
                    <span class="block flex-1 h-px bg-gradient-to-l from-[#c9922a]/20 to-transparent"></span>
                </div>
                
                <?php echo $product_desc; ?>
                
            </div>
        </div>
    </aside>
    
</section>