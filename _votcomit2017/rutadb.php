<?php

session_start();

define('DEBUG', TRUE);

if (DEBUG) {
    ini_set('display_errors', 1);
    ini_set('error_reporting', E_ALL & ~E_DEPRECATED);
}

function debug($var) {
    if (DEBUG) {
        print "<pre>";
        print_r($var);
        print "</pre>";
    }
}

$hostname = 'localhost';
$username = 'coopent_admcoop';
$userpass = 'd41s98+74w';
$database = 'coopent_contenid';
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $hostname = 'localhost';
    $username = 'root';
    $userpass = 'root';
    $database = 'keines_coopent';
}

if ($_SERVER['SERVER_NAME'] == 'devel.cooperativaentel.com.pe') {
    $hostname = 'localhost';
    $username = 'root';
    $userpass = 'root';
    $database = 'keines_coopent';
}

$conexion = mysql_connect($hostname, $username, $userpass) or die("Problemas en la conexion");
mysql_select_db($database, $conexion) or die("Problemas en la selecci&oacute;n de la base de datos");
?>