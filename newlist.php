<?php 

    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(!$_GET['name'])
    {
        header('Location: mylist.php');                    
        echo 'error';
    }
    else
    {
        $name = $_GET['name'];
        $users_id = $_SESSION['id'];
        $results = $crud->insertListItem($name, $users_id);

        if($results)
        {
            header("Location: mylist.php");           
        }
        else{
            echo 'error';
        }
    }
?>