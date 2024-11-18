<?php
	$_SERVER['HTTP_ACCEPT_LANGUAGE'] = "en";
	define('APP_HOST', "https://" . $_SERVER['SERVER_NAME'] . "/");
	ob_start();
	include(dirname(__FILE__).'/config/config.php');
	$app = new Application();
	$app->setDefault('user.index.index');
	$app->run();
?>