<?php
define("DS",DIRECTORY_SEPARATOR);
define("APPLICATON_PATH",'');
define("AP",APPLICATON_PATH);
define("PAGE_NOT_FOUND","notfound");
define("WEB_DIR","protected");
#define("CONTROLLER", "admin");
#define('PAGE_MAIN', 'index');


include "GS/app/class.php";
include "GS/auto/class.php";
include "GS/auto/path.php";
include "GS/auto/loader.php";
include "GS/controller/class.php";
include "GS/view/class.php";
include "GS/section/class.php";

$app = new GS_App_Class();
$app->setDefaultController('admin');
$app->setDefaultPage('index');
$app->run();

?>