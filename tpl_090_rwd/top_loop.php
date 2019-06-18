<div class="container">


<?php if (have_posts()): ?>
<div class="card-deck">
<?php while (have_posts()): the_post();?>
<div class="card"　>
<div class="card-img-top"><?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
</div>
<div class="card-body">
<h5 class="card-title"><?php the_title();?></h5>
<p class="card-text"><?php the_excerpt();?></p>
<p class="card-text"><small class="text-muted"><?php the_time('Y/m/d');?></small></p>
</div>
</div>
<?php endwhile;?>
</div>
<?php else: ?>
<div class="inner">
<p>該当する投稿は見つかりませんでした。</p>
</div>
<?php endif;?>

</div>