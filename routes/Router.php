<?php

namespace Router;

// On commence par définir la classe Router dans le namespace Router

class Router {

    // On définit une propriété publique $url pour stocker l'URL courante
    public $url;

    // On définit une propriété publique $routes pour stocker les routes disponibles
    public $routes = [];

    // On définit un constructeur qui prend en paramètre l'URL courante
    public function __construct($url) {
        // On retire les éventuels slashs au début ou à la fin de l'URL
        $this->url = trim($url, '/');
    }

    // On définit une méthode pour ajouter une route HTTP GET
    public function get(string $path , string $action) {
        // On crée une nouvelle instance de la classe Route et on l'ajoute à la liste des routes GET
        $this->routes['GET'][] = new Route($path , $action); 
    }

    // On définit une méthode pour exécuter le routage
    public function run() {
        // On parcourt la liste des routes correspondant à la méthode HTTP de la requête courante
        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            // Si la route courante correspond à l'URL courante, on l'exécute
            if($route->match($this->url)){
                $route->execute();
            }
        }
        // Si aucune route n'a été trouvée, on renvoie une erreur 404
        return header('HTTP/1.0 404 Not Found');
    }
}
