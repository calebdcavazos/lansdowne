<?php

	get_header(); ?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#">Lansdowne Neighborhood</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#map">Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resources
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Covenants</a>
          <a class="dropdown-item" href="#">Newsletter</a>
          <a class="dropdown-item" href="#">Events</a>
        </div>
      </li>
          </ul>
        </div>
      </div>
    </nav>

	<!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">Welcome to Lansdowne</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">A Wonderful spot in Charlotte, North Carolina</h2>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <img src="<?php echo get_theme_file_uri('/img/logo.png'); ?>" class="logo-img">
            <p class="text-white-50">Lansdowne is a large, peaceful, friendly neighborhood in Charlotte, North Carolina. It is located about 8 miles southeast of the city center, between Providence and Sardis Roads. Most of the homes were built in the 1960's and 1970's.</p>
            <p class="text-white-50">Covenants and Restrictions</p>
            <a href="covenants\LansdowneCovenantsAndRestrictions-1959-Spangler.pdf" target="_blank"><i class="fas fa-file-pdf"></i>1959 Spangler</a>
            <a href="covenants\LansdowneCovenantsAndRestrictions-1960-Spangler.pdf" target="_blank"><i class="fas fa-file-pdf"></i>1960 Spangler</a>
            <a href="covenants\LansdowneCovenantsAndRestrictions-1964-Thomason.pdf" target="_blank"><i class="fas fa-file-pdf"></i>1964 Thomason</a>
            <a href="covenants\LansdowneCovenantsAndRestrictions-1978-PJDevelopment.pdf" target="_blank"><i class="fas fa-file-pdf"></i>1978 PJ Development</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Map Section -->

    <section id="map" class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <script>
            // Initialize and add the map
            function initMap() {
                // The location of lansdowne
                var lansdowne = {lat: 35.146, lng: -80.779};
                // The map, centered at lansdowne
                var map = new google.maps.Map(
                  document.getElementById('map'), {zoom: 14, center: lansdowne});
                // The marker, positioned at lansdowne
                var marker = new google.maps.Marker({position: lansdowne, map: map});
            }
            </script>
            <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKmH0TpqkI389pwxvag3oDDKaTGRcrXNk&callback=initMap">
            </script>
          </div>
        </div>
      </div>
  </section>



    <!-- Contact Section -->
    <section class="contact-section bottom-bg-img" id="contact">
      <div class="container">

        <div class="row">

          <div class="col-md-6 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">lansdowneneighborhood@gmail.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <p>Tammy Baker, President</p>
                <hr class="my-4">
                <div class="small text-black-50">(704) 494-1616</div>
              </div>
            </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
        
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
        
        </div>

      </div>
    </section>	

	<?php get_footer();

?>


