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

    public function crediter($montant){
        if($montant <= 0){
            return "Vous ne pouvez pas créditer un montant négatif";
        }
        $this->_solde += $montant;
        return $this->_solde;
    }

    public function debiter($montant){
        if($montant <= 0){
            return "Vous ne pouvez pas débiter un montant négatif";
        }
        $this->_solde -= $montant;
        return $this->_solde;
    }

    public function transfer($compte, $montant){
        if($this->getSolde() < $montant){
            return "Vous n'avez pas assez d'argent sur votre compte...";
        }
        $this->debiter($montant);
        $compte->crediter($montant);
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
        return "
            ---- Informations du compte de ".$this->getTitulaire()->getPrenom()." ".$this->getTitulaire()->getNom(). "---- <br />
            Type de compte: $this->_libelle <br />
            Solde : $this->_solde $this->_devise<br />
        ";
    }


}

?>