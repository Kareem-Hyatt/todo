<?php 

    require_once 'db/conn.php';

    if(isset($_POST['submit'])){

        $user_id = $_POST['user_id'];
        $name = $_POST['name'];

        $result = $crud->editList($id, $name, $user_id);

        if($result ){
            header('Location: mylist.php');
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