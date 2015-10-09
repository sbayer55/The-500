<?php /* template name: coming soon */ ?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>


<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<!-- dns prefetch -->
<link href="//www.google-analytics.com" rel="dns-prefetch">

<!-- meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">

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


<style>
html { 

}

.logo.coming-soon { float: none; background-size: 300px; width: 300px; height: 230px; margin: 60px auto; }

</style>

<body <?php body_class(); ?>>

<a href="<?php echo home_url(); ?>"><div class="logo coming-soon ease"></div></a>
<h2>Will be coming soon...</h2>

</body>
</html>