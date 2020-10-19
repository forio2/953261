<?php
    try{
        include __DIR__. '/../includes/DatabaseConnection.php';
        include __DIR__. '/../controller/BMIcontroller.php';
        include __DIR__. '/../classes/DatabaseTable.php';
        include __DIR__.'/../templates/layout.html.php';
        $data = new DatabaseTable($pdo, "BMI", "id");
        $bmiController= new BMIcontroller($data);
        //$databaseTable= new DatabaseTable($pdo,,);
        $action = $_GET['action'] ?? 'home'; 
        $page = $bmiController->$action();
    } catch(PDOException$e) {
        $title= 'An error has occurred';
        $output= 'Database error: '. $e->getMessage() . 
        ' in '. $e->getFile() . ':'. $e->getLine();
    }
    include __DIR__.'/../templates/footer.html.php';
?>