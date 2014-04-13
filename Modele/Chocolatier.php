<?php

require_once 'Framework/Modele.php';

class Chocolatier extends Modele
{

  // Renvoie la liste des chocolatiers
  public function getChocolatiers()
  {
    $sql = 'select CHT_ID as id, CHT_NOM as nom,'
        . ' CHT_ADRESSE as adresse, CHT_TEL as tel,'
        . ' CHT_EMAIL as email'
        . ' from T_CHOCOLATIER'
        . ' order by nom asc';
    
    $chocolatiers = $this->executerRequete($sql);
    return $chocolatiers;
  }

  // Renvoie les informations sur un chocolatier
  public function getChocolatier($idChocolatier)
  {
    $sql = 'select CHT_ID as id, CHT_NOM as nom,'
        . ' CHT_ADRESSE as adresse, CHT_TEL as tel,'
        . ' CHT_EMAIL as email'
        . ' from T_CHOCOLATIER'
        . ' where CHT_ID=?';
    
    $chocolatier = $this->executerRequete($sql, array($idChocolatier));
    if ($chocolatier->rowCount() == 1)
      return $chocolatier->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun chocolatier ne correspond à l'identifiant '$idChocolatier'");
    }
}
