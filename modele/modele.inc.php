<?php
session_start();
define('USER','root');
define('MDP', '');
define('DSN', 'mysql:host=localhost;dbname=GestionStage');

function connecter() {
    try {
        $connexion = new PDO(DSN, USER, MDP);
//        $sql ="SET NAMES latin1_german1_ci";
        $sql ="SET NAMES utf8";
        $stmt = $connexion->query($sql);
        //echo "connexion réussie";
    } catch (PDOException $e) {
        echo "Erreur ! : " . $e->getMessage() . "<br />";
        $connexion = null;
    }
    return $connexion;
}

function typeUtilisateur($conn, $login){
   try {  
       $stmt = $conn->query("SELECT ROLE FROM UTILISATEUR WHERE LOGIN='".$login."'");
       $row = $stmt->fetch();
       $_SESSION['ROLE']=$row['ROLE'];
   }catch (PDOException $e) {
       echo "Erreur ! : " . $e->getMessage() . "<br />";       
   }
}
function connexion($conn, $login, $mdp){
    $sql= "SELECT COUNT(*) nbRes FROM UTILISATEUR WHERE LOGIN='".$login."' AND MOT_DE_PASSE='".$mdp."'";
    $stmt = $conn->query($sql);
    $row= $stmt->fetch();
    if ($row['nbRes'] == 1){
        $_SESSION['login']=$login;
        header('Location: index.php?action=accueil');
    }else{
        header('Location: index.php?action=erreur');
    }
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// deconnexion util
function deconnexion($conn){
    session_unset();
    session_destroy();
    header('Location: index.php');    
}

function coordonneesUtilisateur($conn, $login){  
    $sql= "SELECT NOM, NUM_TEL, ADRESSE_MAIL, PRÉNOM  
            FROM UTILISATEUR INNER JOIN PERSONNE ON UTILISATEUR.IDPERSONNE=PERSONNE.IDPERSONNE
             WHERE UTILISATREUR.LOGIN='.$login'";
    //$resultat= mysql_query($sql,$connexion);
    //while ($ligne=mysql_fetch_assoc($resultat))  {
        //$nomUtil = $r['NOM'];
        //$prenomUtil = $r['PRENOM'];
        //$mailUtil = $r['ADRESSE_MAIL'];
        //$telUtil = $r['NUM_TEL'];
    //}
    //return $nomUtil, $prenomUtil, $mailUtil, $telUtil;
}
?>
