<!doctype html>
<html <?php language_attributes(); ?>>

<head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&family=Imperial+Script&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">


        <header class="top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/95">
          <nav class="container">
            <div class="flex items-center justify-between h-20 max-mobile:h-[60px]">
              <a class="block text-[48px] max-tablet:text-[36px] max-mobile:text-[32px] font-handwriting text-gradient pr-3" href="<?php echo home_url();?>" data-discover="true">
                <!-- <img src="<?php echo IMG_URL . '/logo-phap-bao-dai-chan-su.jpg'?>" alt="logo Pháp Bảo Đại Chân Sư" width="1456" height="720"> -->
                Pháp Bảo Đại Chân Sư
              </a>
              <div class="flex items-center gap-4 md:gap-10">
                <div class="hidden md:flex items-center gap-10">
                  <a class="text-sm font-medium text-warmGray-600 hover:text-charcoal transition-colors duration-200 uppercase tracking-wider" href="/" data-discover="true">Trang chủ</a>
                  <a class="text-sm font-medium text-warmGray-600 hover:text-charcoal transition-colors duration-200 uppercase tracking-wider" href="/#about" data-discover="true">Giới thiệu</a>
                  <a class="text-sm font-medium text-warmGray-600 hover:text-charcoal transition-colors duration-200 uppercase tracking-wider" href="/#books" data-discover="true">Đặt sách</a>
                </div>
                <button class="toggle-cart relative p-2 text-charcoal hover:text-warmGray-600 transition-colors duration-200" aria-label="Giỏ hàng">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
                  <span class="cart-count absolute top-0 right-0 inline-flex items-center justify-center w-5 h-5 text-[10px] font-bold text-white bg-red-500 rounded-full border-2 border-white -mt-1 -mr-1">
                      <?php echo class_exists('WooCommerce') && is_object(WC()->cart) ? WC()->cart->get_cart_contents_count() : 0; ?>
                  </span>
                </button>
                <button class="md:hidden p-2 text-charcoal" aria-label="Toggle menu">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu w-6 h-6"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
                </button>
              </div>
            </div>
          </nav>
        </header>
        <main id="page-body">
