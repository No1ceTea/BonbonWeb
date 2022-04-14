<?php 

$action=$_GET["action"] ;

switch($action){
    case "liste" :
        $lesProduits=Produit::afficherTous();
     
        include("Views/listeProduits.php");
        break ;
    
    case "recherche" :
        $recherche=Produit::securiser($_POST["nom"]);
        $lesProduits=Produit::rechercher(strtoupper($recherche));
        include("Views/listeProduits.php");
        
        break;
}

?>