<section class="sec-testimonials pt-[104px] pb-[65px]">
    <div class="container">
      <?php load_partial('general/section-title', [
        'subtitle' => 'KIND WORDS FROM OUR COMMUNITY',
        'align' => 'left'
        ]);?>
      <div class="text-[56px] leading-[68px] max-w-[789px] mb-[52px] font-light">
        As leaders in the Australian homestay sector, we prioritise professionalism, integrity, and a helpful, experienced team.
      </div>
      <?php load_partial('html/btn-primary', ['label' => 'More About Us', 'url' => '#'])?>
    </div>
    <ul class="testimonial-items mt-[68px] pl-[calc((100%-var(--container-width))/2+15px)]">
      <?php for($i=0; $i<4; $i++) {?>
      <li class="slick-slide">
        <div class="item-testimonial rounded-[12px] bg-main p-[39px_29px_86px_29px] max-w-[514px] mr-[15px]">
          <h4 class="text-[20px] text-teal">Lily Simone</h4>
          <p class="mt-[16px] mb-[36px]"><i class="fa fa-map-marker-alt"></i> Sydney</p>
          <div class="text-[14px] leading-[20px]">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt pellentesque nunc ac cursus. Mauris vulputate quis dolor nec hendrerit. Integer pharetra fermentum sagittis. Quisque consectetur posuere tortor sagittis feugiat.
          </div>
        </div>
      </li>
      <?php } ?>
    </ul>

    <div class="text-[180px] leading-[150px] font-semibold flex justify-between overflow-x-clip mt-[95px]">
      
      <div class="marquee-text flex w-[max-content] items-center gap-[64px]">
        Experience
          <?php render_img_by_src(IMG_URL . 'icon-01.png', [
          'alt'   => 'icon',
          'width' => '31',
          'height' => '31',
          'class' => ''
          ]);?>
        Culture
       
      </div>

    </div>

</section>