<?php
$subtitle = get_sub_field('subtitle');
$description = get_sub_field('description');
$why_us_items = get_sub_field('why_us_items');
?>
<section class="sec-why-us bg-dark-blue">
  <div class="container">
    <?php if ($subtitle): ?>
      <?php load_partial('general/section-title', [
        'subtitle' => $subtitle,
        'class' => 'text-white'
      ]);?>
    <?php endif; ?>

    <?php if ($description): ?>
    <div class="color-main text-[56px] leading-[68px] text-center max-w-[1148px] mx-auto mb-[149px]">
      <?php echo nl2br(esc_html($description)); ?>
    </div>
    <?php endif; ?>
  </div>
  
  <?php if ($why_us_items): ?>
  <ul class="why-us-items">
    <?php foreach ($why_us_items as $item): 
        $content = $item['content'];
        $thumbnail = $item['thumbnail'];
    ?>
      <li class="item-why-us flex items-end justify-end">
        <div class="cont flex flex-col gap-[48px] w-full max-w-[620px] pr-[105px] pb-[135px]">
          <?php 
          if (!empty($content['icon'])) {
              render_img_by_id($content['icon'], 'thumbnail', [
                  'width' => '56'
              ]);
          }
          ?>
          <?php if (!empty($content['title'])): ?>
            <h4 class="color-blue text-[56px] leading-[60px] text-left max-w-[420px]">
              <?php echo nl2br(esc_html($content['title'])); ?>
            </h4>
          <?php endif; ?>
          
          <?php if (!empty($content['description'])): ?>
            <div class="text-white">
              <?php echo nl2br(esc_html($content['description'])); ?>
            </div>
          <?php endif; ?>
          
          <hr class="border-white">
          
          <?php if (!empty($content['buttons'])): ?>
            <?php load_partial('html/group-buttons', ['buttons' => $content['buttons']]); ?>
          <?php endif; ?>
        </div>
        <div class="thumb w-[50%]">
          <?php 
          if (!empty($thumbnail)) {
              render_img_by_id($thumbnail, 'large', [
                  'class' => 'w-full rounded-[16px]'
              ]);
          }
          ?>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>
</section>
