<?php
	$args = array('post_type' => 'footer', 'posts_per_page' => 5);
	$loop = new WP_Query($args);
	while ($loop->have_posts()) : $loop->the_post(); ?>
		

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" class="post" <?php post_class(); ?>>

		<h2><?php the_title(); ?></h2>
		<h3><?php the_content(); ?></h3>

	</article>
	
<?php endwhile; ?>
