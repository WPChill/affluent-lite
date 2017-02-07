<?php 

add_filter('cpotheme_homepage_order', 'cpotheme_theme_ordering');
function cpotheme_theme_ordering($data){ 
	return 'slider,tagline,features,portfolio,testimonials,content';
}


add_filter('cpotheme_font_headings', 'cpotheme_theme_fonts');
add_filter('cpotheme_font_menu', 'cpotheme_theme_fonts');
function cpotheme_theme_fonts($data){ 
	return 'Open+Sans:700';
}


add_filter('cpotheme_font_body', 'cpotheme_theme_fonts_body');
function cpotheme_theme_fonts_body($data){ 
	return 'Open+Sans';
}


add_filter('cpotheme_customizer_controls', 'cpotheme_theme_settings');
function cpotheme_theme_settings($data){ 
	$data['home_posts']['default'] = true;
	$data['home_features']['default'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
	return $data;
}


add_filter('cpotheme_background_args', 'cpotheme_background_args');
function cpotheme_background_args($data){ 
	$data = array(
	'default-color' => '#f0f0f8',
	'default-image' => get_template_directory_uri().'/images/background.png',
	'default-repeat' => 'repeat',
	'default-position-x' => 'center',
	'default-attachment' => 'fixed',
	);
	return $data;
}