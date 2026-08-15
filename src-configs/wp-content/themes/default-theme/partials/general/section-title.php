<?php
$class = $args['class'] ?? '';
$section_title = $args['section_title'] ?? '';
$subtitle = $args['subtitle'] ?? '';
$align = $args['align'] ?? 'center';
?>
<div class="section-title-wrapper text-<?php echo $align ?> <?php echo $class ?> mb-8">
  <?php if (!empty($subtitle)) : ?>
    <p class="text-[16px] font-semi-bold mb-[10px] font-title max-mobile:text-[12px]">
      <?= $subtitle ?>
    </p>
  <?php endif; ?>
  <?php if (!empty($section_title)) : ?>
    <h2 class="text-[48px] font-title max-mobile:text-[32px]">
      <?= $section_title ?>
    </h2>
  <?php endif; ?>
</div>