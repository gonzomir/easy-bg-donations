<?php

namespace Gonzo\Easy_BG_Donations\Blocks;

require __DIR__ . '/donate-epay/index.php';
require __DIR__ . '/donate-paypal/index.php';

Donate_Epay\bootstrap();
Donate_PayPal\bootstrap();
