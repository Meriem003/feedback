<?php 
$servername = "localhost";
$user_name = "root";
$password = "";
$dbname = "feedback";
try{
    $dns = "mysql:host=".$servername.";dbname=".$dbname;
    $pdo = new PDO ($dns,$user_name,$password);
}catch(PDOException $e){
    echo"error conn";
}
