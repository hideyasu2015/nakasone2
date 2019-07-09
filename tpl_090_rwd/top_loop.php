<div class="container">
    <i class="fas fa-utensils fa-2x" id="icon"></i>
    <h2>MENU</h2>
    <?php if (have_posts()): ?>
    <div class="card-deck">

        <?php while (have_posts()): the_post();?>
        <div class="card">
            <!-- <section id="post-<?php //the_ID(); ?>" <?php //post_class('menu'); ?>>
        <a href="<?php //the_permalink() ?>">  -->
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
        </div>
        <?php endwhile;?>
    </div>
    <?php else: ?>
    <div class="inner">
        <p>NO IMAGE</p>
    </div>
    <?php endif;?>

    <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                class="fas fa-chevron-circle-left fa-3x fa-green"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                class="fas fa-chevron-circle-right fa-3x fa-green"></i></a>
    </div>

</div>