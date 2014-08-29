<?php

require_once( '_autoloader.php' );

use SmartFocus\Core\Auth\Auth;

$auth = new Auth(array('server' => 'hama.emv3.com', 'mouth' => 'Boufmouth'));