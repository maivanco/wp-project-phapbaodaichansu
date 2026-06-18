    </main>

    <footer id="site-footer" class="bg-black text-cream pt-16 pb-8">
      <div class="container">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
          <div class="lg:col-span-1">

            <p>𝗣𝗵𝗮́𝗽 𝗧𝗮̣𝗻𝗴 - 𝗧𝗵𝘂̛𝗼̛̣𝗻𝗴 𝗣𝗵𝗮̂̉𝗺 𝗣𝗵𝗮̣̂𝘁 𝗚𝗶𝗮́𝗼</p>
            <p>Trụ sở: 764 Nguyễn Chí Thanh, Q.11, TPHCM.</p>
            <p>CN1: 11A Tôn Đức Thắng, Q.1, TPHCM.</p>
            <p>CN2: 240 Xã Đàn, Đống Đa, Hà Nội.</p>
            <p>Hotline: 0903268036</p>

            <div class="flex gap-4">
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center border border-warmGray-700 text-warmGray-400 hover:border-gold-500 hover:text-gold-500 transition-colors"
                aria-label="Facebook"
              >
                <Facebook class="w-4 h-4" />
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center border border-warmGray-700 text-warmGray-400 hover:border-gold-500 hover:text-gold-500 transition-colors"
                aria-label="Twitter"
              >
                <Twitter class="w-4 h-4" />
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center border border-warmGray-700 text-warmGray-400 hover:border-gold-500 hover:text-gold-500 transition-colors"
                aria-label="Instagram"
              >
                <Instagram class="w-4 h-4" />
              </a>
            </div>
          </div>

          <div>
            <h4 class="font-serif text-lg font-medium mb-6">Quick Links</h4>
            <nav class="space-y-3">
              {['Home', 'About Us', 'Our Books', 'Order', 'Events', 'Gift Cards'].map((link) => (
                <Link
                  key={link}
                  to={`/${link === 'Home' ? '' : `#${link.toLowerCase().replace(' ', '-')}`}`}
                  class="block text-warmGray-400 hover:text-gold-400 transition-colors"
                >
                  {link}
                </Link>
              ))}
            </nav>
          </div>

          <div>
            <h4 class="font-serif text-lg font-medium mb-6">Categories</h4>
            <nav class="space-y-3">
              {[
                'Fiction',
                'Non-Fiction',
                'Biography',
                "Children's Books",
                'Rare & Collectible',
                'Staff Picks',
              ].map((category) => (
                <a
                  key={category}
                  href="/#books"
                  class="block text-warmGray-400 hover:text-gold-400 transition-colors"
                >
                  {category}
                </a>
              ))}
            </nav>
          </div>

          <div>
            <h4 class="font-serif text-lg font-medium mb-6">Contact Us</h4>
            <div class="space-y-4">
              <div class="flex items-start gap-3">
                <MapPin class="w-5 h-5 text-gold-500 mt-0.5 flex-shrink-0" />
                <div>
                  <p class="text-warmGray-400">247 Literary Lane</p>
                  <p class="text-warmGray-400">Cambridge, MA 02138</p>
                </div>
              </div>
              <div class="flex items-center gap-3">
                <Phone class="w-5 h-5 text-gold-500 flex-shrink-0" />
                <p class="text-warmGray-400">(617) 555-READ</p>
              </div>
              <div class="flex items-center gap-3">
                <Mail class="w-5 h-5 text-gold-500 flex-shrink-0" />
                <p class="text-warmGray-400">hello@luminarybooks.com</p>
              </div>
              <div class="flex items-start gap-3">
                <Clock class="w-5 h-5 text-gold-500 mt-0.5 flex-shrink-0" />
                <div>
                  <p class="text-warmGray-400">Mon-Sat: 10am - 9pm</p>
                  <p class="text-warmGray-400">Sunday: 11am - 6pm</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="border-t border-warmGray-800 pt-8">
          <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <p class="text-warmGray-500 text-sm">
              &copy; {currentYear} Luminary Books. All rights reserved.
            </p>
            <nav class="flex gap-6">
              {['Privacy Policy', 'Terms of Service', 'Accessibility'].map((link) => (
                <a
                  key={link}
                  href="#"
                  class="text-sm text-warmGray-500 hover:text-warmGray-300 transition-colors"
                >
                  {link}
                </a>
              ))}
            </nav>
          </div>
        </div>
      </div>
    </footer>

</div><!--#div-->

<?php wp_footer(); ?>

</script>
</body>

</html>