<?php

require_once 'Controleur/ControleurSession.php';
require_once 'Modele/Categorie.php';

class ControleurAccueil extends ControleurSession
{

  private $categorie;

  public function __construct()
  {
    $this->categorie = new Categorie();
  }

  public function index()
  {
    $categories = $this->categorie->getCategories();
    
    $this->genererVue(array('categories' => $categories));
  }
}
