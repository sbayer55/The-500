<?php
	$args = array('post_type' => 'news', 'posts_per_page' => 3);
	$loop = new WP_Query($args);
	while ($loop->have_posts()) : $loop->the_post(); ?>
		

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" class="post" <?php post_class(); ?>>

		<a href="<?php the_permalink(); ?>" class="ease"><h1><?php the_title(); ?></h1></a>
		<h3><?php echo excerpt(50); ?></h3>
		<a href="<?php the_permalink(); ?>" class="ease"><h4>read more &raquo;</h4></a>

	</article>
	
<?php endwhile; ?>
