<?php
get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();

?>
	<div class="page-wrapper sec has-pb">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-12">
					<div class="hero">
						<h1 class="text-center post-title"><?= get_the_title() ?></h1>
						<div class="detail d-flex justify-content-center align-items-center">
							<p class="date"><?= get_the_date() ?></p>
							<i class="fas fa-circle"></i>
							<div class="categories"><?php the_category(','); ?></div>
							<i class="fas fa-circle"></i>
							<p class=""><?= get_the_author_meta('display_name') ?></p>
						</div>
					</div>
					<div id="page-detail">

						<?php the_content(); ?>

						<div class="relative-tags">
							<ul class="list">
								<?php
								$tags = get_the_tags();
								if (!empty($tags)) {
									foreach ($tags as $tag) {
										$tag_link = get_tag_link($tag->term_id);
										echo '<li class="item"><a href="' . esc_url($tag_link) . '" title="' . esc_attr($tag->name) . '" class="tag-link-' . esc_attr($tag->term_id) . '">' . esc_html($tag->name) . '</a></li>';
									}
								}
								?>
							</ul>
						</div>
					</div>
				</div>
				<?= get_sidebar() ?>
			</div>
		</div>
	</div>
<?php
endwhile; // End of the loop.

get_footer();
