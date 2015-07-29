<?php
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__FILE__)).DS);
define("APP_PATCH", ROOT."lib".DS);
define("CONFIG_PATCH", ROOT."config".DS);
define("VENDOR_PATCH", ROOT."vendor".DS);
	/*incluyendo */
	require_once CONFIG_PATCH."application.php";

	require_once APP_PATCH."ORM/database_provider.php";
	require_once APP_PATCH."ORM/mysql_provider.php";
	require_once APP_PATCH."ORM/database.php";
	require_once APP_PATCH."ORM/orm.php";	

	require_once VENDOR_PATCH."plates/src/Extension/ExtensionInterface.php";
	require_once VENDOR_PATCH."plates/src/Template/Data.php";
	require_once VENDOR_PATCH."plates/src/Template/Directory.php";
	require_once VENDOR_PATCH."plates/src/Template/FileExtension.php";
	require_once VENDOR_PATCH."plates/src/Template/Folders.php";
	require_once VENDOR_PATCH."plates/src/Template/Func.php";
	require_once VENDOR_PATCH."plates/src/Template/Functions.php";
	require_once VENDOR_PATCH."plates/src/Template/Name.php";
	require_once VENDOR_PATCH."plates/src/Template/Template.php";
	require_once VENDOR_PATCH."plates/src/Engine.php";

	// Create new Plates instance
	$templates = new League\Plates\Engine('app/views/layout');

	// Render a template
	echo $templates->render('profile', array( "name"=>"Aaron ..."));

	

?>