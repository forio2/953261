<?php
    class BMIcontroller {
        private $pdo;
        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }

    function home(){
        include __DIR__.'/../templates/home.html.php';
    } 

    function list(){
        $table = $this->pdo->allBMIs();
        $count = count($table);
        $this->pdo->totalBMIs($count);
        include __DIR__.'/../templates/BMIs.html.php';
    } 

    function add(){
        if(!empty($_POST['Name'])){
            $name = $_POST['Name'];
            $weight = $_POST['Weight'];
            $height = $_POST['Height'];
            $BMI = $weight/($height*$height);
            $this->pdo->insertBMIs($name, $weight, $height, $BMI, $this->pdo);
        }
        include __DIR__.'/../templates/addBMI.html.php';
    } 
    }
?>