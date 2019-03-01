<?php

namespace Tuto\framework;

use Tuto\framework\Controleur;
use Tuto\framework\Requete;
use Tuto\framework\Vue;
use Tuto\controler\ControlerExhibitor;

/**
 * Classe de routage des requêtes entrantes.
 * Inspirée du framework PHP de Nathan Davison
 * (https://github.com/ndavison/Nathan-MVC)
 * 
 * @author Baptiste Pesquet
 */
class Routeur
{

    /**
     * Méthode principale appelée par le contrôleur frontal
     * Examine la requête et exécute l'action appropriée
     */
    public function routerRequete($entityManager)
    {
        try {
            // Fusion des paramètres GET et POST de la requête
            // Permet de gérer uniformément ces deux types de requête HTTP
            $requete = new Requete(array_merge($_GET, $_POST));

            $controleur = $this->creerControleur($requete, $entityManager);
            $action = $this->creerAction($requete);

            $controleur->executerAction($action);
        }
        catch (Exception $e) {
            $this->gererErreur($e);
        }
    }

    /**
     * Instancie le contrôleur approprié en fonction de la requête reçue
     * 
     * @param Requete $requete Requête reçue
     * @param Requete $entityManager Doctrine entity manager
     * @return Instance d'un contrôleur
     * @throws Exception Si la création du contrôleur échoue
     */
    private function creerControleur(Requete $requete, $entityManager)
    {
        // Grâce à la redirection, toutes les URL entrantes sont du type :
        // index.php?controler=XXX&action=YYY&id=ZZZ

        $controleur = "Index";  // Contrôleur par défaut
        if ($requete->existeParametre('controler')) {
            $controleur = $requete->getParametre('controler');
            // Première lettre en majuscules
            $controleur = ucfirst(strtolower($controleur));
        }
        // Création du nom du fichier du contrôleur
        // La convention de nommage des fichiers controleurs est : Controler/Controler<$controleur>.php
        $classeControleur = "\\Tuto\\controler\\Controler" . $controleur;
		
		if (class_exists($classeControleur)) {
            // Instanciation du contrôleur adapté à la requête
            $controleur = new $classeControleur($entityManager);
            $controleur->setRequete($requete);
            return $controleur;
        }
        else {
            throw new \Exception("Classe '$classeControleur' introuvable");
        }
    }

    /**
     * Détermine l'action à exécuter en fonction de la requête reçue
     * 
     * @param Requete $requete Requête reçue
     * @return string Action à exécuter
     */
    private function creerAction(Requete $requete)
    {
        $action = "index";  // Action par défaut
        if ($requete->existeParametre('action')) {
            $action = $requete->getParametre('action');
        }
        return $action;
    }

    /**
     * Gère une erreur d'exécution (exception)
     * 
     * @param Exception $exception Exception qui s'est produite
     */
    private function gererErreur(Exception $exception)
    {
        $vue = new Vue('Erreur');
        $vue->generer(array('msgErreur' => $exception->getMessage()));
    }

}
