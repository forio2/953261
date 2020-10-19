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
            $sql = "INSERT INTO BMI (id, name, weight, height, BMI) 
            VALUES (NULL, '$name', '$weight', '$height', '$BMI')";
            $this->pdo->exec($sql);
        }
        
    }
?>