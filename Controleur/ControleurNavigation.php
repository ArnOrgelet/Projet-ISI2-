<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Categorie.php';
require_once 'Modele/Chocolat.php';

class ControleurNavigation extends Controleur
{
    
  private $categorie;
  private $chocolat;

  public function __construct()
  {
    $this->categorie = new Categorie();
    $this->chocolat = new Chocolat();
  }

  // Affiche la liste de toutes les categories
  public function index()
  {
    $categorie = null;
    $chocolats = null;
      
    $categories = $this->categorie->getCategories();
    if ($this->requete->existeParametre("id"))
    {
        $idCategorie = $this->requete->getParametre("id");
        
        $categorie = $this->categorie->getCategorie($idCategorie);
        $chocolats = $this->chocolat->getChocolats($idCategorie);
    }
    
    $this->genererVue(array(
                        'currentCategorie' => $categorie,
                        'categories' => $categories,
                        'chocolats' => $chocolats));
  }
}
