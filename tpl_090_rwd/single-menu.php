<?php get_header(); ?>

<div class="contentsWrap">
        <div class="mainContents">
           <?php 
            if ( have_posts() ) :
              while ( have_posts() ) : the_post();
           ?>
           <article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
            <h1 class="type-A">MENU</h1>
            <h2 class="title type-B"><span><?php the_title(); ?></span></h2>
            <div class="plan">
                <div class="left">
                    <?php 
                    $image = get_field('picture');
                    $url = $image['sizes'][ 'medium' ]; //中サイズ画像のURL
                    $width = $image['sizes'][ 'medium-width' ]; //中サイズ画像の横幅
                    $height = $image['sizes'][ 'medium-height' ]; //中サイズ画像の縦幅
                    ?>
                    <?php if(has_post_thumbnail()): ?>
                      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array( 200, 200 ) ); ?></a>
                    <?php else: ?>
                      <a href="<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/noimage_100x100.png" height="100" width="100" alt=""></a>
                    <?php endif; ?>
                    <!-- <img src="<?php //echo $url; ?>" width="<?php //echo $width; ?>" height="<?php //echo $height; ?>" /> -->      
                </div>
                <div class="right">
                     <?php the_content(); ?>  
                </div>
            </div>
            <div class="plan">
                <div class="left">
                    <dl>
                        <dt>PRICE</dt>
                        <dd><em><?php echo number_format( get_field( 'price' ) ); ?>B</em></dd>
                    </dl>
                    <dl>
                        <dt>COMMENT</dt>
                        <dd><?php get_field( 'comment' ); ?></dd>
                    </dl>
    
                </div>
                
            </div>
        </article><!-- /.page -->
        <?php 
        endwhile;
    endif;
    ?>    
    </div><!-- /.mainContents -->

     <!--    <aside class="subContents">
          <?php //get_sidebar('beds'); ?>
        </aside> --><!-- /.subContents -->
    </div><!-- /.contentsWrap -->

<?php get_footer(); ?>