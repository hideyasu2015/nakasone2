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

        </div>

        <!-- globalNavi -->
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="https://noodle.nakamiwa.com"><img alt="Navbar"
                        src="<?php bloginfo('template_directory'); ?>/images/navbar.jpeg" width="30" height="30"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <?php 
                        $args=array(
                            'menu'=>'global-navigation',
                            'container'=>false,
                            'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav">%3$s</ul>',
                            // 'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav mr-auto">%3$s</ul>',
                        );
                        wp_nav_menu($args);
                        ?>
                    <!-- <ul class="navbar-nav mr-auto">
                        <li class="c active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        
                    </ul> -->

                </div>
            </nav>

        </div>
    </header>