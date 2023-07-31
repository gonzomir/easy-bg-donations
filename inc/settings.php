<?php

namespace Gonzo\Easy_BG_Donations\Settings;

/**
 * Register hooks.
 *
 * @return void
 */
function bootstrap() {
	add_action( 'admin_init', __NAMESPACE__ . '\\register_settings' );
	add_action( 'admin_menu', __NAMESPACE__ . '\\admin_menu' );
}

function register_settings() {

	add_settings_section(
		'ebd_paypal',
		__( 'PayPal', 'ebd' ),
		function () {
			esc_html_e( 'PayPal settings.', 'ebd' );
		},
		'ebd'
	);

	add_settings_field(
		'ebd_paypal_business',
		__( 'PayPal Business', 'ebd' ),
		function() {
			printf(
				'<input name="%1$s" id="%1$s" value="%2$s" class="regular-text" type="email">',
				esc_attr( 'ebd_paypal_business' ),
				esc_attr( get_option( 'ebd_paypal_business' ) )
			);
		},
		'ebd',
		'ebd_paypal',
		[
			'label_for' => 'ebd_paypal_business',
		]
	);

	register_setting(
		'ebd',
		'ebd_paypal_business',
		[
			'sanitize_callback' => 'sanitize_text_field',
			'type'              => 'string',
		]
	);

	add_settings_field(
		'ebd_paypal_bn',
		__( 'PayPal Button Identifier', 'ebd' ),
		function() {
			printf(
				'<input name="%1$s" id="%1$s" value="%2$s" class="regular-text" type="text">',
				esc_attr( 'ebd_paypal_bn' ),
				esc_attr( get_option( 'ebd_paypal_bn' ) )
			);
		},
		'ebd',
		'ebd_paypal',
		[
			'label_for' => 'ebd_paypal_bn',
		]
	);

	register_setting(
		'ebd',
		'ebd_paypal_bn',
		[
			'sanitize_callback' => 'sanitize_text_field',
			'type'              => 'string',
		]
	);

	add_settings_field(
		'ebd_paypal_item_name',
		__( 'Item name', 'ebd' ),
		function() {
			printf(
				'<input name="%1$s" id="%1$s" value="%2$s" class="regular-text" type="text">',
				esc_attr( 'ebd_paypal_item_name' ),
				esc_attr( get_option( 'ebd_paypal_item_name' ) )
			);
		},
		'ebd',
		'ebd_paypal',
		[
			'label_for' => 'ebd_paypal_item_name',
		]
	);

	register_setting(
		'ebd',
		'ebd_paypal_item_name',
		[
			'sanitize_callback' => 'sanitize_text_field',
			'type'              => 'string',
		]
	);

	add_settings_field(
		'ebd_paypal_return_url',
		__( 'Return URL', 'ebd' ),
		function() {
			printf(
				'<input name="%1$s" id="%1$s" value="%2$s" class="regular-text" type="url">',
				esc_attr( 'ebd_paypal_return_url' ),
				esc_attr( get_option( 'ebd_paypal_return_url' ) )
			);
		},
		'ebd',
		'ebd_paypal',
		[
			'label_for' => 'ebd_paypal_return_url',
		]
	);

	register_setting(
		'ebd',
		'ebd_paypal_return_url',
		[
			'sanitize_callback' => 'sanitize_text_field',
			'type'              => 'string',
		]
	);

	add_settings_section(
		'ebd_epay',
		__( 'ePay', 'ebd' ),
		function () {
			esc_html_e( 'ePay settings.', 'ebd' );
		},
		'ebd'
	);

	add_settings_field(
		'ebd_epay_min',
		__( 'ePay Merchant ID', 'ebd' ),
		function() {
			printf(
				'<input name="%1$s" id="%1$s" value="%2$s" class="regular-text" type="text">',
				esc_attr( 'ebd_epay_min' ),
				esc_attr( get_option( 'ebd_epay_min' ) )
			);
		},
		'ebd',
		'ebd_epay',
		[
			'label_for' => 'ebd_epay_min',
		]
	);

	register_setting(
		'ebd',
		'ebd_epay_min',
		[
			'sanitize_callback' => 'sanitize_text_field',
			'type'              => 'string',
		]
	);

	add_settings_field(
		'ebd_epay_item_name',
		__( 'Item name', 'ebd' ),
		function() {
			printf(
				'<input name="%1$s" id="%1$s" value="%2$s" class="regular-text" type="text">',
				esc_attr( 'ebd_epay_item_name' ),
				esc_attr( get_option( 'ebd_epay_item_name' ) )
			);
		},
		'ebd',
		'ebd_epay',
		[
			'label_for' => 'ebd_epay_item_name',
		]
	);

	register_setting(
		'ebd',
		'ebd_epay_item_name',
		[
			'sanitize_callback' => 'sanitize_text_field',
			'type'              => 'string',
		]
	);

	add_settings_field(
		'ebd_epay_ok_url',
		__( 'OK Return URL', 'ebd' ),
		function() {
			printf(
				'<input name="%1$s" id="%1$s" value="%2$s" class="regular-text" type="url">',
				esc_attr( 'ebd_epay_ok_url' ),
				esc_attr( get_option( 'ebd_epay_ok_url' ) )
			);
		},
		'ebd',
		'ebd_epay',
		[
			'label_for' => 'ebd_epay_ok_url',
		]
	);

	register_setting(
		'ebd',
		'ebd_epay_ok_url',
		[
			'sanitize_callback' => 'sanitize_text_field',
			'type'              => 'string',
		]
	);

	add_settings_field(
		'ebd_epay_error_url',
		__( 'Error Return URL', 'ebd' ),
		function() {
			printf(
				'<input name="%1$s" id="%1$s" value="%2$s" class="regular-text" type="url">',
				esc_attr( 'ebd_epay_error_url' ),
				esc_attr( get_option( 'ebd_epay_error_url' ) )
			);
		},
		'ebd',
		'ebd_epay',
		[
			'label_for' => 'ebd_epay_error_url',
		]
	);

	register_setting(
		'ebd',
		'ebd_epay_error_url',
		[
			'sanitize_callback' => 'sanitize_text_field',
			'type'              => 'string',
		]
	);
}

function admin_menu() {
	add_submenu_page(
		'options-general.php',
		__( 'Donations Settings', 'ebd' ),
		__( 'Donations Settings', 'ebd' ),
		'manage_options',
		'ebd',
		__NAMESPACE__ . '\\render_settings_page'
	);
}

function render_settings_page() {
	// Check user capabilities.
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	// Show error/update messages.
	// Looks like WordPress sets the messages automatically.
	settings_errors( 'ebd_messages' );

	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			<?php
			// Output security fields for the registered setting "minimal-share-buttons".
			settings_fields( 'ebd' );
			// Output setting sections and their fields.
			// Sections are registered for "ebd", each field is registered to a specific section.
			do_settings_sections( 'ebd' );
			// Output save settings button.
			submit_button( __( 'Save Settings', 'ebd' ) );
			?>
		</form>
	</div>
	<?php
}
