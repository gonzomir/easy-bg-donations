<?php
/**
 * Plugin Name: Easy BG Donation
 * Description: Accept donations with payment gateways, popular in Bulgaria.
 * Version: 1.0
 * Author: Milen Petrinski - Gonzo
 * Author URI: https://greatgonzo.net
 * License: GPLv2 or later
 */

namespace Gonzo\Easy_BG_Donations;

require __DIR__ . '/inc/namespace.php';
require __DIR__ . '/inc/settings.php';

require __DIR__ . '/blocks/namespace.php';

bootstrap();
Settings\bootstrap();
