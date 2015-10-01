<?php get_header('page'); ?>

<?php 
global $post;
$slug = get_post( $post )->post_name;
?>


<a id="toTop"><div class="topbutton ease-slower"></div></a>


<div class="page-wrap">

	<!-- section -->
	<section role="main" class="artist">
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		

	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<div class="artist-bio">
				<!-- post title -->
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
				<h4><?php the_content(); // Dynamic Content ?></h4>
				
				<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
				
			</div>
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


	<section role="main" class="single-artist">
		<h1 style="font-size: 44px;">Artwork</h1>
		<div class="grid">
			<?php get_template_part('includes/artworkloop'); ?>
			<div class="clear"></div>
		</div>
	</section>
	

</div>

<?php get_footer(); ?>