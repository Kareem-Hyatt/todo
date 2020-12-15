<?php
    $title = 'Edit Profile';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    $results = $user->getUserById($_SESSION['id']);
    if(!isset($_SESSION['id']))
    {
        echo "ERROR!!!";
        header('Location: profile.php');
    }
    else
    {
?>

<div class="login-page">
  <div class="form">
    <form method='post' action='editprofilepost.php' enctype="multipart/form-data">
        <input type='hidden' name='id' value="<?php echo $_SESSION['id']?>" ?>
        <div class="form-group">
            <input type="text" class="form-control" id="username" value = <?php echo $results['username']?> placeholder="username" name="username">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value = <?php echo $results['email']?> placeholder="email">
        </div>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
                <label class = "custom-file-label" for = "avatar">Choose Picture</label>
                <small id = "avatar" class="form-text text-muted">Picture is Optional</small>
            </div>
        </div>
        <button type="submit" name='submit' class="btn btn-success">Update</button>
    </form>
  </div>
</div>

<?php
    }
?>

<?php require_once 'includes/footer.php'; ?>