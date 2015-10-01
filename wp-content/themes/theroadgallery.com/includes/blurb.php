<?php
	$args = array('post_type' => 'blurb', 'posts_per_page' => 1);
	$loop = new WP_Query($args);
	while ($loop->have_posts()) : $loop->the_post(); ?>
		

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" class="post" <?php post_class(); ?>>

		<h1><?php the_title(); ?></h1>
		<h3><?php the_content(); ?></h3>

	</article>
	
<?php endwhile; ?>
