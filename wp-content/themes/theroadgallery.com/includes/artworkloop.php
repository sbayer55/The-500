<?php
global $post;
$slug = get_post( $post )->post_name;
$args = array(
	 'posts_per_page' => 60,
	 'orderby' => 'rand',
	 'artists' => $slug,
	 'post_status' => 'publish',
);
$my_query = new WP_Query( $args );
if($my_query->have_posts()) :
    while ($my_query->have_posts()) : $my_query->the_post(); ?>

    <!-- article -->
	<article id="post-<?php the_ID(); ?>" class="post" <?php post_class(); ?>>
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

			<div class="post-block">
				<a href="<?php the_permalink(); ?>" class="ease">
					<div class="post-title"><h1><?php the_title(); echo "slug: [$slug]" ?></h1></div>
				</a>
			</div>

			<div class="post-background">
				<?php the_post_thumbnail('grid'); ?>
			</div>

		<?php endif; ?>

	</article>

<?php
	endwhile;
	endif;
	wp_reset_query();
?>