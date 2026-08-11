<?php 
$btn_label = $args['label'] ?? '';
$btn_href = $args['href'] ?? '#';
$btn_target = $args['target'] ?? '_self';
$btn_class = 'bg-white px-10 py-4 text-xl font-medium shadow-[3px_3px_3px] hover:bg-gold hover:text-white hover:shadow-non';
if (!empty($args['class'])) {
    $btn_class .= ' ' . $args['class'];
}
?>
<a href="<?php echo $btn_href ?>" target="<?php echo $btn_target ?>" class="<?php echo $btn_class ?>">
    <?php echo $btn_label ?>
</a>