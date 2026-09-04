<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();

	// Process content and extract table of contents
	$raw_content = get_the_content();
	$processed_content = apply_filters('the_content', $raw_content);
	$toc_data = pbdcs_extract_toc($processed_content);
	$content_with_anchors = $toc_data['content'];
	$toc_items = $toc_data['toc'];
?>

<section class="breadcrumbs py-20 relative
after:content-[''] after:block after:absolute after:top-0 after:left-0 after:w-full after:h-full after:bg-black after:opacity-50">
	<?php the_post_thumbnail('large', [
		'fetchpriority'=>'high',
		'class' => 'absolute top-0 left-0 w-full h-full object-cover object-center',
	])?>
	<div class="container text-white text-center relative z-10">
		<h1 class="post-title text-3xl md:text-6xl mb-5"><?php the_title()?></h1>
		
		<div class="text-xs">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb();
			}
		?>
		</div>
	</div>
</section>

<div class="page-wrapper py-10">
	<div class="container">
		<div class="grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-12">
			<div class="col-span-12 md:col-span-8 order-2 md:order-1">
				<article class="entry-content wp-editor">
					<?php echo $content_with_anchors; ?>
				</article>
			</div>
			<div class="col-span-12 md:col-span-4 order-1 md:order-2">
				<?php 
				get_template_part('partials/general/table-of-contents', null, [
					'toc' => $toc_items
				]); 
				?>
			</div>
		</div>
	</div>
</div>
<?php
endwhile; // End of the loop.

get_footer();
