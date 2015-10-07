<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <footer class="page-footer blue">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h3 class="white-text">{titlu}</h3>
			<p class="white-text">Telefon: {telefon}</p>
			<p class="white-text">EMail: {email}</p>
			<p class="white-text">Adresa: Str. {adresa}</p>
        </div>
        <div class="col l6 s12">
          <div id="map"></div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
		<div class="container">
            Copyright &copy; {titlu}. All rights reserved.
            <span class="right">Developed by <a href="http://cmastery.com" class="white-text">cMastery.com</a></span>
           </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/init.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
<script>/* google maps -----------------------------------------------------*/
google.maps.event.addDomListener(window, 'load', initialize);

function initialize() {

  /* position Amsterdam */
  var latlng = new google.maps.LatLng(45.670264, 25.581734);

  var mapOptions = {
    center: latlng,
    scrollWheel: false,
    zoom: 17
  };
  
  var marker = new google.maps.Marker({
    position: latlng,
    url: '/',
    animation: google.maps.Animation.DROP
  });
  
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);
  marker.setMap(map);

};
/* end google maps -----------------------------------------------------*/
    </script>
	<script>
		(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space
	</script>
  </body>
</html>