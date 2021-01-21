<?php
class Personnage
{
    private $_pseudo;
    public $_vie;
    private $_force;

    public function __construct($valeurvie,$laforce,$lepseudo)
    {
        $this->_pseudo = $lepseudo;
        $this->_vie = $valeurvie;
        $this->_force = $laforce;
    }

    public function AfficherPersonnage()/*Affiche les personnages*/
    {
        echo "<p>Je suis ".$this->_pseudo.', </p> ';
        echo "<p>J'ai ".$this->_vie.' de santé.';
    }
    
    public function Attaquer($Perso)/*Prévien une attaque*/
    {
        echo "<p>".$this->_pseudo." attaque ".$Perso->getNom();"</p>";
    }

    public function Defense($Perso)/*Calcule des dommages*/
    {
        $this->_vie = $this->_vie - $Perso->getForce();
        echo "<p>".$this->_pseudo." à encore ".$this->_vie." HP. ";
    }

    public function getNom()/*Récupére un pseudo*/
    {
        return $this->_pseudo;
    }

    public function getForce()/*Récupére le puissance d'un personnage*/
    {
        return $this->_force;
    }
}