<?php

//require_once( '_autoloader.php' );
require_once( '../src/SmartFocus.php' );

$login = 'motoblouz_api';
$pwd = 'motoblouzpwd_1';
$key = 'CdX7Cr5L4kWAk0xSRdgQuoqOEjEFeNKxhke4EZkGaaED_5YezHA';

$smartFocus = new SmartFocus('emvapi.emv3.com');

/*
 * Test connection
 */
$res = $smartFocus->auth->openApiConnection($login, $pwd, $key);
print_r($res);