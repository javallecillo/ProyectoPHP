<?php
    namespace models;
    use config\conexion as Conn;
    use entity\eUser;

    class User extends eUser {
        private $conn;

        public function __construct() {
            $this->conn = new Conn("ProyectoPHP");
        }

        public function toList() {
            $sql = "SELECT * FROM Users";
            $stmt = $this->conn->getConexion()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

        public function getForId($Id) {
            $sql = "SELECT * FROM Users WHERE Id=:Id";
            $stmt = $this->conn->getConexion()->prepare($sql);
            $stmt->bindParam(":Id",$Id);
            $stmt->execute();
            return $stmt->fetch(\PDO::FETCH_OBJ);
        }

        public function Registry($Entity) {
            $sp = "call SP_User (";
            $sp .= "'".$Entity->Id."',";
            $sp .= "'".$Entity->UserName."',";
            $sp .= "'".$Entity->NameFull."',";
            $sp .= "'".$Entity->Password."',";
            $sp .= "'".$Entity->Phone."',";
            $sp .= "'".$Entity->Email."',";
            $sp .= "'".$Entity->Category_Id."'";
            $sp .= ");";
            $stmt = $this->conn->getConexion()->prepare($sp);
            $stmt->execute();
        }
    }
?>