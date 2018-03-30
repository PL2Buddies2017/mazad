<?php
ini_set('display_errors', 1);//this for show errs
error_reporting(~0);// the same target
$dirAsString="";
$explodedDirs = explode("/", __DIR__);
for($i=0;$i<999;$i++){
    $dirAsString.= $explodedDirs[$i] . "/";
    if($explodedDirs[$i] == 'mazad')break;
}
echo $dirAsString;
/* START OF DEFINES */
define("ROOT_DIR", __DIR__); // to get root file of project
define("ROOT_APP", $dirAsString); // to get root app of project
define("SEP", "/"); // to set our separator
define("STYLE_DIR",     "css/styles/"); // set STYLE dir *************
define("INCLUDES_DIR",  ROOT_APP . "includes/TPL/");
define("CLASS_DIR",     ROOT_APP . "class/");
define("CONFIG_DIR",    ROOT_APP . "config/");
define("PROFILE_POPS",  INCLUDES_DIR ."profile_pops/");
define("IMG_DIR",       ROOT_APP . "imgs/");
define("JS_DIR",        "js/");
define("UPLOADS_DIR",   ROOT_APP . "uploads/");
define("STYLE_EX",".css"); // set exetention of style
define("HOST", "localhost");// host name
define("DB_NAME", "mazad"); // name of data base
define("DB_USER", "root"); // user name of database
define("DB_PASS", "1234A"); // password of data base
/* END OF DEFINES */
//include_once CLASS_DIR . "autoLoader.class.php";

