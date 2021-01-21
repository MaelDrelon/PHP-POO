<?php
class WUser    
{
    private $_Prenom;   
    private $_Nom;

    public function __construct()
    {
        $this->_Nom = "Drelon";
        $this->_Prenom = "Mael";
    }

    public function afficherUser()/*Affiche l'User'*/
    {
        echo "<p>Je suis ".$this->_Nom." ".$this->_Prenom."</p>";
        echo "<p>Je suis un User</p>";
    }
}