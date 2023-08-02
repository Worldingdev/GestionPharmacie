<?php

class Vente{

    //--------------- Attribut ----------------//

    private $id;
    private $produit;
    private $client;
    private $type;
    
    //----------------- Constructor -------------//

    public function __construct($id,
    $produit,$client,$type){
        $this->id = $id;
        $this->produit = $produit;
        $this->client = $client;
        $this->type = $type;
    }

    //-------------- Getter -----------------//

    public function getId(){
        return $this->id;
    }

    public function getProduit(){
        return $this->produit;
    }

    public function getClient(){
        return $this->client;
    }

    public function getType(){
        return $this->type;
    }

    //------------------- Setter ----------------//

    public function setId($id){
        $this->id = $id;
    }

    public function setProduit($produit){
        $this->produit = $produit;
    }

    public function setClient($client){
        $this->client = $client;
    }

    public function setType($type){
        $this->type = $type;
    }
}