<?php

require( '_SplClassLoader.php' );

$loader = new SplClassLoader( 'SmartFocus', '../src/' );
$loader->register();