<?php
    $title = 'Signup';
    require_once 'includes/header.php';
?>

<div class="login-page">
  <div class="form">
    <form method='post' action='success.php'>
      <div class="form-group">
          <input required type="text" class="form-control" id="username" placeholder="username" name="username">
      </div>
      <div class="form-group">
          <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="email">
      </div>
      <div class="form-group">
          <input required type="text" class="form-control" id="password" name="password" placeholder="password">
      </div>
      <button type="submit" name='submit' class="btn btn-success">Create</button>
      <p class="message">Already registered? <a href="login.php">Login</a></p>        
    </form>
  </div>
</div>



<?php require_once 'includes/footer.php'; ?>
