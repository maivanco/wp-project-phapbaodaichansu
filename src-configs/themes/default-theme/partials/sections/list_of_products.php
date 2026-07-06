<?php 
$subtitle = $args['subtitle'] ?? get_sub_field('subtitle');
$section_title = $args['section_title'] ?? get_sub_field('section_title');
$display_condition = $args['display_condition'] ?? get_sub_field('display_condition');
$current_product_id = $args['current_product_id'] ?? 0;
$product_args = [
    'status'     => 'publish',
    'limit'      => 100,
];

switch($display_condition) {
    case 'exclude_current_product':
        $product_args['exclude'] = [$current_product_id];
        break;
    case 'specific_products':
        $product_args['include'] = get_sub_field('selected_products') ?? [];
        break;
    case 'product_category':
        $product_args['product_category_id'] = get_sub_field('selected_product_category') ?? 0;
        break;
    default: // Get latest products
        break;
   
}
$products = wc_get_products( $product_args );
?>

<section class="sec-product-list py-24 bg-cream">
    <div class="lg-container">
        <?php load_partial('general/section-title', [
            'section_title' => $section_title,
            'subtitle' => $subtitle,
            'align' => 'left'
        ])?>

        <ul class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 lg:gap-6">
            <?php foreach($products as $product):?>
            <li class="group">
                <div class="relative overflow-hidden group/thumb bg-cream2 p-4">
                    <a href="<?php echo get_permalink($product->get_id()); ?>">
                    <?php echo $product->get_image('woocommerce_thumbnail', ['class' => 'w-full h-auto transition-transform duration-300 group-hover/thumb:scale-105']); ?>
                    </a>
                    <button 
                        type="button"
                        class="quick-view-btn bg-black cursor-pointer absolute z-20 bottom-0 left-0 w-full py-2 bg-primary/90 text-white text-sm font-medium translate-y-full transition-transform duration-300 group-hover/thumb:translate-y-0"
                        data-title="<?php echo htmlspecialchars($product->get_name()); ?>"
                        data-price="<?php echo htmlspecialchars(wc_price($product->get_price())); ?>"
                        data-img="<?php echo wp_get_attachment_image_url($product->get_image_id()); ?>"
                        data-url="<?php echo get_permalink($product->get_id());?>"
                        data-product_id="<?php echo $product->get_id();?>"
                    >
                        <?php _e('Xem nhanh','pbdcs') ?>
                    </button>
                </div>
                <div class="flex flex-col gap-4 py-4">
                    <p class="uppercase text-sm text-gray">
                        <?php echo $product->get_categories(); ?>
                    </p>
                    <h3 class="">
                        <?php echo $product->get_name(); ?>
                    </h3>
                    <div class="flex items-center justify-between">
                        <?php echo wc_price($product->get_price()); ?>
                    </div>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</section>

<!-- Quick View Modal -->
<div id="quickViewModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black/50 opacity-0 transition-opacity duration-300">
    <div class="bg-white rounded-lg p-6 max-w-3xl w-full mx-4 relative transform scale-95 transition-transform duration-300" id="quickViewContent">
        <button type="button" class="absolute top-4 right-4 cursor-pointer" id="closeQuickView">
            <i class="fa-solid fa-xmark text-2xl"></i>
        </button>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="modal-img-container flex justify-center items-center bg-cream rounded-md p-4">
                <img id="qvImage" src="" alt="Product Image" class="max-w-full max-h-[60vh] object-contain drop-shadow-md" />
            </div>
            <div class="flex flex-col justify-center">
                <h2 id="qvTitle" class="text-2xl font-bold mb-4 font-serif"></h2>
                <div id="qvPrice" class="text-xl text-primary font-semibold mb-6"></div>
                
                <div class="btns flex gap-4 mt-8">
                    <a id="qvReadMore" href="#" class="bg-gold text-white px-6 py-2 text-sm font-medium
                    hover:bg-white hover:text-gold hover:shadow-[3px_3px_3px]
                    ">
                        <?php _e('Xem thêm', 'pbdcs');?>
                    </a>
                    <a id="qvAddToCart" href="#" data-product_id="0" data-quantity="1" class="
                    button product_type_simple add_to_cart_button ajax_add_to_cart 
                    bg-white px-6 py-2 text-sm font-medium shadow-[3px_3px_3px]
                    hover:bg-gold hover:text-white hover:shadow-none
                    ">
                        <?php _e('Thêm vào giỏ', 'pbdcs');?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('quickViewModal');
    const modalContent = document.getElementById('quickViewContent');
    const closeBtn = document.getElementById('closeQuickView');
    const qvImage = document.getElementById('qvImage');
    const qvTitle = document.getElementById('qvTitle');
    const qvPrice = document.getElementById('qvPrice');
    const qvAddToCart = document.getElementById('qvAddToCart');
    const qvReadMore = document.getElementById('qvReadMore');
    

    document.querySelectorAll('.quick-view-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            // populate data
            qvImage.src = this.getAttribute('data-img');
            qvTitle.textContent = this.getAttribute('data-title');
            qvPrice.innerHTML = this.getAttribute('data-price');
            qvReadMore.href = this.getAttribute('data-url');
            qvAddToCart.dataset.product_id = this.getAttribute('data-product_id');

            // show modal
            modal.classList.remove('hidden');
            // small delay to allow display:block to apply before animating opacity
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalContent.classList.remove('scale-95');
            }, 10);
        });
    });

    function closeModal() {
        modal.classList.add('opacity-0');
        modalContent.classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }

    closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
});
</script>