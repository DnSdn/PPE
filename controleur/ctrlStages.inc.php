<?php
include_once("./modele/modele.inc.php");
include_once("./controleur/ctrlVerification.inc.php");
if (!isset($connection) || $connection != null) {
    $connexion = connecter();
}
if ($_SESSION['ROLE']='etudiant') {
	$centre="./vue/pageBloquer.inc.php";
}else{
	$centre= "./vue/vueStages.inc.php";
}


$entete= "./vue/vueMenuAdmin.inc.php"; 
include("./vue/template.inc.php");
?>