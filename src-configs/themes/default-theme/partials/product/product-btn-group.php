<?php 
$product_id = $args['product_id'] ?? 0;
$extra_classes = $args['extra_classes'] ?? '';
?>
<div class="btns flex gap-4 mt-8 <?php echo $extra_classes?>">
    <a href="<?php echo get_permalink($product_id)?>" class="bg-gold text-white px-10 py-4 text-xl font-medium
    hover:bg-white hover:text-gold hover:shadow-[3px_3px_3px]
    ">
        <?php _e('Xem thêm', 'pbdcs');?>
    </a>
    <a href="#" data-product_id="<?php echo $product_id?>" data-quantity="1" class="
    button product_type_simple add_to_cart_button ajax_add_to_cart 
    bg-white px-10 py-4 text-xl font-medium shadow-[3px_3px_3px]
    hover:bg-gold hover:text-white hover:shadow-none
    ">
        <?php _e('Thêm vào giỏ', 'pbdcs');?>
    </a>
</div>