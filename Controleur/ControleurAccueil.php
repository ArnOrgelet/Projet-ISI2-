<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Categorie.php';

class ControleurAccueil extends Controleur
{

  private $categorie;

  public function __construct()
  {
    $this->categorie = new Categorie();
  }

  // Affiche la liste de toutes les categories
  public function index()
  {
    $categories = $this->categorie->getCategories();
    $this->genererVue(array('categories' => $categories));
  }
}
