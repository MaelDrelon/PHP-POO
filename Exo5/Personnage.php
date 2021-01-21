<?php
class Personnage
{
    private $_ID;
    public $_User;

    public function __construct($id)
    {
        $BDD = new PDO('mysql:host=192.168.65.227; dbname=MaelDrelonPOO; charset=utf8','mael', '');
        $this->_ID = $id;
        $this->_User = $BDD->query ("SELECT * FROM `Personnage` WHERE `id` = $id")->fetch();
    }


    public function AfficherPersonnage()/*Affiche les personnages*/
    {
        echo "<p>Je suis ".$this->_User["Pseudo"].', </p> ';
        echo "<p>J'ai ".$this->_User["Vie"].' de santé.';
    }
    
    public function Attaquer($Perso)/*Prévien une attaque*/
    {
        echo "<p>".$this->_User["Pseudo"]." attaque ".$Perso->getNom();"</p>";
    }

    public function Defense($Perso)/*Calcule des dommages*/
    {
        $this->_User["Vie"] = $this->_User["Vie"] - $Perso->getForce();
        echo "<p>".$this->_User["Pseudo"]." à encore ".$this->_User["Vie"]." HP. ";
    }

    public function getNom()/*Récupére un pseudo*/
    {
        return $this->_User["Pseudo"];
    }

    public function getForce()/*Récupére le puissance d'un personnage*/
    {
        return $this->_User["Puissance"];
    }
}