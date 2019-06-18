<?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
<section id="post-<?php the_ID(); ?>" <?php post_class('menu'); ?>>
    <a href="<?php the_permalink() ?>">

        <div class="text">
            <h2 class="name"><?php the_title(); ?></h2>
            <p class="price"><?php echo number_format( get_field('price')); ?>b</p>
            <p class="summary"><?php the_excerpt(); ?></p>
        </div>
        <figure>
        <?php if(has_post_thumbnail()): ?>
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array( 200, 200 ) ); ?></a>
        <?php else: ?>
            <a href="<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/noimage_100x100.png" height="100" width="100" alt=""></a>
        <?php endif; ?>
        </figure>
    </a>
</section><!-- /.menu -->
<?php 
    endwhile;
endif; 
?>


<?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>