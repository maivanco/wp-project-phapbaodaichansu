<sidebar class="sidebar-rigt-news col-md-3 col-12" data-sticky-container>
	<div id="sticky-sidebar" data-margin-top="100">
		<aside id="categories" class="widget">
			<p class="tit-box color-main font-weight-bold">Categories</p>
			<ul class="list">
				<?php
				$args = array(
					'type'      => 'post',
					'parent'    => 0
				);
				$categories = get_categories($args);
				foreach ($categories as $category) :
					$items = get_posts(array(
						'post_type'   => 'post',
						'numberposts' => -1,
						'category' => $category->term_id
					));
					$total_posts = count($items);
				?>
					<li class="item">
						<a href="<?php echo get_term_link($category->term_id); ?>">
							<span class="name"><?php echo $category->name; ?></span>
							<span>-</span>
							<span class="total"><?php echo $total_posts; ?> Posts</span>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</aside>
		<aside id="lastest-post">
			<p class="tit-box color-main font-weight-bold">Recent News</p>
			<?php
			$lastest_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4, 'post_status' => 'publish'));
			if ($lastest_posts->have_posts()) :
				echo '<ul class="list">';
				while ($lastest_posts->have_posts()) : $lastest_posts->the_post();
			?>
					<li class="item">
						<h4 class="title"><a href="<?= get_the_permalink() ?>"><?= max_title_length(get_the_title(), 5) ?></a></h4>
						<div class="date"><i class="fas fa-calendar-alt"></i> <?= get_the_date() ?></div>
					</li>
			<?php
				endwhile;
				echo '</ul>';
				wp_reset_postdata();
			endif;
			?>
		</aside>
		<aside id="tags">
			<p class="tit-box color-main font-weight-bold">Popular Tags</p>
			<ul class="list">
				<?php
				$tags = get_terms([
					'taxonomy' => 'post_tag',
					'orderby' => 'count',
					'order' => 'DESC',
					'number' => 8,
				]);
				if (!empty($tags) && !is_wp_error($tags)) {
					foreach ($tags as $tag) {
						$tag_link = get_tag_link($tag->term_id);

						echo '<li class="item"><a href="' . esc_url($tag_link) . '" title="' . esc_attr($tag->name) . '">' . esc_html($tag->name) . '</a></li>';
					}
				}
				?>
			</ul>
		</aside>
	</div>
</sidebar>