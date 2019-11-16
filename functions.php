<?php

function software_dev_files() {
	wp_enqueue_style('software_dev_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'software_dev_files');

?>