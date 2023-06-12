<?php

class Titulaire {

    private string $_nom;
    private string $_prenom;
    private int $_naissance;
    private string $_ville;
    private array $_comptes;

    public function __construct($nom, $prenom, $naissance, $ville, $compte){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_nom = $naissance;
        $this->_nom = $ville;
        $this->_compte = $compte;
    }


    public function __toString(){
        return "";
    }


}


?>