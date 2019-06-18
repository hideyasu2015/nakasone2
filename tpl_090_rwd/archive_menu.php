<?php get_header(); ?>

<div class="contentsWrap">
    <div class="mainContents">
        <section class="planBlock block">
            <h1 class="type-A">MENU</h1>
            <div class="menus">
                <?php get_template_part('loop','menu'); ?>
            </div><!-- /.plans -->
        </section><!-- /.planBlock -->
    </div><!-- /.mainContents -->

   <!--  <aside class="subContents">
        <?php //get_sidebar('beds'); ?>
    </aside> --><!-- /.subContents -->
</div><!-- /.contentsWrap -->

<?php get_footer(); ?>