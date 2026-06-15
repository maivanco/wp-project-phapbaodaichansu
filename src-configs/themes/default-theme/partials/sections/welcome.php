<?php
$subtitle = get_sub_field('subtitle');
$description = get_sub_field('description');
?>
<section class="sec-welcome">
  <div class="container max-w-6xl mx-auto text-center relative">

    <?php if ($subtitle): ?>
    <div class="section-title-wrapper pt-[110px] pb-[60px]">
      <h4 class="text-[16px]">
        <?php echo esc_html($subtitle); ?>
      </h4>
    </div>
    <?php endif; ?>
    
    <!-- Content -->
    <div class="relative z-10 pt-[131px] pb-[127px]">
      <!-- Background Shape -->
      <?php render_img_by_src(IMG_URL . 'bg-welcome.svg', [
        'class' => 'absolute -z-10 top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] w-[332px] h-[368px]',
        'alt'   => 'bg-welcome',
        'width' => '332',
        'height' => '368'
      ]); ?>

      <?php if ($description): ?>
      <h3 class="text-[56px] leading-[68px] font-light">
        <?php echo nl2br(esc_html($description)); ?>
      </h3>
      <?php endif; ?>
    </div>

  </div>
</section>