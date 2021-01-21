<?php 
Class Personnage
{
    private $_Pseudo;
    private $_Vie;

    public function __construct()
    {
        $this->_Vie = 100;
    }

    public function AfficherPersonnage()/*Affiche les personnages*/
    {
        echo "<p>J'ai ".$this->_Vie.' de santé.';
    }
}