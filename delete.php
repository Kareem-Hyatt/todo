<?php 
    require_once 'db/conn.php';

    if(!$_GET['id'])
    {
        header('Location: mylist.php');
        echo 'error';
    }
    else
    {
        $id = $_GET['id'];
        $result = $crud->deleteListItem($id);

        if($result)
        {
            header("Location: mylist.php");      
        }
        else{
            echo 'error';
        }
    }
?>