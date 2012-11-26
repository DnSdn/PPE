<?php
include_once("./modele/modele.inc.php");
if (!isset($connection) || $connection != null) {
    $connexion = connecter();
}


$entete= "./vue/vueMenuAdmin.inc.php"; 
$centre= "./vue/vueVisites.inc.php";
include("./vue/template.inc.php");
?>