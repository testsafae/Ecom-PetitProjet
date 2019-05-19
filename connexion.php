<?php
$user = "root";
$pass="";
$dbName="ecom";
try{
    $db = new PDO('mysql:host=localhost;dbname='.$dbName, $user, $pass);
}catch(Exception $e){
    echo 'Error: ',  $e->getMessage(), "\n";
    die();
}
?>