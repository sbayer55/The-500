<?php 
/* template name: artists */
get_header(); ?>

<!-- OLD LOCATION FOR ARTIST SIDEBAR -->

<a id="toTop"><div class="topbutton ease-slower"></div></a>

<div class="page-wrap">

	<!-- section -->
	<section role="main">

		<div class="archive-list">
			<h1>Artists</h1>
			<?php get_template_part('includes/artistslist'); ?>
		</div>

		<div class="grid">
			<?php get_template_part('includes/artistsloop'); ?>
			<div class="clear"></div>
		</div>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->

</div>

<?php get_footer(); ?>