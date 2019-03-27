<?php

	get_header();

	while(have_posts()) {
		the_post(); ?>
	
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-lightdark fixed-top" id="pageNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>">Lansdowne Neighborhood</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>#map">Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact</a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resources
        </a>
        <div class="dropdown-menu page-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Covenants</a>
          <a class="dropdown-item" href="#">Newsletter</a>
          <a class="dropdown-item" href="#">Events</a>
        </div>
      </li>
          </ul>
        </div>
      </div>
    </nav>

		<!-- Start Page -->
		
		<div class="page-section">
			<div class="container">
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
			</div>
		</div>

		
	<?php }

	get_footer();

?>