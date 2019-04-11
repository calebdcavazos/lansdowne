<?php

function lansdowne_post_types() {
		register_post_type('event', array(
            'supports' => array('title', 'editor', 'excerpt'),
            'public' => true,
			'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => 'Event'
			),
			'menu_icon' => 'dashicons-calendar'
        ));
        
        register_post_type('covenant', array(
            'public' => true,
            'labels' => array(
                'name' => 'Covenants',
                'add_new_item' => "Add New Covenant",
                'edit_item' => 'Edit Covenenat',
                'all_items' => 'All Covenants',
                'singular_name' => 'Covenant'
            ),
            'menu_icon' => 'dashicons-lock'
        ));

        register_post_type('newsletter', array(
            'public' => true,
            'labels' => array(
                'name' => 'Newsletters',
                'add_new_item' => 'Add New Newsletter',
                'edit_item' => ' Edit Newsletter',
                'all_items' => 'All Newsletters',
                'singular_name' => 'Newsletter'
            ),
            'menu_icon' => 'dashicons-media-document'
        ));
	}

    add_action('init', 'lansdowne_post_types');
    

    ?>