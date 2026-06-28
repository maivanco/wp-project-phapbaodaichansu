<div id="cart-popup-overlay" class="fixed inset-0 bg-black/50 hidden z-[59] transition-opacity duration-300 opacity-0"></div>
<div id="cart-popup" class="fixed right-0 top-0 h-full w-full sm:w-[400px] bg-white z-[60] transform translate-x-full transition-transform duration-300 shadow-2xl flex flex-col">
    <div class="flex items-center justify-between p-4 border-b border-gray-200">
        <h2 class="text-lg font-bold">Giỏ hàng của bạn</h2>
        <button id="close-cart-popup" class="p-2 text-gray-500 hover:text-black">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
    </div>
    <div class="flex-1 overflow-y-auto p-4">
        <?php
        if ( class_exists( 'WooCommerce' ) ) {
            the_widget( 'WC_Widget_Cart', 'title=' );
        } else {
            echo '<p>WooCommerce is not active.</p>';
        }
        ?>
    </div>
</div>
