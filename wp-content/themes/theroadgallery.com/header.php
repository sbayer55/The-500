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
			