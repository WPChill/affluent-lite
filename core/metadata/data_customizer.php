<?php 

//Define customizer sections
if(!function_exists('cpotheme_metadata_panels')){
	function cpotheme_metadata_panels(){
		$data = array();
		
		$data['cpotheme_layout'] = array(
		'title' => __('Layout', 'affluent'),
		'description' => __('Here you can find settings that control the structure and positioning of specific elements within your website.', 'affluent'),
		'priority' => 25);
		
		return apply_filters('cpotheme_customizer_panels', $data);
	}
}


//Define customizer sections
if(!function_exists('cpotheme_metadata_sections')){
	function cpotheme_metadata_sections(){
		$data = array();

		$data['epsilon-section-pro'] = array(
		'type' => 'epsilon-section-pro',
		'title'       => esc_html__( 'LITE vs PRO comparison', 'affluent' ),
		'button_text' => esc_html__( 'Learn more', 'affluent' ),
		'button_url'  => esc_url_raw( admin_url() . 'themes.php?page=cpotheme-welcome&tab=features' ),
		'priority'    => 0
		);
		
		$data['cpotheme_management'] = array(
		'title' => __('General Theme Options', 'affluent'),
		'description' => __('Options that help you manage your theme better.', 'affluent'),
		'capability' => 'edit_theme_options',
		'priority' => 15);
		
		$data['cpotheme_layout_general'] = array(
		'title' => __('Site Wide Structure', 'affluent'),
		'description' => sprintf(__('Upgrade to %s to control the layout of your sidebars and other global elements.', 'affluent'), cpotheme_upgrade_link()),
		'capability' => 'edit_theme_options',
		'panel' => 'cpotheme_layout',
		'priority' => 25);
		
		$data['cpotheme_layout_home'] = array(
		'title' => __('Homepage', 'affluent'),
		'description' => sprintf(__('Upgrade to %s to control the ordering of elements in the homepage as well as its behavior.', 'affluent'), cpotheme_upgrade_link()),
		'capability' => 'edit_theme_options',
		'panel' => 'cpotheme_layout',
		'priority' => 50);
		
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_SLIDES') && CPOTHEME_USE_SLIDES == true){
			$data['cpotheme_layout_slider'] = array(
			'title' => __('Slider', 'affluent'),
			'description' => sprintf(__('Upgrade to %s to customize the behavior of the slider.', 'affluent'), cpotheme_upgrade_link()),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(defined('CPOTHEME_USE_TAGLINE') && CPOTHEME_USE_TAGLINE == true){
			$data['cpotheme_layout_tagline'] = array(
			'title' => __('Tagline', 'affluent'),
			'description' => __('Customize the appearance and of the homepage tagline.', 'affluent'),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_FEATURES') && CPOTHEME_USE_FEATURES == true){
			$data['cpotheme_layout_features'] = array(
			'title' => __('Features', 'affluent'),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_PORTFOLIO') && CPOTHEME_USE_PORTFOLIO == true){
			$data['cpotheme_layout_portfolio'] = array(
			'title' => __('Portfolio', 'affluent'),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_SERVICES') && CPOTHEME_USE_SERVICES == true){
			$data['cpotheme_layout_services'] = array(
			'title' => __('Services', 'affluent'),
			'description' => sprintf(__('Upgrade to %s to control the number of columns for services.', 'affluent'), cpotheme_upgrade_link()),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_TEAM') && CPOTHEME_USE_TEAM == true){
			$data['cpotheme_layout_team'] = array(
			'title' => __('Team Members', 'affluent'),
			'description' => sprintf(__('Upgrade to %s to control the number of columns of the team section.', 'affluent'), cpotheme_upgrade_link()),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_TESTIMONIALS') && CPOTHEME_USE_TESTIMONIALS == true){
			$data['cpotheme_layout_testimonials'] = array(
			'title' => __('Testimonials', 'affluent'),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_CLIENTS') && CPOTHEME_USE_CLIENTS == true){
			$data['cpotheme_layout_clients'] = array(
			'title' => __('Clients', 'affluent'),
			'description' => sprintf(__('Upgrade to %s to customize the appearance of clients.', 'affluent'), cpotheme_upgrade_link()),
			'capability' => 'edit_theme_options',
			'panel' => 'cpotheme_layout',
			'priority' => 50);
		}
		
		$data['cpotheme_typography'] = array(
		'title' => __('Typography', 'affluent'),
		'description' => __('Custom typefaces for the entire site.', 'affluent'),
		'capability' => 'edit_theme_options',
		'priority' => 45);

		$data['cpotheme_layout_posts'] = array(
		'title' => __('Blog Posts', 'affluent'),
		'description' => sprintf(__('Upgrade to %s to control the appearance of specific elements in your blog posts such as dates, authors, or comments.', 'affluent'), cpotheme_upgrade_link()),
		'capability' => 'edit_theme_options',
		'panel' => 'cpotheme_layout',
		'priority' => 50);
		
		$data['cpotheme_typography'] = array(
		'title' => __('Typography', 'affluent'),
		'description' => sprintf(__('Upgrade to %s to control the gain full control over the typography of your site.', 'affluent'), cpotheme_upgrade_link()),
		'capability' => 'edit_theme_options',
		'priority' => 45);
		
		return apply_filters('cpotheme_customizer_sections', $data);
	}
}


if(!function_exists('cpotheme_metadata_customizer')){
	function cpotheme_metadata_customizer($std = null){
		$data = array();
		
		if(!function_exists('get_custom_logo')){
			$data['general_logo'] = array(
			'label' => __('Custom Logo', 'affluent'),
			'description' => __('Insert the URL of an image to be used as a custom logo.', 'affluent'),
			'section' => 'title_tagline',
			'sanitize' => 'esc_url',
			'type' => 'image');
		
			$data['general_logo_width'] = array(
			'label' => __('Logo Width (px)', 'affluent'),
			'description' => __('Forces the logo to have a specified width.', 'affluent'),
			'section' => 'title_tagline',
			'type' => 'text',
			'placeholder' => '(none)',
			'sanitize' => 'absint',
			'width' => '100px');
		}
		
		$data['general_texttitle'] = array(
		'label' => __('Enable Text Title?', 'affluent'),
		'description' => __('Activate this to display the site title as text.', 'affluent'),
		'section' => 'title_tagline',
		'type' => 'checkbox',
		'sanitize' => 'cpotheme_sanitize_bool',
		'default' => true);
		
		$data['general_editlinks'] = array(
		'label' => __('Show Edit Links', 'affluent'),
		'description' => __('Display edit links on the site layout for logged in users.', 'affluent'),
		'section' => 'cpotheme_management',
		'type' => 'checkbox',
		'sanitize' => 'cpotheme_sanitize_bool',
		'default' => true);
		
		//Homepage tagline
		if(defined('CPOTHEME_USE_TAGLINE') && CPOTHEME_USE_TAGLINE == true){
			$data['home_tagline'] = array(
			'label' => __('Tagline Title', 'affluent'),
			'section' => 'cpotheme_layout_tagline',
			'empty' => true,
			'multilingual' => true,
			'default' => __('Add your custom tagline title here.', 'affluent'),
			'sanitize' => 'wp_kses_post',
			'type' => 'text');
		}
		
		//Homepage Slider
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_SLIDES') && CPOTHEME_USE_SLIDES == true){
			$data['slider_settings'] = array(
			'label' => __('Slider Options', 'affluent'),
			'description' => __('Customize the speed, timeout and effects of the homepage slider.', 'affluent'),
			'section' => 'cpotheme_layout_slider',
			'type' => 'label');
		}
		
		//Homepage Features
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_FEATURES') && CPOTHEME_USE_FEATURES == true){
			$data['features_upsell'] = array(
			'section'      => 'cpotheme_layout_features',
			'type'		   => 'epsilon-upsell',
	        'options'      => array(
	            esc_html__( 'Features Columns', 'affluent' ),
	            esc_html__( 'Always display section', 'affluent' ),
	        ),
	        'requirements' => array(
	            esc_html__( 'You can select on how many Columns you want to show your features.', 'affluent' ),
	            esc_html__( 'In the PRO version you can show the homepage features in all pages.', 'affluent' ),
	        ),
	        'button_url'   => cpotheme_upgrade_link(),
	        'button_text'  => esc_html__( 'Get the PRO version!', 'affluent' ),
	        'button_url'   => esc_url_raw( get_admin_url() . 'themes.php?page=cpotheme-welcome&tab=features' ),
	        'button_text'  => esc_html__( 'See PRO vs Lite', 'affluent' ),
	        'second_button_url'  => cpotheme_upgrade_link(),
	        'second_button_text' => esc_html__( 'Get the PRO version!', 'affluent' ),
	        'separator' => '- or -'
			);

			$data['home_features'] = array(
			'label' => __('Features Description', 'affluent'),
			'section' => 'cpotheme_layout_features',
			'empty' => true,
			'multilingual' => true,
			'default' => __('Our core features', 'affluent'),
			'sanitize' => 'wp_kses_post',
			'type' => 'text');
		}
		
		//Portfolio layout
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_PORTFOLIO') && CPOTHEME_USE_PORTFOLIO == true){

			$data['portfolio_upsell'] = array(
			'section'      => 'cpotheme_layout_portfolio',
			'type'		   => 'epsilon-upsell',
	        'options'      => array(
	            esc_html__( 'Portfolio Columns', 'affluent' ),
	            esc_html__( 'Related Portfolios', 'affluent' ),
	            esc_html__( 'Always display section', 'affluent' ),
	        ),
	        'requirements' => array(
	            esc_html__( 'You can select on how many Columns you want to show your portfolio.', 'affluent' ),
	            esc_html__( 'You can enable related portfolio.', 'affluent' ),
	            esc_html__( 'In the PRO version you can show the homepage portfolio in all pages.', 'affluent' ),
	        ),
	        'button_url'   => esc_url_raw( get_admin_url() . 'themes.php?page=cpotheme-welcome&tab=features' ),
	        'button_text'  => esc_html__( 'See PRO vs Lite', 'affluent' ),
	        'second_button_url'  => cpotheme_upgrade_link(),
	        'second_button_text' => esc_html__( 'Get the PRO version!', 'affluent' ),
	        'separator' => '- or -'
			);

			$data['home_portfolio'] = array(
			'label' => __('Portfolio Description', 'affluent'),
			'section' => 'cpotheme_layout_portfolio',
			'empty' => true,
			'multilingual' => true,
			'default' => __('Take a look at our work', 'affluent'),
			'sanitize' => 'wp_kses_post',
			'type' => 'text');
		}
		
		//Services layout
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_SERVICES') && CPOTHEME_USE_SERVICES == true){
			$data['home_services'] = array(
			'label' => __('Services Description', 'affluent'),
			'section' => 'cpotheme_layout_services',
			'empty' => true,
			'multilingual' => true,
			'default' => __('What we can offer you', 'affluent'),
			'sanitize' => 'wp_kses_post',
			'type' => 'text');
		}
		
		//Services layout
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_TEAM') && CPOTHEME_USE_TEAM == true){
			$data['home_team'] = array(
			'label' => __('Team Members Description', 'affluent'),
			'section' => 'cpotheme_layout_team',
			'empty' => true,
			'multilingual' => true,
			'default' => __('Meet our team', 'affluent'),
			'sanitize' => 'wp_kses_post',
			'type' => 'text');
		}
		
		//Testimonials
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_TESTIMONIALS') && CPOTHEME_USE_TESTIMONIALS == true){

			$data['features_upsell'] = array(
			'section'      => 'cpotheme_layout_testimonials',
			'type'		   => 'epsilon-upsell',
	        'options'      => array(
	            esc_html__( 'Always display section', 'affluent' ),
	        ),
	        'requirements' => array(
	            esc_html__( 'In the PRO version you can show the homepage testimonials in all pages.', 'affluent' ),
	        ),
	        'button_url'   => cpotheme_upgrade_link(),
	        'button_text'  => esc_html__( 'Get the PRO version!', 'affluent' ),
	        'button_url'   => esc_url_raw( get_admin_url() . 'themes.php?page=cpotheme-welcome&tab=features' ),
	        'button_text'  => esc_html__( 'See PRO vs Lite', 'affluent' ),
	        'second_button_url'  => cpotheme_upgrade_link(),
	        'second_button_text' => esc_html__( 'Get the PRO version!', 'affluent' ),
	        'separator' => '- or -'
			);

			$data['home_testimonials'] = array(
			'label' => __('Testimonials Description', 'affluent'),
			'section' => 'cpotheme_layout_testimonials',
			'empty' => true,
			'multilingual' => true,
			'default' => __('What they say about us', 'affluent'),
			'sanitize' => 'wp_kses_post',
			'type' => 'text');
		}
		
		//Clients
		if(function_exists('ctct_setup') && defined('CPOTHEME_USE_CLIENTS') && CPOTHEME_USE_CLIENTS == true){
			$data['home_clients'] = array(
			'label' => __('Clients Description', 'affluent'),
			'section' => 'cpotheme_layout_clients',
			'empty' => true,
			'multilingual' => true,
			'default' => __('Featured clients', 'affluent'),
			'sanitize' => 'wp_kses_post',
			'type' => 'text');
		}
		
		//Typography
		$data['type_settings'] = array(
		'label' => __('Typography Options', 'affluent'),
		'description' => __('Select custom fonts for the headings, navigation, and body text of your site.', 'affluent'),
		'section' => 'cpotheme_typography',
		'type' => 'label');
		
		//Colors		
		$data['color_settings'] = array(
		'label' => __('Color Options', 'affluent'),
		'description' => __('Customize the colors of primary and secondary elements, as well as headings, navigation, and text.', 'affluent'),
		'section' => 'colors',
		'type' => 'label');
		
		return apply_filters('cpotheme_customizer_controls', $data);
	}
}