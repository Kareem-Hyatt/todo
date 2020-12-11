<?php 
    include_once 'includes/session.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css" />
    
    <title>ToDo - <?php print $title ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
      <a class="navbar-brand" href="index.php">ToDo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mr-auto" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mylist.php">My List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <?php
              if(!isset($_SESSION['id'])){
            ?>
            <a class="nav-link" href="login.php">Login</a>
            <?php  
              }else{
                ?>
              <a class="nav-link" href="profile.php"><span>Hello <?php echo $_SESSION['username']?></span></a>              
          </li>
          <li>
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
            <?php
              }
            ?>
        </ul>
      </div>
    </nav>
  <div class="container">
    
  <br/>