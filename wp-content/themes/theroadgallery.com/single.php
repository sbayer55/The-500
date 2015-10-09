<?php get_header(); ?>


<a id="toTop"><div class="topbutton ease-slower"></div></a>

<div class="page-wrap">

	<section role="main" class="single-artist">
		<div class="flexslider2-contain">
			<div class="flexslider2 ease-slower">
				<?php get_template_part('includes/artworkslider'); ?>
			</div>
		</div>
	</section>



	<section role="main" class="single-artist">
		<h1 style="font-size: 44px;">All Work From <?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name . ' '; } } ?></h1>
		<div class="grid">
			<?php get_template_part('includes/relatedwork'); ?>
			<div class="clear"></div>
		</div>
	</section>
	

</div>

<?php get_footer(); ?>