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
       
       $stmt = $this->db->getPDO()->prepare('SELECT * FROM `posts` WHERE id = ?');
    //     attention  // erreur ici: execute() retourne soit true soit false, pas un objet PDOStatement
        $stmt->execute([$id]);
        $post = $stmt->fetch();

   
       

        // Appelle la méthode view de la classe parente avec le paramètre 'blog/show'
        return $this->view('blog/show', compact('post'));
       
    }



    public function index()
    {   
        // Appelle la méthode view de la classe parente avec le paramètre 'blog/index'

        $stmt = $this->db->getPDO()->query("SELECT * FROM posts ORDER BY  created_at DESC");
        $posts = $stmt->fetchAll();
        return $this->view('blog/index', compact('posts'));
        
    }
}
