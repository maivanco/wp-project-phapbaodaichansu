<?php 
$btn_label = $args['label'] ?? '';
$btn_url = $args['url'] ?? '#';
$btn_class = $args['class'] ?? 'bg-main leading-[18px] p-[15px] rounded-[4px] text-center';
?>
<a href="<?php echo $btn_url ?>" class="<?php echo $btn_class ?>">
    <?php echo $btn_label ?>
</a>