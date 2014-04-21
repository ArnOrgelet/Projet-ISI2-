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

  public function index()
  {
    $categories = $this->categorie->getCategories();
    
    $client = null;
    if($this->requete->getSession()->existeAttribut('client'))
        $client = $this->requete->getSession()->getAttribut('client');
    
    $this->genererVue(array('categories' => $categories,
        'client' => $client));
  }
}
