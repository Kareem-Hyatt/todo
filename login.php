<?php
    $title = 'Login';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $username = strtolower(trim($_POST['username']));
      $password = $_POST['password'];
      $new_password = md5($password.$username);
      $users_id = $_POST['id'];

      $result = $user->getUser($username, $new_password);
      if(!$result){
        echo 'Error!!!';
      }else{
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $result['id'];
        header("Location: mylist.php");
      }
    }
?>

<div class="login-page">
  <div class="form">
    <form method='post' action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
      <div class="form-group">
          <input required type="text" class="form-control" name= "username" id="username" placeholder="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
      </div>
      <div class="form-group">
          <input required type="password" class="form-control" id="password" name="password" placeholder="password">
      </div>
      <button type="submit" name='submit' class="btn btn-success">Login</button>
      <p class="message">Not registered? <a href="signup.php">Create an account</a></p>        
    </form>
  </div>
</div>


<?php require_once 'includes/footer.php'; ?>
