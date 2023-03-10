<?php
namespace App\Controllers;

use Database\DBConnection;

// La classe BlogController hérite de la classe Controller
class BlogController extends Controller
{
    // La méthode index ne prend pas de paramètre
    public function welcome()
    {
        // Appelle la méthode view de la classe parente avec le paramètre 'blog/index'
        return $this->view('blog/welcome');
    }

    // La méthode show prend un paramètre $id qui doit être un entier
    public function show(int $id)
    {

        $req = $this->db->getPDO()->query("SELECT * FROM posts ");
        $posts = $req->fetchAll();
        // Crée un tableau avec une variable nommée 'id' qui contient la valeur de $id
        $params = compact('id');

        // Appelle la méthode view de la classe parente avec le paramètre 'blog/show' et les variables $params
        return $this->view('blog/show', $params);
    }



    public function index()
    {
        
    }
}
