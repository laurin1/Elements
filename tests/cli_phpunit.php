<?php
//Fix for no server variables
define("_PRODTESTDEV", "DEV");

set_time_limit(300);

$_SERVER["DOCUMENT_ROOT"] = str_replace("\\phpunit", "", __DIR__)."\\";
$_SERVER["REMOTE_USER"]   = "pridedallas\\".$_SERVER["USERNAME"];
$_SERVER["REMOTE_ADDR"]   = gethostbyname($_SERVER["COMPUTERNAME"]);
$_SERVER["SERVER_PORT"]   = 9100;
$_SERVER["QUERY_STRING"]  = null;
$_SERVER["SERVER_NAME"]   = "localhost";
$_SERVER["REQUEST_URI"]   = "placeholder";

define("_PHPUNITTEST", true);

require_once "../vendor/autoload.php"; //maybe after **24235** this can be removed?