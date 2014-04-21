<?php

require_once 'Framework/Controleur.php';
require_once 'Framework/Vue.php';
require_once 'Framework/Session.php';
require_once 'Framework/Requete.php';
require_once 'Modele/Client.php';

class ControleurConnexion extends Controleur
{

    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }


    public function connecter()
    {
        if ($this->requete->existeParametre("courriel") &&
            $this->requete->existeParametre("mdp"))
        {
            $courriel = $this->requete->getParametre("courriel");
            $mdp = $this->requete->getParametre("mdp");

            $client = $this->client->getClientByIdenfication($courriel, $mdp);

            if($client == null)
            { // Mauvaise identification
                $this->genererVue(array('msgErreur' => 'Les identifiants entrés ne sont pas valides.'));
            }
            else
            { // Bien identifié
                $this->requete->getSession()->setAttribut('client', $client);
                $this->genererVue(array('msgSucces' => 'Vous êtes à présent bien connecté.',
                        'redirect' => array('time' => 3, 'destination' => 'Accueil')));
            }
        }
        else
        { // Tous les paramètres n'ont pas été indiqués
            $this->genererVue(array('msgErreur' => 'Vous devez indiquer tous les champs.'));
        }
    }

    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->genererVue(array('msgSucces' => 'Vous avez bien été déconnecté(e).',
                    'redirect' => array('time' => 3, 'destination' => 'Accueil')));
    }

    public function inscrire()
    {
        if ($this->requete->existeParametre("nom") && 
            $this->requete->existeParametre("prenom") && 
            $this->requete->existeParametre("adresse") && 
            $this->requete->existeParametre("codePostal") && 
            $this->requete->existeParametre("ville") &&
            $this->requete->existeParametre("courriel") && 
            $this->requete->existeParametre("mdp")
          )
        {
            $nom = $this->requete->getParametre("nom");
            $prenom = $this->requete->getParametre("prenom");
            $adresse = $this->requete->getParametre("adresse");
            $cp = $this->requete->getParametre("codePostal");
            $ville = $this->requete->getParametre("ville");
            $courriel = $this->requete->getParametre("courriel");
            $mdp = $this->requete->getParametre("mdp");
            
            if($this->client->isCourrielUnique($courriel))
            {
                $client = $this->client->ajouterClient($nom, $prenom, $adresse, $cp, $ville, $courriel, $mdp);
                
                $this->requete->getSession()->setAttribut('client', $client);
                
                $this->genererVue(array('msgSucces' => 'L\'inscription s\'est faite avec succès.',
                    'redirect' => array('time' => 3, 'destination' => 'Accueil')));
            }
            else
            { // Courriel deja utilisé
                $this->genererVue(array('msgErreur' => 'Courriel deja utilisé : '.$courriel));
            }
        }
        else
        { // Tous les champs nécessaires ne sont pas indiqués
            $this->genererVue(array('msgErreur' => 'Tous les champs nécessaires ne sont pas indiqués.'));
        }
    }
    
    public function index()
    {
        $this->genererVue();
    }

}