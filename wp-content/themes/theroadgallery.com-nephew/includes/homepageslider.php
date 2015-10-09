<ul class="slides">
	<?php
		$args = array('post_type' => 'homeslider', 'posts_per_page' => 3, 'orderby' => 'rand');
		$loop = new WP_Query($args);
		while ($loop->have_posts()) : $loop->the_post(); ?>
			
			<li>
				<a href="/artists">
					<?php the_post_thumbnail(); ?>
				</a>
				<div class="slider-caption"><?php the_content(); ?></div>

				<div class="clear"></div>
			</li>
			
	<?php endwhile;
	wp_reset_postdata(); ?>
</ul>