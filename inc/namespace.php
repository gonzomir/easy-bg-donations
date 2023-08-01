<?php

namespace Gonzo\Easy_BG_Donations;

/**
 * Register hooks.
 *
 * @return void
 */
function bootstrap() {
	add_action( 'plugins_loaded', __NAMESPACE__ . '\\load_textdomain' );
}

/**
 * Load translations.
 *
 * @return void
 */
function load_textdomain() {
	load_plugin_textdomain( 'ebd', false, basename( dirname ( __DIR__ ) ) . '/languages/' );
}
