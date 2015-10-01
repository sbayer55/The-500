<?php
//for use in the loop, list related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
// 'post__not_in' => array($post->ID),
'posts_per_page'=>36,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>


 <!-- article -->
	<article id="post-<?php the_ID(); ?>" class="post" <?php post_class(); ?>>
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

			<div class="post-block">
				<a href="<?php the_permalink(); ?>" class="ease">
					<div class="post-title"><h1><?php the_title(); ?></h1></div>
				</a>
			</div>

			<div class="post-background">
				<?php the_post_thumbnail('grid'); ?>
			</div>

		<?php endif; ?>

	</article>

<?php
endwhile;
}
wp_reset_query();
}
?>