<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,initial=1.0"">
    <meta name=" description"
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
    <link rel="profile" href="https://gmpg.org/xfn/11">
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
    <header id="header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">

        <div id="headerWrap">
            <?php if(is_home()):?>
            <div class="jumbotron jumbotron-fluid">
                <div class="jumbotron-container">
                    <h1 class="site-name">PARNEE NOODLE SHOP</h1>
                    <p class="lead">Popular noodle shop</p>
                </div>
            </div>
            <?php endif; ?>

            <!-- globalNavi -->
            <div class="container">
                <nav class="globalNavi navbar-expand-sm navbar-light">
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="menu" class="collapse navbar-collapse">
                        <?php 
                        $args=array(
                            'menu'=>'global-navigation',
                            'container'=>false,
                        );
                        wp_nav_menu($args);
                        ?>
                    </div>
                </nav>
            </div>

    </header>