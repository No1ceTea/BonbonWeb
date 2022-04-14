<?php

class Produit{
    private $id ;
    private $nom ;
    private $prix ;
    private $photo ;

    function getId(){
        return $this->id ;
    }

    function getNom(){
        return $this->nom ;
    }

    function getPrix(){
        return $this->prix ;
    }

    function getPhoto(){
        return $this->photo ;
    }

    function setId($id){
        $this->id = $id ;
    }

    function setNom($nom){
        $this->nom = $nom ;
    }

    function setPrix($prix){
        $this->prix = $prix ;
    }

    function setPhoto($photo){
        $this->photo = $photo ;
    }

    public static function afficherTous(){
        $req=MonPdo::getInstance()->prepare("select * from produit order by nom"); 
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'produit');
        $req->execute();
        $lesResultats=$req->fetchAll();
        return $lesResultats;
    }

    public static function rechercher($nom){
        $req=MonPdo::getInstance()->prepare("select * from produit where upper(nom) like :nom");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'produit');
        $req->execute(array(':nom'=>$nom.'%'));
        $lesResultats=$req->fetchAll();
        return $lesResultats ;
    }

    public static function securiser($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

}

?>