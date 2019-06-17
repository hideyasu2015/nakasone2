<?php
remove_action('wp_head', 'wp_generator');
function my_scripts(){
	wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


/*	Load up the theme options
/*---------------------------------------------------------*/
add_action('admin_menu', 'my_theme_option');
function my_theme_option() {
  add_theme_page('テーマの使い方','テーマの使い方','edit_themes','theme_option','theme_option_file');
}
function theme_option_file(){
  require_once (get_template_directory() . '/inc/theme-options.php');
}


/*	Register navigation
/*---------------------------------------------------------*/
register_nav_menus( array(
	'primary' => __('Main Navigation', 'tpl_090_rwd'),
));


/*	Register sidebars
/*---------------------------------------------------------*/
register_sidebar(array(
	'name' => __('widgetLeft'),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => __('widgetCenter'),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => __('widgetRight'),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
));


add_filter( 'wp_list_categories', 'tpl_090_rwd_list_categories', 10, 2 );
function tpl_090_rwd_list_categories( $output, $args ) {
  $output = preg_replace('/<\/a>\s*\((\d+)\)/',' ($1)</a>',$output);
  return $output;
}

add_filter( 'get_archives_link', 'tpl_090_rwd_archives_link' );
function tpl_090_rwd_archives_link( $output ) {
  $output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/',' ($2)</a>',$output);
  return $output;
}



/*	This is all for compatibility with versions of WordPress prior to 3.4.
/*---------------------------------------------------------*/
define('NO_HEADER_TEXT', true);
define('HEADER_TEXTCOLOR', true);
define('HEADER_IMAGE', '%s/images/mainImage.jpg');
define('HEADER_IMAGE_WIDTH', 2560);
define('HEADER_IMAGE_HEIGHT', 1056);
add_theme_support('custom-header');

add_theme_support('custom-logo');


/*	This theme uses post thumbnails
/*---------------------------------------------------------*/
add_theme_support('post-thumbnails');
add_image_size('size1',280,280,true);


/*	Custom Excerpt "more" Link
/*---------------------------------------------------------*/
function change_excerpt_more($post) {
  return ' ...';    
}    
add_filter('excerpt_more', 'change_excerpt_more');



/*	Add admin CSS
/*---------------------------------------------------------*/
function tpl_090_rwd_admin_css(){
	$adminCssPath = get_template_directory_uri().'/cloud9_admin.css';
	wp_enqueue_style( 'theme', $adminCssPath , false, '2016');
}
add_action('admin_head', 'tpl_090_rwd_admin_css', 11);



/*	Page navigation
/*---------------------------------------------------------*/
function kriesi_pagination($pages = '', $range = 2){  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == ''){
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages){
             $pages = 1;
         }
     }   
 
     if(1 != $pages){
         echo "<ul class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";
 
         for ($i=1; $i <= $pages; $i++){
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                 echo ($paged == $i)? "<li><span class='current'>".$i."</span></li>":"<li><a href='".get_pagenum_link($i)."#hoge' class='inactive' >".$i."</a></li>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
         echo "</ul>\n";
     }
}


?>