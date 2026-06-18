<?php 
$btn_label = $args['label'] ?? '';
$btn_url = $args['url'] ?? '#';
$btn_class = 'bg-gradient text-white leading-[18px] p-[15px] rounded-[30px] text-center';
if (!empty($args['class'])) {
    $btn_class .= ' ' . $args['class'];
}
?>
<a href="<?php echo $btn_url ?>" class="<?php echo $btn_class ?>">
    <?php echo $btn_label ?>
</a>