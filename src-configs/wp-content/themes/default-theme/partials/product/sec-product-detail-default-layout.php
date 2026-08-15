<?php 
$product = $args['product'];
$pdf_preview_link = get_field('pdf_preview', $product->get_id());

?>
<section class="product-info-top">
    <div class="container product after:content-[''] after:block after:clear-both">
        <?php woocommerce_show_product_images(); ?>
        <aside class="product-info float-right w-[52%] pl-8 max-mobile:w-full max-mobile:pl-0">
            <?php woocommerce_template_single_title(); ?>

            <div class="my-4 py-6 px-8 bg-cream2 rounded-2xl wp-editor">
                <?php woocommerce_template_single_excerpt(); ?>
            </div>

            <div class="py-2 text-2xl">
                <?php woocommerce_template_single_price(); ?>
            </div>
            <?php woocommerce_template_single_add_to_cart(); ?>
            <?php 
            if ($pdf_preview_link) {
                $btn_label = __('Đọc thử sách', 'pbdcs');
                echo do_shortcode('[3d-flip-book mode="link-lightbox" classes="inline-block,bg-gold,hover:bg-blue-700,text-white,font-bold,py-2,px-4,rounded" pdf="' . $pdf_preview_link . '"]' . $btn_label . '[/3d-flip-book]');
            }
            ?>
        </aside>
    </div>
</section>

<section class="product-info-bottom tab py-4">
    <div class="product container">
        <div class="woocommerce-tabs">
            <ul class="tabs wc-tabs" role="tablist">
                <li role="presentation" class="description_tab active" id="tab-title-description">
                    <a href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="true" tabindex="0">
                        Mô tả					
                    </a>
                </li>
            </ul>

            <div class="entry-content wp-editor">
                <?php 
                    echo apply_filters('woocommerce_short_description', $product->get_description());
                ?>
            </div>
        </div>
    </div>
</section>