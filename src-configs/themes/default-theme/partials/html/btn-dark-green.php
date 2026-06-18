<?php 
$btn_label = $args['label'] ?? '';
$btn_url = $args['url'] ?? '#';
$btn_class = 'bg-[#1a747a] border-1 text-[#fff] leading-[18px] py-[15px] rounded-[30px] text-center';
$target = $args['target'] ?? '_self';

if(!empty($args['class'])) {
    $btn_class .= ' ' . $args['class'];
}
$btn_class = explode(' ', $btn_class);
$btn_class = array_unique($btn_class);
$btn_class = implode(' ', $btn_class);
?>
<a href="<?php echo $btn_url ?>" class="<?php echo $btn_class ?>" target="<?php echo $target ?>">
    <?php echo $btn_label ?>
</a>