<?php
session_start();
include "Models/monPdo.php" ;
include "Models/Produit.class.php" ;





if(empty($_GET["uc"])){
    $uc = "accueil";
}
else{
    $uc = $_GET["uc"];
}


switch($uc){
    case "accueil" :
        include("views/accueil.php");
    break ;

    case "bonbons" :
        include("Controllers/controleurBonbons.php") ;
    break ;

    case "connexion" :
        include("Controllers/controleurAdmin.php") ;
    break ;


}






?> 

