<?php
    namespace Models;

    use Config\Conexion as Conexion;

    class User{
        private $Conexion;

        public function __construct() {
            $this->Conexion = new Conexion();
            $this->Conexion = $this->Conexion->getConexion();
        }

        public function toList() {
            $sql = "SELECT * FROM Users";
            $stmt = $this->Conexion->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

        public function getForId($Id) {
            $sql = "SELECT * FROM Users WHERE Id=:Id";
            $stmt = $this->Conexion->prepare($sql);
            $stmt->bindParam(":Id",$Id);
            $stmt->execute();
            return $stmt->fetch(\PDO::FETCH_OBJ);
        }

        public function getNewId() {
            $sql = "SELECT * FROM Users ORDER BY Id DESC LIMIT 0,1";
            $stmt = $this->Conexion->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetch(\PDO::FETCH_OBJ);
            
            if(!$data) {
                return "1";
            } else {
                return intval($data->Id) + 1;
            }
            
        }

        public function forUserName($username, $password) {
            $sql = "SELECT * FROM Users WHERE UserName =:UserName AND Password = :Password";
            $stmt = $this->Conexion->prepare($sql);
            $stmt->bindParam(":UserName",$username);
            $stmt->bindParam(":Password",$password);
            $stmt->execute();
            return $stmt->fetch(\PDO::FETCH_OBJ);
        }

        public function save($entity) {
            $sql = "call SP_User (";
            $sql .= "'".$entity-> Id."',";
            $sql .= "'".$entity-> UserName."',";
            $sql .= "'".$entity-> NameFull."',";
            $sql .= "'".$entity-> Password."',";
            $sql .= "'".$entity-> Email."',";
            $sql .= "'".$entity-> Phone."',";
            $sql .= "'".$entity-> Category_Id."'";
            $sql .= ");";

            $stmt = $this->Conexion->prepare($sql);
            $stmt->execute();

            //echo $sql;
        }
    }
?>