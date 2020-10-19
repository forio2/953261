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
        if (!empty($_SESSION['change'])){
            $table = $this->pdo->allBMIs();
            $count = count($table);
            $this->pdo->totalBMIs($count);
            include __DIR__.'/../templates/BMIs.html.php';
        }else{
            header('location: index.php?action=loginerror');
        }
    } 

    function add(){
            if(!empty($_POST['Weight'])){
                $weight = $_POST['Weight'];
                $height = $_POST['Height'];
                $BMI = $weight/($height*$height);
                $this->pdo->insertBMIs($weight, $height, $BMI);
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
                header('location: index.php?action=regsuccess');
            }
        }
        include __DIR__.'/../templates/register.html.php';
    }

    function loginform(){
        $valid = true;
        $errors = [];
        if(!empty($_POST['submit'])){
            $name = $_POST['name'];
            $password = $_POST['password'];
            if(empty($name)){
                $valid = false;
                $errors[] = 'Name cannot be blank';
            }
            if(empty($password)){
                $valid = false;
                $errors[] = 'Password cannot be blank';
            }
            if($valid == true){
                $this->pdo->checkLogin($name, $password);
                if($_SESSION['change'] == true){
                    header('location: index.php?action=loginsuccess');
                }else{
                    header('location: index.php?action=loginerror');
                }
            }
        }
        include __DIR__.'/../templates/login.html.php';
    }

    function regsuccess(){
        include __DIR__.'/../templates/registersuccess.html.php';
    }

    function loginsuccess(){
        include __DIR__.'/../templates/loginsuccess.html.php';
    }

    function loginerror(){
        include __DIR__.'/../templates/loginerror.html.php';
    }

    function logout(){
        session_destroy();
        header("location: index.php");
    }
}
?>