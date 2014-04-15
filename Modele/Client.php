<?php

require_once 'Framework/Modele.php';

class Client extends Modele {

  // Renvoie les informations sur un client
  public function getClient($idClient) {
    $sql = 'select CLI_ID as id, CLI_NOM as nom,'
      . ' CLI_PRENOM as prenom, CLI_ADRESSE as adresse,'
      . ' CLI_CP as cp, CLI_VILLE as ville,'
      . ' CLI_COURRIEL as courriel, CLI_MDP as mdp'
      . ' from T_CLIENT'
      . ' WHERE CLI_ID=?';
    $client = $this->executerRequete($sql, array($idClient));
    return $client;
  }
  public function isValidClientIdenfication($courriel, $mdp) {
    $sql = 'select count(*) as nb'
      . ' from T_CLIENT'
      . ' WHERE CLI_COURRIEL=? AND CLI_MDP=?';
    $nb = $this->executerRequete($sql, array($courriel, $mdp));
    return $nb['nb'] == 1;
  }

  // Ajoute un client
  public function addClient($nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp) {
    $sql = 'insert into T_CLIENT'
      . ' (CLI_NOM, CLI_PRENOM, CLI_ADRESSE, CLI_CP,'
      . ' CLI_VILLE, CLI_COURRIEL, CLI_MDP)'
      . ' VALUES(?,?,?,?,?,?,?)';
    $chocolat = $this->executerRequete($sql, array($nom,
                                                $prenom,
                                                $adresse,
                                                $cp,
                                                $ville,
                                                $courriel,
                                                $mdp));
  }
}
