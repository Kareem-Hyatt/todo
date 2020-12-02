<?php
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['create'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $isSuccess = $crud->insertUsers($username, $email, $password);

        if($isSuccess){
            // include 'includes/successmessage.php';
            echo "<h1 class='text-center text-success'>You have been Successfully REGISTERED!</h1>";
        }
        else{
            // include 'includes/errormessage.php';   
        echo "<h1 class='text-center text-danger'>There was an ERROR in processing!</h1>";

        }
    }
?>


<?php require_once 'includes/footer.php'; ?>