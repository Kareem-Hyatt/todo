<?php
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES['avatar']['tmp_name']);
        $target_dir = "uploads/";
        $unique = uniqid();
        $destination = "$target_dir$username$unique.$ext";
        move_uploaded_file($orig_file,$destination);

        $isSuccess = $user->insertUsers($username, $email, $password, $destination);

        if($isSuccess){
            SendEmail::SendMail($email,"ToDo Account Registered","You have successfully created you ToDo Account. Welcome to the family!!!");
            echo "<h1 class='text-center text-success'>Success!!!</h1>";
            header("Location: mylist.php");
        }
        else{
            echo "<h1 class='text-center text-danger'>ERROR, Please retry!!!</h1>";
        }
    }
?>

<?php require_once 'includes/footer.php'; ?>