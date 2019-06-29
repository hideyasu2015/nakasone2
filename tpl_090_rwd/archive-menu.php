<?php get_header(); ?>

<div class="contentsWrap">
    <div class="mainContents">
        <section class="planBlock block">
            <h2 class="main_menu">MENU</h2>
            <div class="menus">
                <?php get_template_part('loop','menu'); ?>
            </div><!-- /.plans -->
        </section><!-- /.planBlock -->
    </div><!-- /.mainContents -->

    <!--  <aside class="subContents">
        <?php //get_sidebar('beds'); ?>
    </aside> -->
    <!-- /.subContents -->
</div><!-- /.contentsWrap -->

<!-- <nav class="postNavi">
    <span class="prev"><?php //previous_post_link('%link','PREV'); ?></span>
    <span class="next"><?php //next_post_link('%link','NEXT'); ?></span> -->
<?php get_footer(); ?>