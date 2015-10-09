<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>


<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<!-- dns prefetch -->
<link href="//www.google-analytics.com" rel="dns-prefetch">

<!-- meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="keywords" content="Contemporary art gallery, Modern art gallery, Abstract art, Abstract painting, Expressionist painting, #nycart, Expressionist art, Emerging artists, Emerging American artists, Artist, Art, Online art gallery, New York online art gallery, New York art gallery, New York Artist studio tours, Art gallery, Affordable art, Painting, Original artwork, Monotype, Monoprint, Hell's Kitchen art gallery">
<meta name="viewport" content="width=device-width, user-scalable=no">

<!-- icons -->
<link rel="shortcut icon" href="http://www.theroadgallery.com/favicon.ico?v=2" />
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	


<!-- css + javascript -->
<?php wp_head(); ?>
<script>
!function(){
	// configure legacy, retina, touch requirements @ conditionizr.com
	conditionizr()
}()
</script>
<!-- analytics -->
<script> 
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46820133-1', 'theroadgallery.com');
  ga('send', 'pageview');

</script>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>/style.css" type="text/css" media="screen" title="no title" charset="utf-8">

<style>
.omsc-toggle-title, .omsc-toggle-title:hover, .omsc-toggle.omsc-expanded .omsc-toggle-title{
  color: #FFF;
  background-color: #ff6600;
}

.omsc-toggle-inner {
color:#000;
  background-color: #d0d0d0;
}

.flexslider2 {
  max-height: none!important;
}

@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 568px){

.flexslider2{
max-width:300px!important;
}

div#rev_slider_1_1_wrapper {
  top: 100px!important;
}

.homepage-container{
  margin-top:350px!important;
}

.omsc-toggle{
/*overflow: none;*/
max-width:300px!important;
margin-left:-20px;
}

.art-image{
  /*width: 50%;
margin:0 auto;
  float: none!important;*/
  max-width: 300px!important;
}

.flexslider2-contain{
width:300px!important;
margin:0 auto!important;
}

.slides li, .flex-active-slide{
width:300px!important;
/*float:none!important;*/
}

.art-desc{
margin-left:none!important;
}

article.category-artwork {
  max-width: 300px!important;
  margin: 0 auto!important;
}

}


</style>

</head>


<body <?php body_class(); ?>>

<!-- header -->
<header class="header clear ease" role="banner">
	<div class="header-contain">
		<!-- logo -->
		<a href="<?php echo home_url(); ?>"><div class="logo ease"></div></a>
		
		<!-- nav -->
		<nav class="nav desktop" role="navigation">
			<?php html5blank_nav(); ?>
		</nav>

		<!-- nav -->
		<a href="#" id="menu-icon"></a>
		<nav class="nav mobile" role="navigation">
			<?php html5blank_nav(); ?>
		</nav>

	</div>
</header>



<!-- wrapper -->
<div class="wrapper">
			