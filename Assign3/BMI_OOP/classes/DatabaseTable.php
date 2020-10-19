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
            $name = $_SESSION['name'];
            $pdoStmt = $this->pdo->query("SELECT * FROM BMI WHERE name = '$name'");
            $table = $pdoStmt->fetchAll();
            return $table;
        }
        function insertBMIs($weight, $height, $BMI){
            $name = $_SESSION['name'];
            $sql = "INSERT INTO BMI (id, name, weight, height, BMI) 
            VALUES (NULL, '$name', '$weight', '$height', '$BMI')";
            $this->pdo->exec($sql);
        }

        function insertUsers($email, $name, $password){
            $sql = "INSERT INTO user (id, email, name, password) 
            VALUES (NULL, '$email', '$name', '$password')";
            $this->pdo->exec($sql);
        }

        function checkLogin($name, $password){
            session_start();
            $sql = $this->pdo->query("SELECT * FROM user WHERE name = '$name'");
            $table = $sql->fetchAll();
            foreach($table as $x){
                $hash = $x[3];
                $chk = password_verify($password, $hash);
                $_SESSION['chk'] = $chk;
                if($chk == true && $sql == true){
                    $_SESSION['name'] = $x[2];
                    $_SESSION['change'] = true; //login
                }
                else{
                    $_SESSION['change'] = false; //fail
                }
            }
        }
    }
?>