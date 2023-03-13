<?php

// Importer la classe Router du namespace Router

use App\Exceptions\NotFoundException;
use Router\Router;

// Charger les dépendances de l'application
require __DIR__ . '/../vendor/autoload.php';

// Définir les constantes pour les vues et les scripts
define('VIEWS', dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']).DIRECTORY_SEPARATOR );


const DB_NAME = "myAPP";
const DB_HOST ="localhost";
const DB_USER ="root";




// Instancier un nouvel objet Router en passant l'URL actuelle à la classe
$router = new Router($_GET['url']);

// Définir les routes de l'application en utilisant la méthode get() du routeur
$router->get('/', 'App\Controllers\BlogController@welcome');
$router->get('/posts/:id', 'App\Controllers\BlogController@show');
$router->get('/posts/', 'App\Controllers\BlogController@index');
$router->get('/tags/:id', 'App\Controllers\BlogController@tag');

// gestion des posts via l'espace admin


$router->get('/admin/posts', 'App\Controllers\Admin\PostController@index');
$router->post('/admin/posts/delete/:id', 'App\Controllers\Admin\PostController@destroy');
$router->get('/admin/posts/edit/:id','App\Controllers\Admin\PostController@edit');
$router->post('/admin/posts/edit/:id','App\Controllers\Admin\PostController@update' );


try{
$router->run();

}catch(NotFoundException $e){
    
    return $e->error404();
}



?>
