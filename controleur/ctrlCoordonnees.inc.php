<?php
include_once("./modele/modele.inc.php");
include_once("./controleur/ctrlVerification.inc.php");
if (!isset($connection) || $connection != null) {
    $connexion = connecter();
}
$login=$_SESSION['login'];
coordonneesUtilisateur($connexion, $login);

$entete= "./vue/vueMenuAdmin.inc.php"; 
$centre= "./vue/vueCoordonnees.inc.php";
include("./vue/template.inc.php");
?>