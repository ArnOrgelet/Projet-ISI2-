<?php

require_once 'Framework/Modele.php';

class Client extends Modele {

  // Renvoie les informations sur un client
  public function getClient($idClient) {
    $sql = 'select CLI_ID as id, CLI_NOM as nom,'
      . ' CLI_PRENOM as prenom, CLI_ADRESSE as adresse,'
      . ' CLI_CP as codePostal, CLI_VILLE as ville,'
      . ' CLI_COURRIEL as courriel, CLI_MDP as mdp'
      . ' from T_CLIENT'
      . ' WHERE CLI_ID=?';
    $client = $this->executerRequete($sql, array($idClient));
    
    if ($client->rowCount() == 1)
      return $client->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun client ne correspond à l'identifiant '$idClient'");
  }
  public function getClientByIdenfication($courriel, $mdp) {
    $sql = 'select CLI_ID as id, CLI_NOM as nom,'
      . ' CLI_PRENOM as prenom, CLI_ADRESSE as adresse,'
      . ' CLI_CP as codePostal, CLI_VILLE as ville,'
      . ' CLI_COURRIEL as courriel'
      . ' from T_CLIENT'
      . ' where CLI_COURRIEL=? AND CLI_MDP=?';
    $client = $this->executerRequete($sql, array($courriel, $mdp));
    
    if ($client->rowCount() == 1)
      return $client->fetch(); // Identification valide -> retour du client
    else
      return null;
  }
  
  // Indique si le courriel n'est pas deja assigné à un compte
  public function isCourrielUnique($courriel) {
    $sql = 'select CLI_ID as id, CLI_NOM as nom,'
      . ' CLI_ID as id'
      . ' from T_CLIENT'
      . ' WHERE CLI_COURRIEL=?';
    $client = $this->executerRequete($sql, array($courriel));
    
    return ($client->rowCount() == 0);
  }

  // Ajoute un client
  public function ajouterClient($nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp) {
    $sql = 'insert into T_CLIENT'
      . ' (CLI_NOM, CLI_PRENOM, CLI_ADRESSE, CLI_CP,'
      . ' CLI_VILLE, CLI_COURRIEL, CLI_MDP)'
      . ' values (?,?,?,?,?,?,?)';
    $this->executerRequete($sql, array($nom,
                                    $prenom,
                                    $adresse,
                                    $cp,
                                    $ville,
                                    $courriel,
                                    $mdp));
    
    return $this->getClientByIdenfication($courriel, $mdp);
  }
  
  // Modifie un client
  public function modifierClient($idClient, $nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp) {
    $sql = 'update T_CLIENT set'
      . ' CLI_NOM = ?, CLI_PRENOM = ?, CLI_ADRESSE = ?, CLI_CP = ?,'
      . ' CLI_VILLE = ?, CLI_COURRIEL = ?, CLI_MDP = ?'
      . ' where CLI_ID = ?';
    $this->executerRequete($sql, array($nom,
                                    $prenom,
                                    $adresse,
                                    $cp,
                                    $ville,
                                    $courriel,
                                    $mdp,
                                    // where
                                    $idClient));
  }
}
