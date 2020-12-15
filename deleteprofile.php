<?php 
        require_once 'includes/header.php';
        require_once 'includes/auth_check.php';
        require_once 'db/conn.php';

    if(!$_SESSION['id'])
    {
        header('Location: mylist.php');
        echo 'error';
    }
    else
    {
        $id = $_SESSION['id'];
        $r = $crud->deleteAllListItem($id);
        $result = $user->deleteProfile($id);

        if($result)
        {
            echo 'success';      
            header("Location: logout.php");
        }
        else{
            echo 'error';
        }
    }
?>