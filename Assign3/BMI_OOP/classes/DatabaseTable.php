<?php
    class DatabaseTable {
        private $pdo;
        private $table;
        private $primaryKey;
        public function __construct($pdo, $table, $primaryKey){
            $this->pdo = $pdo;
            $this->table = $table; 
            $this->primaryKey = $primaryKey;
        } 

        function totalBMIs($count){
            echo $count;
        }

        function allBMIs(){
            $pdoStmt = $this->pdo->query('Select * FROM BMI');
            $table = $pdoStmt->fetchAll();
            return $table;
        }
        function insertBMIs($name, $weight, $height, $BMI){
            $isName = "SELECT name FROM user WHERE name = $name";
            $sql = "INSERT INTO BMI (id, name, weight, height, BMI) 
            VALUES (NULL, '$isName', '$weight', '$height', '$BMI')";
            $this->pdo->exec($sql);
        }

        function insertUsers($email, $name, $password){
            $sql = "INSERT INTO user (id, email, name, password) 
            VALUES (NULL, '$email', '$name', '$password')";
            $this->pdo->exec($sql);
        }
        
    }
?>