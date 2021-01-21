<?php 
Class Personnage
{
    private $_Pseudo;
    private $_Vie;

    public function __construct($Pseudo)
    {
        $this->_Pseudo = $Pseudo;
        $this->_Vie = 100;
    }


    public function AfficherPersonnage()/*Affiche les personnages*/
    {
        echo "<p>Je suis ".$this->_Pseudo.', </p> ';
        echo "<p>J'ai ".$this->_Vie.' de santé.';
    }
}