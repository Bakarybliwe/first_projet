<?php

namespace Tuto\framework;

/**
 * Classe modélisant une vue.
 *
 * @author Baptiste Pesquet
 */
class Vue
{
    /** Nom du fichier associé à la vue */
    private $fichier;

	/** Titre de la vue (défini dans le fichier vue) */
    private $titre;

	/**
     * Constructeur
     * 
     * @param string $action Action à laquelle la vue est associée
     * @param string $controleur Nom du contrôleur auquel la vue est associée
     */
    public function __construct($action, $controleur = "")
    {
        // Détermination du nom du fichier vue à partir de l'action et du constructeur
        // La convention de nommage des fichiers vues est : view/<$controleur>/<$action>.php
        $fichier = '';
        if ($controleur != "") {
			// Generate file name from class name
			$controleur = str_replace("\\", "/", $controleur);
			$controleur = str_replace("Tuto", "src", $controleur) . "/";
			$fichier = '../' . str_replace("controler", "view", $controleur);
        }
        $this->fichier = $fichier . $action . ".php";
    }

    /**
     * Génère et affiche la vue
     * 
     * @param array $donnees Données nécessaires à la génération de la vue
	 * @param string $layout Layout global pour mutualiser le code commun aux vues
     */
    public function generer($donnees, $layout = null)
    {
		// Génération de la partie spécifique de la vue
        $contenu = $this->genererFichier($this->fichier, $donnees);
        // On définit une variable locale accessible par la vue pour la racine Web
        // Il s'agit du chemin vers le site sur le serveur Web
        // Nécessaire pour les URI de type controleur/action/id
//        $racineWeb = '/web/';
        $racineWeb = '/';
        // Génération du gabarit commun utilisant la partie spécifique
        if ($layout != null) {
			$layout = "../src/view/_Layout/" . $layout;
            // Utilisation de l'action passée en paramètre
	        $vue = $this->genererFichier($layout, array('titre' => $this->titre, 'contenu' => $contenu, 'racineWeb' => $racineWeb));
        } 
		else {
			 $vue = $contenu;
		}
        // Renvoi de la vue générée au navigateur
        echo $vue;
	}

    /**
     * Génère un fichier vue et renvoie le résultat produit
     * 
     * @param string $fichier Chemin du fichier vue à générer
     * @param array $donnees Données nécessaires à la génération de la vue
     * @return string Résultat de la génération de la vue
     * @throws Exception Si le fichier vue est introuvable
     */
    private function genererFichier($fichier, $donnees)
    {
        if (file_exists($fichier)) {
            // Rend les éléments du tableau $donnees accessibles dans la vue
            extract($donnees);
            // Démarrage de la temporisation de sortie
            ob_start();
            // Inclut le fichier vue
            // Son résultat est placé dans le tampon de sortie
            require $fichier;
            // Arrêt de la temporisation et renvoi du tampon de sortie
            return ob_get_clean();
        }
        else {
            throw new \Exception("Fichier '$fichier' introuvable");
        }
    }

    /**
     * Nettoie une valeur insérée dans une page HTML
     * Doit être utilisée à chaque insertion de données dynamique dans une vue
     * Permet d'éviter les problèmes d'exécution de code indésirable (XSS) dans les vues générées
     * 
     * @param string $valeur Valeur à nettoyer
     * @return string Valeur nettoyée
     */
    private function nettoyer($valeur)
    {
        // Convertit les caractères spéciaux en entités HTML
        return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);
    }
    
    public static function genererVue($fichier, $donnees=array())
    {
    	$fichier_vue = "../src/view/".$fichier;
    	if (file_exists($fichier_vue)) {
    		// Importe les variables dans la table des symboles
    		extract($donnees);
    		// D�marrage de la temporisation de sortie
    		ob_start();
    		// Inclut le fichier vue
    		require $fichier_vue;
    		// Arr�t de la temporisation et renvoi du tampon de sortie
    		return ob_get_clean();
    	}
    	else {
    		throw new \Exception("Fichier '$fichier' introuvable");
    	}
    }

}
