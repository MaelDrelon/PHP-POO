<?php
class DeletePerso
{
  private $ID; 
  private $BDD;

  public function __construct($BDD,$id)
  {
    $this->ID = $id;
    $this->BDD = $BDD;
  }

  public function Delete() /*Delete le perso choisie*/
  {
      
  }
}