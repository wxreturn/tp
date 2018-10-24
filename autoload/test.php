<?php
	
use tp\autoload\Controller;
use tp\autoload\Model;
//use tp\autoload2\View;

function wp($content)
{
	echo "<pre>" . $content . "</pre>";
}


define('APP_PATH', 'g:\\tp\\');

function wxautoload($class)
{
	$aliasNamespace = array(
			'tp\\autoload' => APP_PATH . "autoload\\",
			'tp\\autoload2' => APP_PATH . "autoload2\\"
	);

	$namespace = dirname($class);		
	$original = $aliasNamespace[$namespace] . basename($class);

	require($original.'.php'); 

}

spl_autoload_register('wxautoload');

// $c = new Controller();
// $m = new Model();	
// v = new \tp\autoload2\View();























	
	
	
	