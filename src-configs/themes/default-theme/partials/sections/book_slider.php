<?php 
$slides = get_sub_field('product_slides');
if (empty($slides) ) {
    echo 'Please add at least 1 slide in the admin dashboard';
    return;
}
?>

<section class="sec-product-slider max-w-[1920px] mx-auto">
    <?php foreach($slides as $slide): $img_info = $slide['banner_setup']?>

    <div class="slide-slick">
        <div class="grid grid-cols-[1fr_350px] px-[15px]">
            <div class="left pr-[15px] relative min-h-screen flex items-center
            after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-2/3 after:h-[1px] after:bg-gold
            ">
                <div class="banner-wrapper <?php echo $img_info['image_wrapper_class'];?>">
                    <?php render_img_by_id($img_info['image'], '1536x1536', ['class' => $img_info['image_class']]);?>
                </div>

                <?php load_partial('product/product-btn-group', [
                    'product_id' => $slide['linked_product'],
                    'extra_classes' => 'absolute bottom-[30px] left-[30px]'
                ])?>
            </div>
            <div class="right bg-cream2 py-8 md:py-12 lg:py-20 px-8 flex flex-col justify-center">
                <div class="content">
                    <h3 class="text-3xl font-medium mb-4">
                    <?php echo get_the_title($slide['linked_product']); ?>
                    </h3>
                </div>
                <?php echo get_the_post_thumbnail($slide['linked_product'], 'medium', ['class' => 'mt-10']); ?>
            </div>
        </div>
    </div>

    <?php endforeach;?>

</section>