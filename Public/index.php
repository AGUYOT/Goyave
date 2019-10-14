<?php

require('../Kernel.php');
require('../vendor/autoload.php');

// -----
// you want all errors to be triggered
error_reporting(E_ALL);
ini_set('display_errors', '1');
// -----

 $kernel = new Kernel();
 $kernel->handle();