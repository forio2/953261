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
            session_start();
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $_SESSION['hashPassword'] = $password;
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
        session_start();
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
                    $_SESSION['navChange'] = true;
                }else{
                    header('location: index.php?action=loginerror');
                    $_SESSION['navChange'] = false;
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
        include __DIR__.'/../templates/loginerr.html.php';
    }

    function logout(){
        session_start();
        session_destroy();
        header("location: index.php");
    }
}
?>