<?php
$subtitle = get_sub_field('subtitle');
$description = get_sub_field('description');
?>
<section class="sec-our-mission">
  <div class="container max-w-6xl mx-auto text-center relative">

    <!-- Mission Section -->
    <div class="grid grid-cols-2 gap-8 text-left items-start">
      <div class="section-title-wrapper pb-[60px]">
        <?php if ($subtitle): ?>
        <h4 class="text-[16px]">
          <?php echo esc_html($subtitle); ?>
        </h4>
        <?php endif; ?>
      </div>
      <div>
        <?php if ($description): ?>
        <div class="text-2xl font-light">
          <?php echo $description; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>