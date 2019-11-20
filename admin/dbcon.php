<?php
    /*
    $host = "185.98.131.94";
    $user = "wigcc1225990";
    //$password = "root";
    $password = "qyvspla8qm";
    $database_name = "wigcc1225990";
    */
    $host = "localhost";
    $user = "root";
    //$password = "root";
    $password = "";
    $database_name = "wigcfinal";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ));
?>
