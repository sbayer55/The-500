<ul class="slides">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<li>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="art-image ease single-art">

					 <?php 
					 if ( has_post_thumbnail()) {
					   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
					   echo '<a target="_blank" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
					   the_post_thumbnail();
					   echo '</a>';
					 }
					 ?>

				</div>

				<div class="art-desc">
					<!-- post title -->
					<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
					<h4>
					<?php
						$show_order_form = get_field('show_order_form');						
						if ( $show_order_form == 1 ) 
						{
							echo '<p><a class="order" href="' . get_bloginfo('url') . '/order-prints?artwork_title=' . get_the_title() . '">Order Prints &raquo;</a></p>';
						} ?>
						<?php the_content(); ?>
					</h4>

					<?php
						if ( $show_order_form == 1 ) 
						{
							// do nothing	
						} else {
							echo '<h4 style="border-top:none;">To purchase this piece, please contact: <a href="mailto:neil@theroadgallery.com?subject=Inquiry About' . get_the_title() . '"><strong>neil@theroadgallery.com</strong></a></h4>';
						} ?>
				</div>
				<div class="clear"></div>
				
		</article>
		<!-- /article -->

	</li>

	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>


	<?php
	$tags = wp_get_post_tags($post->ID);
	if ($tags) {
	$first_tag = $tags[0]->term_id;
	$args=array(
		'orderby'=> 'rand',
		'tag__in' => array($first_tag),
		'post__not_in' => array($post->ID),
		'posts_per_page'=>36,
		'caller_get_posts'=>1
	);
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
	while ($my_query->have_posts()) : $my_query->the_post(); ?>

	<li>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="art-image ease single-art">

					<?php 
					 if ( has_post_thumbnail()) {
					   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
					   echo '<a target="_blank" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
					   the_post_thumbnail();
					   echo '</a>';
					 }
					 ?>

				</div>

				<div class="art-desc">
					<!-- post title -->
					<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
					<h4>
					<?php
						$show_order_form = get_field('show_order_form');					
						if ( $show_order_form == 1 ) 
						{
							echo '<p><a class="order" href="' . get_bloginfo('url') . '/order-prints?artwork_title=' . get_the_title() . '">Order Prints &raquo;</a></p>';
						} ?>
						<?php the_content(); ?>
					</h4>

					<?php
						if ( $show_order_form == 1 ) 
						{
							// do nothing	
						} else {
							echo '<h4 style="border-top:none;">To purchase this piece, please contact: <a href="mailto:neil@theroadgallery.com?subject=Inquiry About' . get_the_title() . '"><strong>neil@theroadgallery.com</strong></a></h4>';
						} ?>
				</div>
				<div class="clear"></div>
				
		</article>
		<!-- /article -->

	</li>

	<?php
	endwhile;
	}
	wp_reset_query();
	}
	?>
</ul>