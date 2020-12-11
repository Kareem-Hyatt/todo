<?php
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $isSuccess = $user->insertUsers($username, $email, $password);

        if($isSuccess){
            // include 'includes/successmessage.php';
            SendEmail::SendMail($email,"ToDo Account Registered","You have successfully created you ToDo Account. Welcome to the family!!!");
            echo "<h1 class='text-center text-success'>Success!!!</h1>";
            // header("Location: mylist.php");
        }
        else{
            // include 'includes/errormessage.php';   
        echo "<h1 class='text-center text-danger'>ERROR, Please retry!!!</h1>";
        }
    }
?>

<?php require_once 'includes/footer.php'; ?>