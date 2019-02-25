<?php 

	function lansdowne_files() {
		wp_enqueue_script('jquery', get_theme_file_uri('vendor/jquery/jquery.min.js'), NULL, '1.0', true);
		wp_enqueue_script('bootstrap-js', get_theme_file_uri('vendor/bootstrap/js/bootstrap.bundle.min.js'), NULL, '1.0', true);
		wp_enqueue_script('easing', get_theme_file_uri('vendor/jquery-easing/jquery.easing.min.js'), NULL, '1.0', true);
		wp_enqueue_script('grayscale', get_theme_file_uri('js/grayscale.min.js'), NULL, '1.0', true);
		wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');
		wp_enqueue_style('bootstrap-core', '//stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');
		wp_enqueue_Style('custom-google-fonts', '//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i');
		wp_enqueue_style('varela-font', '//fonts.googleapis.com/css?family=Varela+Round');
		wp_enqueue_style('lansdowne_main_styles', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', 'lansdowne_files');

?>