<?php 

	$GLOBALS['mysql'] = array(
		'host' => 'localhost:4306',
		'username' => 'root',
		'password' => '',
		'database' => 'fatheent777_gnaritus_cms'
	);


	function myAutoload($class) 
 {
   require_once 'classes/' . $class . '.php';
 }

 spl_autoload_register('myAutoload');



?>