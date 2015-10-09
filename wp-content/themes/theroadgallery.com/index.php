<?php get_header(); ?>
	

<a id="toTop"><div class="topbutton ease-slower"></div></a>

<!-- section -->
<section role="main">
	<div class="flexslider">
		<?php get_template_part('includes/homepageslider'); ?>
	</div>
</section>


<section role="main">
	<div class="grid">
		<?php get_template_part('includes/artistsloop'); ?>
	</div>
</section>


<div class="page-break">
	<div class="line"></div>
	<a id="toTop"><div class="logo-empty"></div></a>
</div>


<div class="follow"><h3>Follow Us</h3></div>
<div class="bottom-line"></div>
<ul class="social">
	<li><a class="fb ease" href="https://www.facebook.com/pages/The-Road-Gallery" target="_blank"></a></li>
	<li><a class="tw ease" href="https://twitter.com/TheRoadGallery" target="_blank"></a></li>
	<li><a class="in ease" href="http://instagram.com/theroadgallery" target="_blank"></a></li>
	<li><a class="pn ease" href="" target="_blank"></a></li>
</ul>



<?php get_footer(); ?>