<?php
    namespace models;
    use config\conexion as Conn;
    use entity\eUserCategory;

    class UserCategory extends eUserCategory {
        private $conn;

        public function __construct() {
            $this->conn = new Conn("ProyectoPHP");
        }

        public function toList() {
            $sql = "SELECT * FROM UserCategory";
            $stmt = $this->conn->getConexion()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

    }
?>