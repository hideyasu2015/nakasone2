


<?php get_header(); ?>



<div class="container">
  
  <div class="row">

    <div class="col-md-6">  
      <h1><?php the_title(); ?></h1>
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