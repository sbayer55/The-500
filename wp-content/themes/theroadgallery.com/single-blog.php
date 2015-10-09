<?php get_header('page'); ?>


<a id="toTop"><div class="topbutton ease-slower"></div></a>


<div class="page-wrap">

	<!-- section -->
	<section role="main" class="artist">
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
			<div class="news-post">

				 <div class="news-post-feature">
				 <?php 
				 if ( has_post_thumbnail()) {
				   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
				   echo '<a target="_blank" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
				   the_post_thumbnail();
				   echo '</a>';
				 }
				 ?>
				 </div>

				<!-- post title -->
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
				<h4><?php the_content(); ?></h4>
			
				<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>
			
			
			</div>
			<?php get_sidebar('blog'); ?> 

			<div class="clear"></div>
			
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	<?php else: ?>
	
		<!-- article -->
		<article>
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /section -->

</div>

<?php get_footer(); ?>