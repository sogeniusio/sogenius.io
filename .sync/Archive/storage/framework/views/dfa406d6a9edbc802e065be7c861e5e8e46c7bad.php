<?php $__env->startSection('stylesheets'); ?>
  
  <style media="screen">
  .overlay {
     background:transparent;
     position:relative;
     width:640px;
     height:480px; /* your iframe height */
     top:480px;  /* your iframe height */
     margin-top:-480px;  /* your iframe height */
    }
  </style>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('title', '| Contact'); ?>
<?php $__env->startSection('content'); ?>
  <section class="mastwrap">




    <section class="container about pad-top-half pad-bottom-half">

      <div class="row">
            <article class="col-md-5 text-left  inner-pad">
              <h6 class="super-text  font2bold black">Say Hello!</h6>
            </article>
            <article class="col-md-5 col-md-offset-2 text-left ">
              <h3 class="main-heading  font2light white">hi@sogenius.io / 347.972.8827 <br/>New York, NY</h3>
            </article>
      </div>

    </section>




    <section class="container pad silver-bg ">

      <div class="row">
            <article class="col-md-12 pad text-left">

              <div class="contact-item">
                            
                              <form name="myform" id="contactForm" action="sendcontact.php" enctype="multipart/form-data" method="post">
                                <article>
                                  <input type="text" placeholder="Your Name" id="name" name="name" size="100" class="form-control border-form white font4light">
                                </article>
                                <article>
                                   <input type="text" placeholder="Valid email ID" name="email" id="email" size="30" class="form-control border-form white font4light">
                                 </article>
                                 <article>
                                  <textarea placeholder="Your Message" name="message" cols="40" rows="5" id="msg" class="form-control border-form white font4light"></textarea>
                                  <div class="btn-wrap  text-left">
                                    <button class="btn  btn-oscar btn-oscar-dark" id="submit" name="submit" type="submit">Send Message</button>
                                  </div>
                                </article>
                             </form>
                      </div>

            </article>
      </div>

    </section>





    <div class="container-fluid">
          <div class="row">
              <article class="col-md-12 map-wrap" style="padding: 0;">
                <div class="overlay" onClick="style.pointerEvents='none'"></div>
                  <div id="map" class="fullheight"></div>
              </article>
          </div>
    </div>






  </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

  <script src="js/libs/common.js"></script>
  <script src="elements/js/elements.js"></script>
  <script src="js/custom/form-validation.js"></script>
  <script src="js/custom/main.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
          // When the window has finished loading create our google map below
          google.maps.event.addDomListener(window, 'load', init);

          function init() {
              // Basic options for a simple Google Map
              // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
              var mapOptions = {
                  // How zoomed in you want the map to start at (always required)
                  zoom: 12,

                  // The latitude and longitude to center the map (always required)
                  center: new google.maps.LatLng(40.6700, -73.9400), // New York

                  // How you would like to style the map.
                  // This is where you would paste any style found on Snazzy Maps.
                  styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
              };

              // Get the HTML DOM element that will contain your map
              // We are using a div with id="map" seen below in the <body>
              var mapElement = document.getElementById('map');

              // Create the Google Map using our element and options defined above
              var map = new google.maps.Map(mapElement, mapOptions);

              // Let's also add a marker while we're at it
              var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(40.6700, -73.9400),
                  map: map,
                  title: 'New York City!'
              });
          }
      </script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>