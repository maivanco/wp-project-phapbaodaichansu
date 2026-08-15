<?php 
$product_id = $args['product_id'] ?? 0;
$extra_classes = $args['extra_classes'] ?? '';
$button_style = $args['button_style'] ?? '';

$read_more_btn_style = 'bg-main text-white hover:bg-white hover:text-main';
$add_to_cart_btn_style = 'bg-white text-main hover:bg-main hover:text-white';
if ($button_style === 's2'){
    $read_more_btn_style = 'bg-[#0184b7] border-1 border-[#0184b7] text-white hover:bg-white hover:text-[#0184b7]';
    $add_to_cart_btn_style = 'bg-[#e73f5c] border-1 border-[#e73f5c] text-white hover:bg-white hover:text-[#e73f5c]';
}
?>
<div class="btns flex gap-4 mt-8 <?php echo $extra_classes?> 
max-mobile:mx-auto
max-mobile:[&>a]:w-full max-mobile:[&>a]:text-center">
    <a href="<?php echo get_permalink($product_id)?>" class="px-10 py-4 text-xl font-light
    hover:shadow-[3px_3px_3px_rgba(0,0,0,0.3)]
    max-tablet:text-sm max-tablet:px-4 max-tablet:py-4
    <?php echo $read_more_btn_style;?>">
        <?php _e('XEM THÊM', 'pbdcs');?>
    </a>
    <a href="#" data-product_id="<?php echo $product_id?>" data-quantity="1" class="
    button product_type_simple add_to_cart_button ajax_add_to_cart 
     px-10 py-4 text-xl font-light shadow-[3px_3px_3px_rgba(0,0,0,0.3)]
    hover:shadow-none
    max-tablet:text-sm max-tablet:px-4 max-tablet:py-4
    <?php echo $add_to_cart_btn_style;?>">
        <?php _e('ĐẶT SÁCH', 'pbdcs');?>
    </a>
</div>