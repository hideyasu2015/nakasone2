<!-- <?php //if (have_posts()) :?>		
  <ul class="col3">
 		<?php //while (have_posts()) : the_post(); ?>
    	<li>
    		<a href="<?php //the_permalink() ?>">
      		<div>
    				<?php //if(has_post_thumbnail()):?>
							<p class="thumb"><?php //echo get_the_post_thumbnail($post->ID, 'size1');?></p>
							<?php //endif;?>
        		<h3><span><?php //the_title(); ?></span></h3>
        		<?php //the_excerpt();?>
        		<p class="date"><?php //the_time('Y/m/d');?></p>
          </div>
          </a>
        </li>
    	<?php //endwhile; ?>
  </ul> 
<?php //else: ?>
	<div class="inner">
  <p>該当する投稿は見つかりませんでした。</p>
  </div>
<?php //endif; ?> -->