<?php
/**
 * Artists taxonomy archive
 */
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

		<h1 class="archive-title"><?php echo apply_filters( 'the_title', $term->name ); ?></h1>

		<?php if ( !empty( $term->description ) ): ?>
		<div class="archive-description">
			<?php echo esc_html($term->description); ?>
		</div>
		<?php endif; ?>

		<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" class="post" <?php post_class(); ?>>
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

					<div class="post-block">
						<a href="<?php the_permalink(); ?>" class="ease">
							<div class="post-title"><h3><?php the_title(); ?></h3></div>
							
							<div class="post-line"></div>
							<div class="right-arrow"></div>
						</a>
					</div>

					<div class="post-background">
						<?php the_post_thumbnail(); ?>
					</div>

				<?php endif; ?>
			</article>

		<?php endwhile; ?>

		<div class="navigation clearfix">
			<div class="alignleft"><?php next_posts_link('« Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries »') ?></div>
		</div>

		<?php else: ?>

		<h2 class="post-title">No News in <?php echo apply_filters( 'the_title', $term->name ); ?></h2>
		<div class="content clearfix">
			<div class="entry">
				<p>It seems there isn't anything happening in <strong><?php echo apply_filters( 'the_title', $term->name ); ?></strong> right now. Check back later, something is bound to happen soon.</p>
			</div>
		</div>

		<?php endif; ?>
	</div><!--// end .primary-content -->


<?php get_footer(); ?>