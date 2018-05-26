<?php
define("APP_PATH",  realpath(dirname(__FILE__) . '/../')); 
define ("APPLICATION_PATH", APP_PATH . "/application");
/* 指向public的上一级 */
$app  = new Yaf_Application(APP_PATH . "/conf/application.ini");
$app->bootstrap()->run();