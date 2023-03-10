<?php


namespace Database;

use PDO;

class DBConnection
{

    private $dbname;
    private $host;
    private $user;
    private $password;
    private $pdo;



    function __construct(string $dbname, string $host, string $user, string $password)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
    }


    public function getPDO() : PDO
    {
        // si $this->pdo est null alors on instancie un objet PDO
        // sinon on retourne $this->pdo
        

        return  $this->pdo ?? $this->pdo = new PDO("mysql:dbname=$this->dbname;host=$this->host",
         $this->user, $this->password,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8"
        ]);
        // 

    }

    
   

}








