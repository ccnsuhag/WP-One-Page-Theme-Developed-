<?php 

/**
 * Template Name:Header or Slider
*/


function get_slider(){

  ob_start();

?>

<div class="container-fluid">
        <!-- Start: Header -->
        <div class="row hero-header" id="home">
          <div class="col-md-7">
            <img src="<?php echo get_template_directory_uri();?>/img/meetup-logo.png" class="logo">
            <h1>Attend the most awaited Conference of 2015</h1>
            <h3>to start you up with your business!</h3>
            <h4>20<sup>th</sup> to 22<sup>nd</sup>  October, 2015</h4>
            <a href="#" class="btn btn-lg btn-red">Buy Tickets Now <span class="ti-arrow-right"></span></a>

          </div>
          <div class="col-md-5 hidden-xs">
            <img src="<?php echo get_template_directory_uri();?>/img/rocket.png" class="rocket animated bounce">
          </div>
        </div>
        <!-- End: Header -->
      </div>

      <?php 

       return ob_get_clean();
}

add_shortcode('slider','get_slider');



      
      
      
      ?>