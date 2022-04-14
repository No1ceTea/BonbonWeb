<?php

$choix = $_GET["choix"] ;

switch($choix){
    case "formulaire":
        include("views/ForAdmin.php") ;
        include("views/headeradmin.php") ;
    break ;
}