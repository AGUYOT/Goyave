<?php

require('../Kernel.php');

spl_autoload_register(function($className) {
	$className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
	include_once $_SERVER['DOCUMENT_ROOT'] . '/Goyave/' . $className . '.php';
});

// -----
// you want all errors to be triggered
error_reporting(E_ALL);
ini_set('display_errors', '1');
// -----

 $kernel = new Kernel();
 $kernel->handle();