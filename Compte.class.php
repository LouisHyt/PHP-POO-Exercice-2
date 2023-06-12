<?php

class Compte {

    private string $_libelle;
    private float $_solde;
    private string $_devise;
    private object $_titulaire;

    public function __construct($libelle, $solde, $devise, $titulaire){
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $this->_titulaire->addCompte($this);

    }

    //Setters
    function setLibelle($libelle){
        $this->_libelle = $libelle;
    }

    function setSolde($solde){
        $this->_solde = $solde;
    }

    function setDevise($devise){
        $this->_devise = $devise;
    }

    function setTitulaire($titulaire){
        $this->_titulaire->removeCompte($this);
        $this->_titulaire = $titulaire;
        $this->_titulaire->addCompte($this);
    }

    //getters
    function getLibelle(){
        return $this->_libelle;
    }

    function getSolde(){
        return $this->_solde;
    }

    function getDevise(){
        return $this->_devise;
    }

    function getTitulaire(){
        return $this->_titulaire;
    }

    public function __toString(){
        return "";
    }


}

?>