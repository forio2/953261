<?php
class BMIcontroller {
        private $userTable;
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
            $this->pdo->insertBMIs($name, $weight, $height, $BMI);
        }
        include __DIR__.'/../templates/addBMI.html.php';
    }

    function registerform(){
        $valid = true;
        $errors = [];
        if(!empty($_POST['submit'])){
            $email = $_POST['email'];
            $name = $_POST['name'];
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            if(empty($email)){
                $valid = false;
                $errors[] = 'Email cannot be blank';
            }
            
            if(empty($name)){
                $valid = false;
                $errors[] = 'Name cannot be blank';
            }

            if(empty($password)){
                $valid = false;
                $errors[] = 'Password cannot be blank';
            }
            if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
                $valid = false;
                $errors[] = 'Invalid email address';
            }
            if($valid == true){
                $this->pdo->insertUsers($email, $name, $password);
                header('location: index.php?action=success');
            }
        }
        include __DIR__.'/../templates/register.html.php';
    }

    function success(){
        include __DIR__.'/../templates/registersuccess.html.php';
    }

    function registeruser(){
          
            $title = 'Register an account';
            ob_start();
            include __DIR__ . '/../templates/register.html.php';
            $output = ob_get_clean();
            return ['output' => $output, 'title' => $title];
        
    }
}
?>