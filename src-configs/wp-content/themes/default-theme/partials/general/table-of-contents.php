<?php
/**
 * Table of Contents Partial
 *
 * @var array $args ['toc' => array]
 */

$toc = isset($args['toc']) && is_array($args['toc']) ? $args['toc'] : [];

if (empty($toc)) {
	// Fallback to recent posts if no headings are present in the content
	$recent_posts = new WP_Query([
		'post_type'      => 'post',
		'posts_per_page' => 5,
		'post__not_in'   => [get_the_ID()],
		'post_status'    => 'publish',
	]);

	if ($recent_posts->have_posts()) :
	?>
		<aside class="sticky top-28 bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
			<div class="flex items-center gap-2 pb-4 mb-4 border-b border-gray-100">
				<svg class="w-5 h-5 text-[#1a747a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
				</svg>
				<h3 class="text-base font-semibold text-gray-900"><?php esc_html_e('Bài viết mới nhất', 'pbdcs'); ?></h3>
			</div>
			<ul class="space-y-3">
				<?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
					<li class="border-b border-gray-50 pb-3 last:border-b-0 last:pb-0">
						<a href="<?php the_permalink(); ?>" class="text-sm font-medium text-gray-800 hover:text-[#1a747a] transition-colors line-clamp-2">
							<?php the_title(); ?>
						</a>
						<span class="text-xs text-gray-400 mt-1 block">
							<?php echo get_the_date('d/m/Y'); ?>
						</span>
					</li>
				<?php endwhile; wp_reset_postdata(); ?>
			</ul>
		</aside>
	<?php
	endif;
	return;
}
?>

<aside class="toc-sidebar sticky top-28 bg-white rounded-2xl border border-gray-100 shadow-sm p-5 md:p-6 max-h-[calc(100vh-8rem)] overflow-y-auto">
	<div class="flex items-center justify-between pb-3 mb-3 border-b border-gray-100">
		<div class="flex items-center gap-2.5">
			<span class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-[#1a747a]/10 text-[#1a747a]">
				<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
				</svg>
			</span>
			<h2 class="text-base font-semibold text-gray-900 tracking-tight"><?php esc_html_e('Mục lục nội dung', 'pbdcs'); ?></h2>
		</div>
		<div class="flex items-center gap-2">
			<span class="text-xs font-semibold text-[#1a747a] bg-[#1a747a]/10 px-2 py-0.5 rounded-full">
				<?php echo count($toc); ?>
			</span>
			<button type="button" class="toc-toggle-btn md:hidden text-gray-500 hover:text-gray-700 p-1 focus:outline-none" aria-label="<?php esc_attr_e('Thu gọn / mở rộng mục lục', 'pbdcs'); ?>">
				<svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
				</svg>
			</button>
		</div>
	</div>

	<nav class="toc-navigation" aria-label="<?php esc_attr_e('Mục lục bài viết', 'pbdcs'); ?>">
		<ul class="space-y-1 text-sm border-l-2 border-gray-100">
			<?php foreach ($toc as $item) : 
				$level = $item['level'];
				$indent_classes = '';
				if ($level === 2) {
					$indent_classes = 'pl-3 font-medium text-gray-700 text-sm';
				} elseif ($level === 3) {
					$indent_classes = 'pl-6 text-[13px] text-gray-600';
				} else {
					$indent_classes = 'pl-9 text-xs text-gray-500';
				}
			?>
				<li class="toc-item toc-level-<?php echo esc_attr($level); ?>">
					<a href="#<?php echo esc_attr($item['id']); ?>" 
					   class="toc-link block py-1.5 transition-all duration-150 border-l-2 -ml-[2px] border-transparent hover:border-[#1a747a] hover:text-[#1a747a] hover:bg-gray-50/70 rounded-r <?php echo $indent_classes; ?>"
					   data-target="<?php echo esc_attr($item['id']); ?>">
						<?php echo esc_html($item['title']); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</nav>
</aside>
