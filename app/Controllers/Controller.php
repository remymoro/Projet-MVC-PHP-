<?php
namespace App\Controllers;

use Database\DBConnection;


// Définition de la classe Controller
class Controller
{

    protected $db;

    //  INJECTION DE DEPENDANCE


    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }
    





    // Définition de la méthode view
    public function view($path, array $params = null)
    {
        // Mettre en mémoire tampon la sortie
        ob_start();

        // Modifier le chemin de fichier de vue
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);

        // Inclure le fichier de vue
        require VIEWS . $path . '.php';

        // Extraire les paramètres s'ils existent
       
        // Récupérer le contenu de la mise en mémoire tampon
        $content = ob_get_clean();

    

        // Inclure le fichier de mise en page et afficher le contenu de la vue
        require VIEWS .'layout.php';
    }
}



