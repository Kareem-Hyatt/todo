<?php
    $title = 'Edit-Profile';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){

        echo var_dump($_POST);

        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        // $password = $_POST['password'];

        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES['avatar']['tmp_name']);
        $target_dir = "uploads/";
        $unique = uniqid();
        $destination = "$target_dir$username$unique.$ext";
        move_uploaded_file($orig_file,$destination);

        $isSuccess = $user->editProfile($id, $username, $email, $destination);

        if($isSuccess){
            // header("Location: profile.php");
        }
        else{
            echo "<h1 class='text-center text-danger'>ERROR, Please retry!!!</h1>";
        }
    }
?>

<?php require_once 'includes/footer.php'; ?>