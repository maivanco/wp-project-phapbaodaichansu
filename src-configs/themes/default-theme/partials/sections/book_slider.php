<?php 
$slides = get_sub_field('product_slides');
if (empty($slides) ) {
    echo 'Please add at least 1 slide in the admin dashboard';
    return;
}
?>

<section class="sec-product-slider relative bg-repeat-x bg-cover animate-bg-slide"
    style="background-image: url('<?php echo IMG_URL . 'bg-carousel.webp';?>');">
    <?php 
    foreach($slides as $slide): 
        $img_info = $slide['banner_setup'];
        $product_id = $slide['linked_product'];
        $product = wc_get_product($product_id);
        $product_desc = $product->get_short_description();
    ?>

    <div class="slide-slick">
        <div class="container">
            <div class="min-h-[calc(100vh-80px)] grid grid-cols-2 gap-10 px-[15px] justify-items-center items-center
            max-mobile:min-h-auto max-mobile:grid-cols-1 max-mobile:gap-0 max-mobile:px-0 max-mobile:py-[30px]
            ">

                <div class="thumb <?php echo $img_info['image_wrapper_class'];?>">
                    <?php render_img_by_id($img_info['image'], 'large', [
                        'class' => 'max-mobile:max-h-[70vh] max-h-[80vh] w-auto rounded-lg ' . $img_info['image_class']
                    ]);?>
                </div>
                <div class="desc max-mobile:w-full">
                    <h2 class="text-3xl font-light uppercase mb-4 max-mobile:hidden">
                        <?php echo $product->get_title();?>
                    </h2>
                    <div class="wp-editor max-mobile:hidden">
                        <blockquote class="mb-4 py-4 px-6 relative !bg-[rgba(255,255,255,0.5)]">
                            <?php echo $product_desc;?>
                        </blockquote>
                    </div>
                    <?php load_partial('product/product-btn-group', [
                        'product_id' => $product_id,
                    ])?>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach;?>

</section>