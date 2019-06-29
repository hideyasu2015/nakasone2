<?php get_header(); ?>

<div class="container">
    <div class="contentsWrap">
        <div class="mainContents">
            <?php 
              if(have_posts() ):
              while(have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
                <h2 class="main_menu"><?php the_title(); ?></h2>
                <section class="content">
                    <?php the_content(); ?>
                </section>
            </article> <!-- /.page -->
            <?php  
           endwhile;
          endif;
          ?>
        </div> <!-- /.mainContents -->
    </div> <!-- /.contentsWrap -->
</div>


<?php get_footer(); ?>