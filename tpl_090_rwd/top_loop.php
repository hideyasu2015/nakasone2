<?php $args = array(
  'posts_per_page'   => 3,
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
    <i class="fas fa-utensils fa-2x" id="icon"></i>
    <h2>MENU</h2>
    <?php if (have_posts()): ?>

    <div class="row">
        <?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>

        <div class="card col-md-4">
            <section id="post-<?php the_ID(); ?>" <?php post_class('menu'); ?>>
                <a href="<?php the_permalink() ?>">
                    <div class="card-img-top"><?php echo get_the_post_thumbnail($page->ID, 'medium'); ?>
                        <!-- <?php //var_dump(the_post());?> -->
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><?php the_title();?></h5>
                        <p class="card-text"><?php the_excerpt();?></p>
                        <p class="card-text">
                            <h4 class="text-muted"><?php echo number_format( get_field('price')); ?>b</h4>
                        </p>
                    </div>
                </a>
            </section>

        </div>
        <?php endforeach;
wp_reset_postdata();?>

    </div>
    <?php else: ?>
    <div class="inner">
        <p>NO IMAGE</p>
    </div>
    <?php endif;?>





    <div class="controls-top">
        <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
                class="fas fa-chevron-circle-left fa-3x fa-green"></i></a>
        <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
                class="fas fa-chevron-circle-right fa-3x fa-green"></i></a>
    </div>


    <!-- Indicators
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-multi" data-slide-to="1"></li>

    </ol>
    /.Indicators-->

</div>