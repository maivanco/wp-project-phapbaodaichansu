<?php 
$btn_label = $args['label'] ?? '';
$btn_href = $args['href'] ?? '#';
$btn_class = 'bg-[#1a747a] border-1 text-[#fff] leading-[18px] py-[15px] rounded-[30px] text-center';
$target = $args['target'] ?? '_self';
$custom_attrs = $args['custom_attrs'] ?? [];

$custom_attr_str = '';

if (!empty($custom_attrs)) {
    foreach($custom_attrs as $attr => $value){
        $custom_attr_str .= ' ' . $attr . '="' . $value . '"';
    }
}

if(!empty($args['class'])) {
    $btn_class .= ' ' . $args['class'];
}

$btn_class = explode(' ', $btn_class);
$btn_class = array_unique($btn_class);
$btn_class = implode(' ', $btn_class);
?>
<a href="<?php echo $btn_href ?>" class="<?php echo $btn_class ?>" target="<?php echo $target ?>" <?php echo $custom_attr_str ?>>
    <?php echo $btn_label ?>
</a>