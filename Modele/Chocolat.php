<?php
 
require_once 'Framework/Modele.php';

class Chocolat extends Modele {

  // Renvoie la liste des chocolats du blog
  public function getChocolats($idCategorie) {
    $sql = 'select CHO_ID as id, CHO_NOM as nom,'
      . ' CHO_DATEAJOUT as date, CHO_PRIX as prix,'
      . ' CHO_IMAGE as image_src'
      . ' from T_CHOCOLAT'
      . ' WHERE CAT_ID=?'
      . ' order by CHO_NOM desc';
    $chocolats = $this->executerRequete($sql, array($idCategorie));
    return $chocolats;
  }

  // Renvoie les informations sur un chocolat
  public function getChocolat($idChocolat) {
    $sql = 'select CHO_ID as id, CHO_NOM as nom,'
      . ' CHO_DATEAJOUT as date, CHO_PRIX as prix,'
      . ' CHO_IMAGE as image_src, CAT_ID as categorie_id,'
      . ' CHT_ID as chocolatier_id'
      . ' from T_CHOCOLAT'
      . ' WHERE CHO_ID=?';
    $chocolat = $this->executerRequete($sql, array($idChocolat));
    if ($chocolat->rowCount() == 1)
      return $chocolat->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun chocolat ne correspond à l'identifiant '$idChocolat'");
    }
}
