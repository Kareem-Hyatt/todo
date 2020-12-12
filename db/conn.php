<?php

    //Development Connection

    // $host = 'localhost';
    // $db = 'todo_db';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';

    //Remote Connection freesqldatabase.com - prefered database

    $host = 'sql3.freesqldatabase.com';
    $db = 'sql3381601';
    $user = 'sql3381601';
    $pass = 'mZKjBd5YZ3';
    $charset = 'zZRhCZVve5';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new pdo($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Database Connected Successfully';
    }
    catch(PDOException $e){
        echo $e->getMessage();
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'users.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUsers("admin","","@dministrat0r");
?>