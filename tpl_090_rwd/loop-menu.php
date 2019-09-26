<?php $args = array(
  'posts_per_page'   => 10,
  'offset'           => 0,
  'category'         => '',
  'category_name'    => '',
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'menu',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'     => '',
  'post_status'      => 'publish',
  'suppress_filters' => true 
);
$posts_array = get_posts( $args ); ?>



<div class="container">

    <?php if (have_posts()): ?>

    <div class="row">
        <?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-img-top"><?php echo get_the_post_thumbnail($page->ID, 'medium'); ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title();?></h5>
                    <p class="card-text text-muted">
                        <h4><?php echo number_format( get_field('price')); ?>b</h4>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach;
wp_reset_postdata();?>

    </div>
    <?php else: ?>
    <div class="inner">
        <p>NO IMAGE</p>
    </div>
    <?php endif;?>

    <!-- <img src=<section id="post-<?php the_ID(); ?>" <?php post_class('menu'); ?>>
                <a href="<?php the_permalink() ?>"> -->