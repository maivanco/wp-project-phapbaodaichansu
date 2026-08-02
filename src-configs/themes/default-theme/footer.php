    </main>

    <footer id="site-footer" class="bg-black text-cream pt-16 pb-8">
      <div class="container">
        <ul class="grid lg:grid-cols-4 gap-10 mb-12">
          <li class="lg:col-span-1">
            <h4 class="font-title text-lg mb-6">PHÁP TẠNG</h4>
            <ul class="text-sm flex flex-col flex-wrap gap-5 mt-5">
              <li>Trụ sở: 764 Nguyễn Chí Thanh, Q.11, TPHCM.</li>
              <li>CN1: 11A Tôn Đức Thắng, Q.1, TPHCM.</li>
              <li>CN2: 240 Xã Đàn, Đống Đa, Hà Nội.</li>
              <li>Hotline: 0903268036</li>
            </ul>
          </li>

          <li>
            <h4 class="font-title text-lg mb-6">PHÁP BẢO</h4>
            <?php
            wp_nav_menu(array(
              'theme_location' => 'footer-1',
              'menu_id'        => 'footer-menu-1',
              'menu_class'     => 'text-sm flex flex-col flex-wrap gap-5',
              'container'      => false,
              'fallback_cb'    => false,
            ));
            ?>
          </li>

          <li>
            <h4 class="font-title text-lg mb-6">TRANG NGHIÊM TỔNG TRÌ NHIẾP KINH LUẬN</h4>
            <?php
            wp_nav_menu(array(
              'theme_location' => 'footer-2',
              'menu_id'        => 'footer-menu-2',
              'menu_class'     => 'text-sm flex flex-col flex-wrap gap-5 mb-6',
              'container'      => false,
              'fallback_cb'    => false,
            ));
            ?>
            
          </li>

          <li>
            <h4 class="font-title text-lg mb-6">THI KỆ</h4>
            <?php
            wp_nav_menu(array(
              'theme_location' => 'footer-3',
              'menu_id'        => 'footer-menu-3',
              'menu_class'     => 'text-sm flex flex-col flex-wrap gap-5',
              'container'      => false,
              'fallback_cb'    => false,
            ));
            ?>
          </li>
        </ul>

        <div class="border-t border-warmGray-800 pt-8">
          <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <p class="text-warmGray-500 text-sm">
              &copy; <?php echo date('Y')?> Pháp Bảo Đại Chân Sư.
            </p>
            
          </div>
        </div>
      </div>
    </footer>

</div><!--#div-->

<?php get_template_part('partials/cart-popup'); ?>
<?php wp_footer(); ?>

</script>
</body>

</html>