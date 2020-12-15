<?php
    $title = 'Profile';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    $result = $user->getUserById($_SESSION['id']);
    $count = $crud->count($_SESSION['id']);
    $r = $count->fetch(PDO::FETCH_ASSOC);
?>

    <div class="card" style="width: 20rem;">
      <img src="<?php echo empty($result['avatar_path']) ? "uploads/ProfileDefault.png" : $result['avatar_path'] ?>" class="card-img-top" alt="Profile Picture">
      <div class="card-body">
        <h5 class="card-title">Hi <?php echo $_SESSION['username'];?></h5>
        <p class="card-text"><?PHP echo 'Well would you look at that ' . $_SESSION['username'] . 
        ', you currently have ' . $r['COUNT(*)'] . ' item(s) in your ToDo List.'?></p>
      </div>
      <ul class="list-group list-group-flush">
        <!-- <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li> -->
      </ul>
      <div class="card-body">
        <!-- <a href="mylist.php" class="card-link">Your ToDo List</a> -->
        <a href="editprofile.php" class="card-link">Edit Profile</a>
        <a href="deleteprofile.php" onclick = "return confirm('Are you sure you want to delete this profile?');" class="card-link">Delete Profile</a>
      </div>
    </div>

<?php require_once 'includes/footer.php'; ?>