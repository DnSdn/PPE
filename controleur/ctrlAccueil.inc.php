<?php
    include_once("./modele/modele.inc.php");
    include_once("./controleur/ctrlVerification.inc.php");
    if (!isset($connection) || $connection != null) {
        $connexion = connecter();
    }
    $entete= "./vue/vueMenuAdmin.inc.php"; 
    $centre= "./vue/vueAccueil.inc.php";
    include("./vue/template.inc.php");
?>
