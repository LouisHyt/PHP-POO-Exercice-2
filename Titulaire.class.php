<?php

class Titulaire {

    private string $_nom;
    private string $_prenom;
    private DateTime $_naissance;
    private string $_ville;
    private array $_comptes;

    public function __construct($nom, $prenom, $naissance, $ville, $compte){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_naissance = new DateTime($naissance);
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
        if(in_array($compte, $this->_comptes)){
            $index = array_search($compte, $this->_comptes);
            unset($this->_comptes[$index]);
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

    public function getAge(){
        $now = new DateTime('now');
        $age = $now->diff($this->_naissance)->format("%y ans");
        return $age;
    }


    public function __toString(){

        $compteDetails = array_map(function($val){
            return "• " . $val->getLibelle(). " - ". $val->getSolde(). $val->getDevise();
        }, $this->_comptes);
        $compteDetails = implode("<br />", $compteDetails);

        return "
            ---- Informations du Titulaire $this->_prenom $this->_nom ---- <br />
            Ville : $this->_ville <br />
            Age : ".$this->getAge()." <br />
            Comptes : <br />
            $compteDetails
        ";
    }


}


?>