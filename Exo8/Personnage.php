<?php
class Personnage
{
  private $ID; 
  private $Nom;
  private $Vie;
  private $Force;

  public function __construct($Info)
  {
    $this->ID = $Info["id"];
    $this->Nom = $Info["Pseudo"];
    $this->Vie = $Info["Vie"];
    $this->Force = $Info["Puissance"];
  }

  public function MontrerInfo() /*Montre les info récupérer de la BDD*/
  {
      echo "<p>Personnage n°".$this->ID.". Son nom est ".$this->Nom.". Il a ".$this->Vie." HP avec une force de ".$this->Force." point de dégat.</p>";
  }
}