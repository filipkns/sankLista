<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_password=NUll;
$mysql_database='sanklista';

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);

if(!$conn){
    
    die(mysqli_error());
}




?>
