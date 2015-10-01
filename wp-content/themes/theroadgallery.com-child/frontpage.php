<?php 
/* template name: frontpage */
get_header(); ?>
	
<a id="toTop"><div class="topbutton ease-slower"></div></a>

<!-- section -->
<div class="slide-contain">
	<?php echo do_shortcode( '[rev_slider home]' ); ?>
</div>

<!-- OLD LOCATION FOR ARTIST SIDEBAR -->

<div class="homepage-container ease-slower">

	<div class="scroller-box"><div class="scroller"></div></div>

	<section role="main">
		<div class="homepage-blurb">
			<?php get_template_part('includes/blurb'); ?>
		</div>
	</section>

	<a href="/about-us"><div class="learnmore ease">ABOUT US &raquo;</div></a>
	<a href="http://eepurl.com/NxIHj" target="_blank"><div class="mailinglist ease">MAILING LIST SIGNUP &raquo;</div></a>
	<a href="/gift-registry"><div class="mailinglist ease">OUR GIFT REGISTRY &raquo;</div></a>

	<div class="page-break">
		<div class="line"></div>
		<a id="toTop"><div class="logo-empty ease"></div></a>
	</div>

	<section role="main">
		<h1 class="latest-news">Latest News</h1>
		<div class="homepage-news">
			<?php get_template_part('includes/newshomepage'); ?>
			<div class="clear"></div>
		</div>
		<a href="/news"><div class="learnmore ease">MORE NEWS &raquo;</div></a>
	</section>
	
	<div class="page-break">
		<div class="line"></div>
		<a id="toTop"><div class="logo-empty ease"></div></a>
	</div>


	<section class="artist-grid" role="main">
		<h1 class="archive-list">Artists</h1>
		<div class="grid">
			<?php get_template_part('includes/artistsloop'); ?>
			<div class="clear"></div>
		</div>
	</section>


</div>

<div class="social-container">
	<div class="follow"><h3>Follow Us</h3></div>
	<div class="bottom-line"></div>
	<ul class="social">
		<li><a class="fb ease" href="https://www.facebook.com/pages/The-Road-Gallery/503226126433822" target="_blank"></a></li>
		<li><a class="tw ease" href="https://twitter.com/TheRoadGallery" target="_blank"></a></li>
		<li><a class="in ease" href="http://instagram.com/theroadgallery" target="_blank"></a></li>
	</ul>
</div>

<?php get_footer(); ?>

