<?php
$class = $args['class'] ?? '';
$section_title = $args['section_title'] ?? '';
$subtitle = $args['subtitle'] ?? '';
$align = $args['align'] ?? 'center';
?>
<div class="section-title-wrapper text-<?php echo $align ?> <?php echo $class ?>">
  <?php if (!empty($subtitle)) : ?>
    <h4 class="text-[16px] font-semi-bold mb-[10px]">
      <?= $subtitle ?>
    </h4>
  <?php endif; ?>
  <?php if (!empty($section_title)) : ?>
    <h3 class="text-[48px] leading-[68px] text-gradient p-4">
      <?= $section_title ?>
    </h3>
  <?php endif; ?>
</div>