<?php

require_once 'Framework/Modele.php';

class Categorie extends Modele
{

  // Renvoie la liste des categories
  public function getCategories()
  {
    $sql = 'select CA.CAT_ID as id, CAT_NOM as titre,'
        . ' CAT_DESC as description, count(ch.CAT_ID) as nb'
        . ' from T_CATEGORIE CA'
        . ' inner join T_CHOCOLAT CH on CH.CAT_ID = CA.CAT_ID'
        . ' GROUP BY id'
        . ' order by titre asc';
    
    $categories = $this->executerRequete($sql);
    return $categories;
  }

  // Renvoie les informations sur une categorie
  public function getCategorie($idCategorie)
  {
    $sql = 'select CAT_ID as id, CAT_NOM as titre,'
      . ' CAT_DESC as description from T_CATEGORIE'
      . ' where CAT_ID=?';
    
    $categorie = $this->executerRequete($sql, array($idCategorie));
    if ($categorie->rowCount() == 1)
      return $categorie->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucune categorie ne correspond à l'identifiant '$idCategorie'");
    }
}
