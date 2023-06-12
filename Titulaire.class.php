<?php

class Titulaire {

    private string $_nom;
    private string $_prenom;
    private string $_naissance;
    private string $_ville;
    private array $_comptes;

    public function __construct($nom, $prenom, $naissance, $ville, $compte){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_naissance = $naissance;
        $this->_ville = $ville;
        $this->_comptes = $compte;
    }

    //Setters
    public function setNom($nom){
        $this->_nom = $nom;
    }
    public function setPrenom($prenom){
        $this->_prenom= $prenom;
    }
    public function setNaissance($naissance){
        $this->_naissance = $naissance;
    }
    public function setVille($ville){
        $this->_ville = $ville;
    }
    public function addCompte($compte){
        $this->_comptes [] = $compte;
    }

    public function removeCompte($compte){
        $difference = array_diff($this->_comptes, [$compte]);
        if($this->_comptes !== $difference){
            $this->_comptes = $difference;
        }
    }

    

    //Getters
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getNaissance(){
        return $this->_naissance;
    }
    public function getVille(){
        return $this->_ville;
    }
    public function getComptes(){
        return $this->_comptes;
    }


    public function __toString(){
        return "
            ---- Informations du Titulaire $this->_prenom $this->_nom ---- <br />
            Ville : $this->_ville <br />   
        ";
    }


}


?>