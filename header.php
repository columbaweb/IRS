<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]>  <html class="no-js" <?php language_attributes(); ?>> <![endif]-->

<html lang="en-GB" class="no-js">
<head>
<title><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="google-translate-customization" content="e5d6bb5eebae058d-34e2279d52f0af78-g7424d9382a4f6003-13" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?'.filemtime( get_stylesheet_directory().'/style.css'); ?>" type="text/css" media="all" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="//use.typekit.net/jev3rny.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php wp_enqueue_script('jquery');?>
<?php wp_head(); ?>

</head> 

<body <?php body_class(); ?>>
	<header>
		<div class="wrapper">
			<div id="logo" class="grid_4"><a href="<?php echo home_url(); ?>" ><img src="<?php bloginfo( 'template_url' ); ?>/images/independent-retail-show.png" width="283" height="300" alt="IRS" /></a></div>
			<div class="grid_8">
				<div id="header-sidebar">
					event, social
				</div>	
				where....
			</div>	
			<?php wp_nav_menu( array( 'theme_location' => 'topnav' ) ); ?>
		</div>	
	</header>
		
		