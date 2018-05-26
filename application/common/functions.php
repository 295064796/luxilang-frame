<?php
function luxilang(){
    echo 'luxlang_fun_test ! <br />';
}
function db(){
    $config = Yaf_Application::app()->getConfig();
    $db_type = $config->database->type;
    $db_host = $config->database->host;
    $db_name = $config->database->name;
    $db_user = $config->database->user;
    $db_pwd = $config->database->pwd;
    require_once 'ez_sql_core.php'; 
    switch ($db_type) {
        case 'pdo':
            require_once "ez_sql_pdo.php";
            $db = new ezSQL_pdo("mysql={$db_host};dbname={$db_name}", $db_user, $db_pwd);
            break;
        case 'mysqli':
            require_once "ez_sql_mysqli.php";
            $db = new ezSQL_mysqli($db_user,$db_pwd,$db_name,$db_host);
            break;
    
        default:
            require_once "ez_sql_mysqli.php";
            $db = new ezSQL_mysqli($db_user,$db_pwd,$db_name,$db_host);
            break;
    }
    
    return $db;
}