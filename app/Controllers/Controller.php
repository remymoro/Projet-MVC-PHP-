<?php
namespace App\Controllers;

use Database\DBConnection;


// Définition de la classe Controller
abstract class  Controller
{

    protected $db;

   


    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }
    





 
    protected function view($path, array $params = null)
    {
       
        ob_start();

      
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);

     
        require VIEWS . $path . '.php';

     
       
      
        $content = ob_get_clean();

    

       
        require VIEWS .'layout.php';
    }



 
    protected function getDb(){
        return $this->db;
    }
}



