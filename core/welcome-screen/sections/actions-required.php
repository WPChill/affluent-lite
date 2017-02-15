<?php
/**
 * Actions required
 */
wp_enqueue_style( 'plugin-install' );
wp_enqueue_script( 'plugin-install' );
wp_enqueue_script( 'updates' );
?>

<div class="feature-section action-required demo-import-boxed" id="plugin-filter">

	<?php
	global $affluent_required_actions;
	if ( ! empty( $affluent_required_actions ) ):
		/* affluent_show_required_actions is an array of true/false for each required action that was dismissed */
		$affluent_show_required_actions = get_option( "affluent_show_required_actions" );
		foreach ( $affluent_required_actions as $affluent_required_action_key => $affluent_required_action_value ):
			$hidden = false;
			if ( @$affluent_show_required_actions[ $affluent_required_action_value['id'] ] === false ) {
				$hidden = true;
			}
			if ( @$affluent_required_action_value['check'] ) {
				continue;
			}
			?>
			<div class="affluent-action-required-box">
				<?php if ( ! $hidden ): ?>
					<span data-action="dismiss" class="dashicons dashicons-visibility affluent-required-action-button"
					      id="<?php echo esc_attr( $affluent_required_action_value['id'] ); ?>"></span>
				<?php else: ?>
					<span data-action="add" class="dashicons dashicons-hidden affluent-required-action-button"
					      id="<?php echo esc_attr( $affluent_required_action_value['id'] ); ?>"></span>
				<?php endif; ?>
				<h3><?php if ( ! empty( $affluent_required_action_value['title'] ) ): echo $affluent_required_action_value['title']; endif; ?></h3>
				<p>
					<?php if ( ! empty( $affluent_required_action_value['description'] ) ): echo $affluent_required_action_value['description']; endif; ?>
					<?php if ( ! empty( $affluent_required_action_value['help'] ) ): echo '<br/>' . $affluent_required_action_value['help']; endif; ?>
				</p>
				<?php
				if ( ! empty( $affluent_required_action_value['plugin_slug'] ) ) {
					$active = $this->check_active( $affluent_required_action_value['plugin_slug'] );
					$url    = $this->create_action_link( $active['needs'], $affluent_required_action_value['plugin_slug'] );
					$label  = '';
					switch ( $active['needs'] ) {
						case 'install':
							$class = 'install-now button';
							$label = __( 'Install', 'affluent' );
							break;
						case 'activate':
							$class = 'activate-now button button-primary';
							$label = __( 'Activate', 'affluent' );
							break;
						case 'deactivate':
							$class = 'deactivate-now button';
							$label = __( 'Deactivate', 'affluent' );
							break;
					}
					?>
					<p class="plugin-card-<?php echo esc_attr( $affluent_required_action_value['plugin_slug'] ) ?> action_button <?php echo ( $active['needs'] !== 'install' && $active['status'] ) ? 'active' : '' ?>">
						<a data-slug="<?php echo esc_attr( $affluent_required_action_value['plugin_slug'] ) ?>"
						   class="<?php echo $class; ?>"
						   href="<?php echo esc_url( $url ) ?>"> <?php echo $label ?> </a>
					</p>
					<?php
				};
				?>
			</div>
			<?php
		endforeach;
	endif;
	$nr_actions_required = 0;
	/* get number of required actions */
	if ( get_option( 'affluent_show_required_actions' ) ):
		$affluent_show_required_actions = get_option( 'affluent_show_required_actions' );
	else:
		$affluent_show_required_actions = array();
	endif;
	if ( ! empty( $affluent_required_actions ) ):
		foreach ( $affluent_required_actions as $affluent_required_action_value ):
			if ( ( ! isset( $affluent_required_action_value['check'] ) || ( isset( $affluent_required_action_value['check'] ) && ( $affluent_required_action_value['check'] == false ) ) ) && ( ( isset( $affluent_show_required_actions[ $affluent_required_action_value['id'] ] ) && ( $affluent_show_required_actions[ $affluent_required_action_value['id'] ] == true ) ) || ! isset( $affluent_show_required_actions[ $affluent_required_action_value['id'] ] ) ) ) :
				$nr_actions_required ++;
			endif;
		endforeach;
	endif;
	if ( $nr_actions_required == 0 ):
		echo '<span class="hooray">' . __( 'Hooray! There are no required actions for you right now.', 'affluent' ) . '</span>';
	endif;
	?>

</div>