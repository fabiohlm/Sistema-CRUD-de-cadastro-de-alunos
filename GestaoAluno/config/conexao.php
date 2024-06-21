<?php
$host= "localhost"; 
$port= "3306"; 
$dbname="bdaula"; 
$user="root"; 
$pass=""; 
try{
    $conn= new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    $erro= $e->getMessage();
    echo $erro;
}
?>
