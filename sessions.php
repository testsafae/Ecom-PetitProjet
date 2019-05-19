

<?php
//demarrer les sessions
session_start();
//condition sur le panier
if(!isset($_SESSION["panier"]))
    $_SESSION["panier"]=array();