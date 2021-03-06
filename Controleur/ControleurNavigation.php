<?php
 
require_once 'Controleur/ControleurSession.php';
require_once 'Modele/Categorie.php';
require_once 'Modele/Chocolat.php';
require_once 'Modele/Chocolatier.php';

class ControleurNavigation extends ControleurSession
{
    
  private $categorie;
  private $chocolat;
  private $chocolatier;

  public function __construct()
  {
    $this->categorie = new Categorie();
    $this->chocolat = new Chocolat();
    $this->chocolatier = new Chocolatier();
  }

  public function index()
  {
    $categorie = null;
    $chocolats = null;
      
    $categories = $this->categorie->getCategories();
    if ($this->requete->existeParametre("id"))
    {
        $idCategorie = $this->requete->getParametre("id");
        
        try
        {
            $categorie = $this->categorie->getCategorie($idCategorie);
            $chocolats = $this->chocolat->getChocolats($idCategorie);
        }
        catch(Exception $ex)
        { }
    }
    
    $this->genererVue(array(
                        'currentCategorie' => $categorie,
                        'categories' => $categories,
                        'chocolats' => $chocolats));
  }
  
  public function detail()
  {
    $chocolat = null;
    $categorie = null;
    $chocolatier = null;
      
    $categories = $this->categorie->getCategories();
    if ($this->requete->existeParametre("id"))
    {
        $idChocolat = $this->requete->getParametre("id");
        
        try
        {
            $chocolat = $this->chocolat->getChocolat($idChocolat);
            $categorie = $this->categorie->getCategorie($chocolat['categorie_id']);
            $chocolatier = $this->chocolatier->getChocolatier($chocolat['chocolatier_id']);
        }
        catch(Exception $ex)
        { }
    }
    
    $this->genererVue(array(
                        'categories' => $categories,
                        'currentCategorie' => $categorie,
                        'chocolat' => $chocolat,
                        'chocolatier' => $chocolatier));
  }
}
