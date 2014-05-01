<?php

require_once 'Controleur/ControleurSecurise.php';
require_once 'Framework/Vue.php';
require_once 'Framework/Session.php';
require_once 'Framework/Requete.php';
require_once 'Modele/Client.php';

class ControleurClient extends ControleurSecurise
{

    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function index()
    {
        $this->genererVue();
    }

    public function modifier()
    {
        if ($this->requete->existeParametre("nom") && 
            $this->requete->existeParametre("prenom") && 
            $this->requete->existeParametre("adresse") && 
            $this->requete->existeParametre("codePostal") && 
            $this->requete->existeParametre("ville") &&
            $this->requete->existeParametre("courriel") && 
            $this->requete->existeParametre("mdpnew") && 
            $this->requete->existeParametre("mdpold")
          )
        {
            $idClient = $this->requete->getSession()->getAttribut('client')['id'];
            
            $nom = $this->requete->getParametre("nom");
            $prenom = $this->requete->getParametre("prenom");
            $adresse = $this->requete->getParametre("adresse");
            $cp = $this->requete->getParametre("codePostal");
            $ville = $this->requete->getParametre("ville");
            $courriel = $this->requete->getParametre("courriel");
            $mdp_old = $this->requete->getParametre("mdpold");
            $mdp_new = $this->requete->getParametre("mdpnew");
            
            $client = $this->client->getClient($idClient);
            
            if($client['mdp'] == $mdp_old)
            {
                if($client['courriel'] == $courriel || $this->client->isCourrielUnique($courriel))
                {
                    $this->client->modifierClient($idClient, $nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp_new);
                    $client = $this->client->getClient($idClient);
                    $this->requete->getSession()->setAttribut('client', $client);
                    $this->genererVue(array('msgSucces' => 'Les informations ont bien été changées.'), 'index');
                }
                else
                { // L'adresse email entrée est deja existante
                    $this->genererVue(array('msgErreur' => 'L\'adresse email entrée est deja existante'), 'index');
                }
            }
            else
            { // Si l'ancien mot de passe n'est pas bon
                $this->genererVue(array('msgErreur' => 'L\'ancien mot de passe entré ne correspond pas au mot de passe présent.'), 'index');
            }
        }
        else
        { // Tous les champs nécessaires ne sont pas indiqués
            $this->genererVue(array('msgErreur' => 'Tous les champs nécessaires ne sont pas indiqués.'), 'index');
        }
    }

}