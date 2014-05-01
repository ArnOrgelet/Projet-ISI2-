<?php

require_once 'Controleur/ControleurSession.php';

abstract class ControleurSecurise extends ControleurSession
{

    public function executerAction($action)
    {
        if ($this->requete->getSession()->existeAttribut("client"))
        {
            parent::executerAction($action);
        }
        else
        {
            $this->rediriger("connexion");
        }
    }

}
