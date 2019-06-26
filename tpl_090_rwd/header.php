<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <meta name="description"
    content="<?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('description'); ?>">
  <title><?php global $page, $paged;
  wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'tpl_090_rwd' ), max( $paged, $page ) );
	?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" 　type="text/css">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/mdb.min.css" rel="stylesheet" type="text/css">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">


  <?php 
wp_enqueue_script('jquery');
wp_head(); ?>
</head>

<body>
  <header id="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
    <div id="headerWrap">
      <?php if(is_home()):?>
      <div class="topimage">
        <img src="http://parnee-noodle-shop.local/wp-content/themes/tpl_090_rwd/images/shop.png" alt="..." 　>
      </div>
      <?php endif; ?>

      <!-- <p id="logo">
    <?php //if (function_exists('the_custom_logo')):?>
    	<?php //the_custom_logo();?>
    <?php //else:?>
  		<a href="<?php //echo esc_url( home_url( '/' ) ); ?>" title="<?php //echo esc_attr( get_bloginfo('name', 'display')); ?>" rel="home"><?php //echo esc_attr( get_bloginfo('name', 'display'))?></a>
    <?php //endif;?>
    </p> -->

      <nav id="mainnav">
        <p id="menuWrap"><a id="menu"><span id="menuBtn"></span></a></p>
        <div class="panel">
          <?php wp_nav_menu(array('theme_location' => 'primary'));?>
        </div>
      </nav>
  </header>