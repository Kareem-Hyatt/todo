<?php
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    $title = "Profile";

?>

<div class="card bg-dark text-white">
<?php?>
  <img src="images/ProfileDefault.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Hi <?php echo $_SESSION['username']; ?></h5>
    <!-- <p class="card-text">Your email address is: <?php echo $_SESSION['email']; ?></p>
    <p class="card-text">Last updated 3 mins ago</p> -->
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>