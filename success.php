<?php
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $isSuccess = $crud->insertUsers($username, $email, $password);

        if($isSuccess){
            // include 'includes/successmessage.php';
            echo "<h1 class='text-center text-success'>Success!!!</h1>";
        }
        else{
            // include 'includes/errormessage.php';   
        echo "<h1 class='text-center text-danger'>ERROR, Please retry!!!</h1>";
        }
    }
?>

<?php require_once 'includes/footer.php'; ?>