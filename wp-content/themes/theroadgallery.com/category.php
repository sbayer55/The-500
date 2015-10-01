<?php get_header(); ?>
	
<a id="toTop"><div class="topbutton ease-slower"></div></a>

	
<div class="page-wrap">

	<!-- section -->
	<section role="main">
	
		<h1>News from The Road: <?php _e( '', 'html5blank' ); the_category(); ?></h1>
	
		<div class="blog-feed">

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" class="post" <?php post_class(); ?>>
				
				<div class="blog-feed-artimage">
				 <?php 
				 if ( has_post_thumbnail()) {
				   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
				   the_post_thumbnail();
				 }
				 ?>
				</div>
			
			<a href="<?php the_permalink(); ?>" class="ease"><h4><?php the_time('F jS, Y'); ?></h4></a>
			<a href="<?php the_permalink(); ?>" class="ease"><h1><?php the_title(); ?></h1></a>
			<h3><?php echo excerpt(50); ?></h3>
			<a href="<?php the_permalink(); ?>" class="ease"><h4>read more &raquo;</h4></a>

		</article>

		<?php endwhile; endif; ?>

		</div>
			
	</section>
	<!-- /section -->

</div>