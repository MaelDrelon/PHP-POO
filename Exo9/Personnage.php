<?php
class DeletePerso
{
  private $ID; 
  private $BDD;

  public function __construct($BDD,$id)
  {
    $this->ID = $id;
    $this->BDD = $BDD = new PDO('mysql:host=192.168.65.227; dbname=MaelDrelonPOO; charset=utf8','mael', '');;
  }

  public function Delete() /*Delete le perso choisie*/
  {
    $this->BDD->query("DELETE FROM Personnage WHERE id = ".$this->ID);
  }
}