<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 14.07.17
 * Time: 9:26
 */
namespace Dr;
//use \Project;

include_once 'vendor/autoload.php';
include_once 'config.php';

echo "111".\$username;
/*try{
    $connection = new PDO("mysql:host=".\$servername, \$username, \$password);
    $sql = "CREATE DATABASE university";
    $connection = exec($sql);
    if ($connection) echo "+"; else echo "-";
}
catch(PDOException $ex){
    echo $ex->getMessage();
}*/