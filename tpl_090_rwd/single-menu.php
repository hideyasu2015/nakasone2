<?php get_header(); ?>


<div class="container">
    <!-- <div class="mainContents"> -->
    <?php 
            if ( have_posts() ) :
              while ( have_posts() ) : the_post();
           ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
        <h2 class="main_menu">MENU</h2>

        <!-- ここからGRID -->
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                </div>
                <!-- 左側 -->
                <div class="col-md-5">
                    <div class="shadow p-3 mb-5 bg-white rounded">
                        <?php 
                          $image = get_field('picture');
                          $url = $image['sizes'][ 'large' ]; //中サイズ画像のURL
                          $width = $image['sizes'][ 'large-width' ]; //中サイズ画像の横幅
                          $height = $image['sizes'][ 'large-height' ]; //中サイズ画像の縦幅
                          ?>
                        <?php if(has_post_thumbnail()): ?>
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array( 500, 500 ) ); ?></a>
                        <?php else: ?>
                        <a href="<?php the_permalink() ?>"><img
                                src="<?php echo get_template_directory_uri(); ?>/images/noimage_100x100.png"
                                height="100" width="100" alt=""></a>
                        <?php endif; ?>
                        <!-- <img src="<?php //echo $url; ?>" width="<?php //echo $width; ?>" height="<?php //echo $height; ?>" /> -->
                    </div>
                </div>

                <!-- 右側 -->
                <div class="col-md-5">
                    　　<h1 class="menu_title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <dl>
                        <dt>PRICE</dt>
                        <dd><em><?php echo number_format( get_field( 'price' ) ); ?>B</em></dd>
                        　　
                    </dl>
                    　　 <dl>
                        <dt>COMMENT</dt>
                        <dd><?php echo get_field( 'comment' ); ?></dd>
                    </dl>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
        <!-- ここまでGRID -->

    </article><!-- /.page -->
    <?php 
        endwhile;
    endif;
    ?>
    <!-- </div>/.mainContents  -->

    <!--    <aside class="subContents">
          <?php //get_sidebar('beds'); ?>
        </aside> -->
    <!-- /.subContents -->

</div>
<nav class="postNavi">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
                <span class="prev"><?php previous_post_link();?></span>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
                <span class="next"><?php next_post_link();?></span>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>