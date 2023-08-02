<?php

class Produit{

    //--------------- Attribut ----------------//

    private $id;
    private $nom;
    private $prix;
    private $type;
    
    //----------------- Constructor -------------//

    public function __construct($id,
    $nom,$prix,$type){
        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->type = $type;
    }

    //-------------- Getter -----------------//

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getprix(){
        return $this->prix;
    }

    public function getType(){
        return $this->type;
    }

    //------------------- Setter ----------------//

    public function setId($id){
        $this->id = $id;
    }

    public function setnom($nom){
        $this->nom = $nom;
    }

    public function setPrix($prix){
        $this->prix = $prix;
    }

    public function setType($type){
        $this->type = $type;
    }
}