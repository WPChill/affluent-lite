<?php
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Features
 */

$features = array(
	'slider-options'    => array(
		'label'   => esc_html__( 'Improved Slider Options', 'affluent' ),
		'sub'     => esc_html__( 'Add more slides, control the appearance & position of slides.', 'affluent' ),
		'cpo'     => '<span class="dashicons dashicons-no-alt"></span>',
		'cpo-pro' => '<span class="dashicons dashicons-yes"></span></i>'
	),
	'woocommerce'       => array(
		'label'   => esc_html__( 'WooCommerce Support', 'affluent' ),
		'sub'     => esc_html__( 'Create a WooCommerce powered shop. Supports WooCommerce v3.x and upwards', 'affluent' ),
		'cpo'     => '<span class="dashicons dashicons-no-alt"></span>',
		'cpo-pro' => '<span class="dashicons dashicons-yes"></span></i>'
	),
	'reorder-sections'  => array(
		'label'   => esc_html__( 'Reorder Homepage Sections', 'affluent' ),
		'sub'     => esc_html__( 'Re-order your site\'s front-page sections in any way you want.', 'affluent' ),
		'cpo'     => '<span class="dashicons dashicons-no-alt"></span>',
		'cpo-pro' => '<span class="dashicons dashicons-yes"></span></i>'
	),
	'custom-colors'     => array(
		'label'   => esc_html__( 'Custom Color Schemes & Color Controls', 'affluent' ),
		'sub'     => esc_html__( 'Easily change your site\'s color schemes.', 'affluent' ),
		'cpo'     => '<span class="dashicons dashicons-no-alt"></span>',
		'cpo-pro' => '<span class="dashicons dashicons-yes"></span></i>'
	),
	'typography'        => array(
		'label'   => esc_html__( 'Custom Typography Controls', 'affluent' ),
		'sub'     => esc_html__( 'Want a different font family? No problem. Just an upgrade away.', 'affluent' ),
		'cpo'     => '<span class="dashicons dashicons-no-alt"></span>',
		'cpo-pro' => '<span class="dashicons dashicons-yes"></span></i>'
	),
	'homepage' => array(
		'label'   	=> __( 'Show/Hide breadcrumbs, language switcher, shopping cart and credit link', 'affluent' ),
		'cpo'     => '<span class="dashicons dashicons-no-alt"></span>',
		'cpo-pro' => '<span class="dashicons dashicons-yes"></span></i>'
	),
	'footer' => array(
		'label'   	=> __( 'Footer widgets organized in columns', 'affluent' ),
		'cpo'     => '<span class="dashicons dashicons-no-alt"></span>',
		'cpo-pro' => '<span class="dashicons dashicons-yes"></span></i>'
	),
	'copyright' => array(
		'label'   	=> __( 'Add Copyright text to footer', 'affluent' ),
		'cpo'     => '<span class="dashicons dashicons-no-alt"></span>',
		'cpo-pro' => '<span class="dashicons dashicons-yes"></span></i>'
	),
	'social-icons' => array(
		'label'   	=> __( 'Add social icons to footer', 'affluent' ),
		'cpo'     => '<span class="dashicons dashicons-no-alt"></span>',
		'cpo-pro' => '<span class="dashicons dashicons-yes"></span></i>'
	),
	'dedicated-support' => array(
		'label'   => esc_html__( 'Dedicated Support Team', 'affluent' ),
		'cpo'     => '<span class="dashicons dashicons-yes"></span>',
		'cpo-pro' => '<span class="dashicons dashicons-yes"></span></i>'
	),
	'security-updates'  => array(
		'label'   => esc_html__( 'Critical security updates ', 'affluent' ),
		'cpo'     => '<span class="dashicons dashicons-yes"></span>',
		'cpo-pro' => '<span class="dashicons dashicons-yes"></span></i>'
	),

	'featured-updates' => array(
		'label'   => esc_html__( 'Future feature updates ', 'affluent' ),
		'cpo'     => '<span class="dashicons dashicons-no-alt"></span>',
		'cpo-pro' => '<span class="dashicons dashicons-yes"></span></i>'
	),
);
?>
<div class="featured-section features">
    <table class="free-pro-table">
        <thead>
        <tr>
            <th></th>
            <th><?php _e( 'Lite', 'affluent' ) ?></th>
            <th><?php _e( 'PRO', 'affluent' ) ?></th>
        </tr>
        </thead>
        <tbody>
		<?php foreach ( $features as $feature ): ?>
            <tr>
	            <td class="feature">
		            <h3><?php echo $feature['label']; ?></h3>
		            <?php if ( isset( $feature['sub'] ) ): ?>
		            	<p><?php echo $feature['sub']; ?></p>
		            <?php endif ?>
	            </td>
                <td class="cpo-feature">
					<?php echo $feature['cpo']; ?>
                </td>
                <td class="cpo-pro-feature">
					<?php echo $feature['cpo-pro']; ?>
                </td>
            </tr>
		<?php endforeach; ?>
        <tr>
            <td></td>
            <td colspan="2" class="text-right"><a href="//www.cpothemes.com/theme/affluent?utm_source=affluent&utm_medium=about-page&utm_campaign=upsell" target="_blank"
                               class="button button-primary button-hero"><span class="dashicons dashicons-cart"></span><?php _e( 'Get The Pro Version Now!', 'affluent' ) ?></a></td>
        </tr>
        </tbody>
    </table>
</div>