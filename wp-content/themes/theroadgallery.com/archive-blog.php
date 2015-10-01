<?php 
/* template name: Archive Blog */
get_header(); ?>

<a id="toTop"><div class="topbutton ease-slower"></div></a>

<div class="blog-description">
<div class="blog-description-p">
<h1>48 Minutes</h1>
Welcome to The Road Gallery blog, 48 Minutes. A place for busy people with demanding jobs and full lives to take time out to create, reflect on their journey and reconnect with their dreams.
<p>
<a href="/blog/welcome/"><u>Read the story behind the blog »</u></a>
</div>
</div>

<div class="page-wrap">

	<section role="main">


		<div class="blog-feed">

<?php
if(have_posts()) : while(have_posts()) : the_post();
?>

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

<?php
endwhile; endif;
?>

		</div>
	<?php get_template_part('pagination'); ?>
	</section>

</div>

<?php get_footer(); ?>