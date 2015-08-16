<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link  href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" >
	<link  href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.css" rel="stylesheet" type="text/css" >

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body <?php body_class(); ?>>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button aria-expanded="false" data-target="#navbar" 
          data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Меню</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Рецепты</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
			<?php wp_nav_menu(array('theme_location'=>'top-menu', 'container'=>false, 'menu_class'=>'nav navbar-nav'));?>	    
		</div>
		<!--/.nav-collapse -->
      </div>
</nav>

<!-- <div class="navbar second-navbar navbar-fixed-top " role="navigation">
	<div class="container">
		<?php get_search_form(); ?>
	</div>
</div> -->
