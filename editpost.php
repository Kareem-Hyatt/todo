<?php 

    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        echo var_dump($_POST);
        $id = $_POST['id'];
        $name = $_POST['name'];
        $users_id = $_POST['users_id'];

        $result = $crud->editList($id, $name, $users_id);

        if($result ){
            // header('Location: mylist.php');
        }
        else{
            // include 'includes/errormessage.php';
        echo 'error';
        }
    }
    else
    {
        // include 'includes/errormessage.php';
        echo 'error';
    }

?>