<?php
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__FILE__)).DS);
define("APP_PATCH", ROOT."lib".DS);
define("CONFIG_PATCH", ROOT."config".DS);

	require_once CONFIG_PATCH."application.php";
	require_once APP_PATCH."ORM/database_provider.php";
	require_once APP_PATCH."ORM/mysql_provider.php";
	require_once APP_PATCH."ORM/database.php";
	require_once APP_PATCH."ORM/orm.php";

	print_r($application);

	$rom = new ORM();
	

?>