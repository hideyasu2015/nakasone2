<?php get_header(); ?>

<div class="contentsWrap">
    <div class="mainContents">
        <section class="planBlock block">
            <h1 class="main_menu">MENU</h1>
            <div class="menus">
                <?php get_template_part('loop','menu'); ?>
            </div><!-- /.plans -->
        </section><!-- /.planBlock -->
    </div><!-- /.mainContents -->
</div><!-- /.contentsWrap -->

<?php get_footer(); ?>