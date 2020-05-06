<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		
		<meta charset="<?php bloginfo('charset'); ?>" >
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="CARTA online">
		<meta name="keywords" content="">
		<meta name="author" content="dehlix" />
		<title><?php bloginfo('name'); ?></title>

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>




<!-- site-header -->

<div class="all">
	
	<header class="theheader">

<div class="title-wrapper">



<h1><?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
    <?php the_custom_logo(); ?></h1>
<?php else : ?> 
    <h1><a class="undecorated" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<?php endif; ?>


	<!-- -->

</div>

<?php wp_nav_menu( array('theme_location' => 'primary mobile', 'menu_id' => 'mobile-nav','menu_class' => 'is-open' ) ); ?>
			
<div class="mobile-nav-toggle"><span class="toggle"></span></div>


</header>	
<!-- /site-header -->
