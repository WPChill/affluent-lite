<?php if(!isset($content_width)) $content_width = 640;
define('CPOTHEME_ID', 'affluent');
define('CPOTHEME_NAME', 'Affluent');
define('CPOTHEME_VERSION', '0.1.6');
//Other constants
define('CPOTHEME_LOGO_WIDTH', '175');
define('CPOTHEME_USE_SLIDES', true);
define('CPOTHEME_USE_FEATURES', true);
define('CPOTHEME_USE_PORTFOLIO', true);
define('CPOTHEME_USE_TESTIMONIALS', true);
define('CPOTHEME_PREMIUM_NAME', 'Affluent Pro');
define('CPOTHEME_PREMIUM_URL', '//cpothemes.com/theme/affluent');

// Add epsilon framework
require get_template_directory() . '/includes/libraries/epsilon-framework/class-epsilon-autoloader.php';
$epsilon_framework_settings = array(
		'controls' => array( 'toggle', 'upsell' ), // array of controls to load
		'sections' => array( 'recommended-actions', 'pro' ), // array of sections to load
		'path'     => '/includes/libraries'
	);
new Epsilon_Framework( $epsilon_framework_settings );

//Load Core; check existing core or load development core
$core_path = get_template_directory().'/core/';
if(defined('CPOTHEME_CORELITE')) $core_path = CPOTHEME_CORELITE;
require_once $core_path.'init.php';

$include_path = get_template_directory().'/includes/';

//Main components
require_once($include_path.'setup.php');

// Add welcome screen
require get_template_directory() . '/core/welcome-screen/welcome-page-setup.php';