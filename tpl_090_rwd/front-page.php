<?php get_header(); ?>
 <!-- $header_image = get_header_image();
if ($header_image):?>
 <div id="mainImg"><img src="<?php //header_image(); ?>" width="<?php //echo HEADER_IMAGE_WIDTH; ?>" height="<?php //echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php //bloginfo( 'description' ); ?>"> -->



<div class="container">
  <div class="mainimag" >
<!-- カルーセル -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="http://parnee-noodle-shop.local/wp-content/themes/tpl_090_rwd/images/noodle.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php bloginfo('template_directory'); ?>/images/noodle1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php bloginfo('template_directory'); ?>/images/begi.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
   </div>
  </div>
</div>

<!-- </div><?php //endif;?> -->

<!-- 	<?php //if ( have_posts()) : the_post(); ?>
  <section id="toppage">
		<header class="header">
			<h1 class="title"><span><?php //the_title(); ?></span></h1>
		</header>
    <div class="post innerS">
      <?php //the_content();?>
    </div>
  </section>
	<?php //endif; ?> -->

 <div class="container">
  <div class="about">
  <div class="row">
    <div class="col-md-6">  
      <h1>ABOUT US</h1>
      <p>Tradition since 1889
It is a shop of rice noodles with a reputation as very delicious. You surely will be satisfied. The second owner himself is making it with all my heart. It is cheap, tasty and popular. The location is difficult to understand. That's why it's OK.

I am making a soup from the morning. In the afternoon, delicious, rice noodles can be eaten. It is open from 11:00 to 16:00.</p>
    </div>
    <div class="col-md-6">
      <div class="photo">
        <img src="http://parnee-noodle-shop.local/wp-content/themes/tpl_090_rwd/images/gm.png" class="d-block　w-100"  alt="grandmather"　>
      </div>
    </div> 
  </div>
  </div>
 </div>
      



  <?php query_posts('post_type=menu'); ?>
  <?php get_template_part('top_loop'); ?>
    
  <?php wp_reset_query(); ?>


<div class="container">
  <div class="row">
    <div class="col-md-6">  
      <h1>ACCESS</h1>
      <P>Nong Hoi, Muang Thien Mai 50000 Thailand</P>
    </div>
    <div class="col-md-6">
      <div id="map"></div>
    </div>
    
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: {lat: 18.753481, lng: 99.020067}
        });
        var marker = new google.maps.Marker({
              map: map,
              position: {lat: 18.753481, lng: 99.020067}
            });
       }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWsZ4gHwTMP1gq7b-i94jKkih_lnlptGc&callback=initMap">
    </script>
    </div>
  </div>
</div>


<?php get_footer(); ?>