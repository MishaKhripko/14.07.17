<?php
use \Project;

include_once 'vendor/autoload.php';
include_once 'config.php';

echo "Не виводиться \$username".\$username;
try{
    $connection = new PDO("mysql:host=".\$servername, \$username, \$password);
    $sql = "CREATE DATABASE university";
    $connection = exec($sql);
    if ($connection) echo "+"; else echo "-";
}
catch(PDOException $ex){
    echo $ex->getMessage();
}