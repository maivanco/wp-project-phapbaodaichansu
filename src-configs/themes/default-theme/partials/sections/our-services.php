<?php
$subtitle = get_sub_field('subtitle');
$section_title = get_sub_field('section_title');
$services = get_sub_field('services');
?>
<section class="sec-our-services pt-[30px] pb-[30px]">
  <div class="container max-w-6xl mx-auto">

    <?php load_partial('general/section-title', [
      'section_title' => $section_title,
      'subtitle' => $subtitle,
    ])?>

    <?php if ($services): ?>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-[15px] items-stretch">
      <?php foreach ($services as $service): ?>
      <div class="group bg-[#2d3345] rounded-[16px] p-[26px] text-white flex flex-col justify-between transition hover:bg-blue hover:translate-y-[-30px]">
        <div>
          <h4 class="text-[36px] leading-[1] group-hover:text-dark-blue"><?php echo esc_html($service['title']); ?></h4>
          <div class="mt-[83px] mb-[34px]">
            <?php 
            if (!empty($service['thumbnail'])) {
                render_img_by_id($service['thumbnail'], 'large', [
                    'class' => 'relative z-10 w-full h-64 object-contain'
                ]);
            }
            ?>
          </div>
          <p class="text-sm leading-[24px] group-hover:text-dark-blue">
            <?php echo nl2br(esc_html($service['excerpt'])); ?>
          </p>
        </div>
        <div>
          <hr class="border-gray-600 my-[28px]">
          <a href="#" class="text-xl group-hover:text-dark-blue">+</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>