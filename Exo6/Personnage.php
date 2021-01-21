<?php
class Personnage
{
    private $_ID;
    public $_User;
    public $_BDD;

    public function __construct($id)
    {
        $this->_BDD = new PDO('mysql:host=192.168.65.227; dbname=MaelDrelonPOO; charset=utf8','mael', '');
        $this->_ID = $id;
        $this->_User = $this->_BDD ->query ("SELECT * FROM `Personnage` WHERE `id` = $id")->fetch();
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
        $this->_BDD->query("UPDATE `Personnage` SET `Vie` = ".$Perso->_User['Vie']." WHERE `id` =".$Perso->_User['id']);
    }

    public function getNom()/*Récupére un pseudo*/
    {
        return $this->_User["Pseudo"];
    }

    public function getForce()/*Récupére le puissance d'un personnage*/
    {
        return $this->_User["Puissance"];
    }

    public function heal($Perso) /*Soigne les personages*/
    {
        $Perso->_User['Vie'] = 300;
        $this->_BDD->query("UPDATE `Personnage` SET `Vie` = 300 WHERE `id`=".$Perso->_User['id']);
    }

}