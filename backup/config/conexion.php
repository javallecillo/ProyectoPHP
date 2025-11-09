<?php
namespace config;

//$conn = new Conexion("ProyectoPHP");

class Conexion {
    private $host="localhost";
    //private $db_name="ProyectoPHP";
    private $user="root";
    private $password="";
    private $conn=null;

    public function __construct($db_name) {

        try {
            $this->conn = new \PDO("mysql:host=".$this->host.";dbname=".$db_name, $this->user, $this->password);

            //echo "Conexión Exitosa...";

        } catch (\Throwable $th) {
            die("Conexión Fallida... ".$th->getMessage());
        }

        
    }

    public function getConexion() {
        return $this->conn;
    }
}

?>