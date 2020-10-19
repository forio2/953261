<?php
    class HitCounter {
        private $pdo;
        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }

        function count(){
            $sql = "INSERT INTO counter (countID) VALUES (NULL)";
            $this->pdo->exec($sql);
            $pdoStmt = $this->pdo->query('Select * FROM counter');
            $count = $pdoStmt->fetchAll();
            return $count;
        }
    }
?>