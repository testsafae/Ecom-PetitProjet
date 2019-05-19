<?php
require_once("connexion.php");
$sql = "SELECT * FROM produits ";



if(isset($_GET["type"]))


$sql=$sql . " where type ='".$_GET["type"]."'";//requete SQL


$stmt = $db->query($sql);//executer 


$products = $stmt->fetchAll(PDO::FETCH_ASSOC);//tableau associatif


?>