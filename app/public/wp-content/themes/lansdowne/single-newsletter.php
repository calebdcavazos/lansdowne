<?php

	get_header();

	while(have_posts()) {
		the_post(); ?>


		<!-- Start Page -->
		<!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container single-page-nav">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url() ?>"><i class="fas fa-chevron-circle-left single-back-btn"></i>Lansdowne Neighborhood</a>
            </div>
        </nav>

        <div class="single-banner"></div>


		<div class="single-page-section">
			<div class="container">
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
			</div>
		</div>

		
	<?php }

	get_footer();

?>