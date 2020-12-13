<?php
    $title = 'Edit List';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    $results = $crud->getList($_SESSION['id']);
    if(!isset($_SESSION['id']))
    {
        include 'includes/errormessage.php';
        header('Location: mylist.php');
    }
    else
    {    
?>


<form method='post' action='editpost.php'>
    <?php 
    $r = $results->fetch(PDO::FETCH_ASSOC); ?>
    <input type='hidden' name='id' value="<?php echo $r['id']?>" ?>
    <input type='hidden' name='users_id' value="<?php echo $_SESSION['id']?>" ?>
    <div class="form-group">
        <input type="text" class="form-control" value = <?php echo $r['name']?> placeholder="name" name="name">
    </div>
    
    <button type="submit" name='submit' class="btn btn-success">Save Changes</button>
</form>

<?php
    }
?>

<?php require_once 'includes/footer.php'; ?>