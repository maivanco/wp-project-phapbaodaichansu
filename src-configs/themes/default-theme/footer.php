    </main>

    <footer id="site-footer" class="p-[45px_35px]">
        <div class="inner bg-dark-blue rounded-[24px] p-[36px]">
            <div class="part-top grid grid-cols-2 mb-[40px]">
                <aside>
                    <a href="<?php echo home_url();?>">
                        <?php render_img_by_src(IMG_URL . 'logo-footer.png', [
                            'alt'   => 'brand'
                        ]); ?>
                </a>
                <p class="color-blue">Supporting Students, One Stay at a Time</p>
                </aside>
                <aside class="text-white">
                    <ul id="menu-footer-primary" class="">
                        <li>
                            <a href="#">About Us</a>
                            <ul class="sub-menu inline-items">
                                <li>
                                    <a href="#">Business</a>
                                </li>
                                <li>
                                    <a href="#">Locations</a>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Students</a></li>
                        <li><a href="#">Hosts</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>

                    <ul id="menu-footer-secondary" class="">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li>
                            <a href="#" class="flex items-center gap-[13px]">
                                Language
                                <span class="inline-block text-right w-[51px] h-[24px] rounded-[12px] bg-main color-text-body text-[12px] leading-[14px] p-[6px_10px]">EN</span>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="part-bot border-t-1 border-white flex justify-between color-blue pt-[28px]">
                <p class="">
                    Copyright &copy; <?php echo date('Y')?> Homestay Plus
                </p>
                <ul class="flex justify-center gap-[24px]">
                    <li><a href="#" class="w-[34px] h-[34px] rounded-full flex items-center justify-center bg-main color-text-body"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="w-[34px] h-[34px] rounded-full flex items-center justify-center bg-main color-text-body"><i class="fab fa-facebook"></i></a></li>
                </ul>
                <p>Designed & Developed by HereAgency</p>
            </div>
        </div>
    </footer>

</div><!--#div-->

<?php wp_footer(); ?>

</script>
</body>

</html>