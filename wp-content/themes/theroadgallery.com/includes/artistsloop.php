<?php
	$args = array('post_type' => 'artists', 'posts_per_page' => 36);
	$loop = new WP_Query($args);
	while ($loop->have_posts()) : $loop->the_post(); ?>
		

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" class="post" <?php post_class(); ?>>
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

			<div class="post-block">
				<a href="<?php the_permalink(); ?>" class="ease">
					<div class="post-title"><h1><?php the_title(); ?></h1></div>
					<!--<div class="post-line"></div>
					<div class="right-arrow"></div>-->
				</a>
			</div>

			<div class="post-background">
				<?php the_post_thumbnail('grid'); ?>
			</div>

		<?php endif; ?>

	</article>

<?php endwhile; ?>
