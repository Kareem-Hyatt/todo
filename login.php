<?php
    $title = 'Login';
    require_once 'includes/header.php';
?>

<div class="login-page">
  <div class="form">
    <form method='post' action='success.php'>
      <div class="form-group">
          <input required type="text" class="form-control" id="username" placeholder="username" name="username">
      </div>
      <div class="form-group">
          <input required type="text" class="form-control" id="password" name="password" placeholder="password">
      </div>
      <button type="submit" name='submit' class="btn btn-success">Login</button>
      <p class="message">Not registered? <a href="signup.php">Create an account</a></p>        
    </form>
  </div>
</div>


<?php require_once 'includes/footer.php'; ?>
