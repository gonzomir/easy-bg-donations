<?php
/**
 * Plugin Name: Easy BG Donations
 * Plugin URI: https://github.com/gonzomir/easy-bg-donations
 * Description: Accept donations with payment gateways, popular in Bulgaria.
 * Version: 0.1
 * Author: Milen Petrinski - Gonzo
 * Author URI: https://greatgonzo.net
 * License: GPLv3 or later
 * License URI: https://www.gnu.org/licenses/gpl.html
 * Text Domain: ebd
 * Domain Path: /languages
 */

namespace Gonzo\Easy_BG_Donations;

require __DIR__ . '/inc/namespace.php';
require __DIR__ . '/inc/settings.php';

require __DIR__ . '/blocks/namespace.php';

bootstrap();
Settings\bootstrap();
