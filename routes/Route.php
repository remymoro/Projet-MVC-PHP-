<?php

// Définition de l'espace de noms de la classe
namespace Router;

use Exception;
use Database\DBConnection;

// Définition de la classe Route
class Route {

    // Propriétés de la classe Route
    public $path;
    public $action;
    public $matches;

    // Constructeur de la classe Route
    public function __construct($path, $action) {
        // Initialisation des propriétés path et action
        $this->path = trim($path, '/');
        $this->action = $action;
    }

    // Méthode pour vérifier si une URL correspond au chemin de cette route
    public function match(string $url) {
        // On remplace les parties dynamiques du chemin par une expression régulière
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        // On construit une expression régulière complète pour le chemin
        $pathToMatch = "#^$path$#";

        // On vérifie si l'URL correspond au chemin en utilisant l'expression régulière
        if(preg_match($pathToMatch, $url, $matches)){
            $this->matches = $matches;
            return true;
        } else {
            return false;
        }
    }

    public function execute() {   
        $params = explode('@', $this->action);
        $controllerName = $params[0];
        $methodName = $params[1];
    
        if (!class_exists($controllerName)) {
            throw new Exception("Le contrôleur '$controllerName' n'existe pas");
        }
    
        $controller = new $controllerName(new DBConnection(DB_NAME,DB_HOST,DB_USER,DB_PASSWORD));
    
        if (!method_exists($controller, $methodName)) {
            throw new Exception("La méthode '$methodName' n'existe pas dans le contrôleur '$controllerName'");
        }
    
        if (isset($this->matches[1])) {
            return $controller->$methodName($this->matches[1]);
        } else {
            return $controller->$methodName();
        }
    }
    
}
