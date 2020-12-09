<?php
    $title = 'Edit List';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    $results = $crud->getList($user_id);
    if(!isset($_GET['user_id']))
    {
        include 'includes/errormessage.php';
        header('Location: mylist.php');
    }
    else
    {
        $id = $_GET['user_id'];
        $list = $crud->getList($user_id);
    
    
?>


<form method='post' action='editpost.php'>
    <input type='hidden' name='id' value="<?php echo $list['user_id']?>" />
    <div class="form-group">
        <!-- <label for="name">name</label> -->
        <input type="text" class="form-control" value = <?php echo $list['name']?> user_id="user_id" placeholder="name" name="name">
    </div>
    
    <button type="submit" name='submit' class="btn btn-success">Save Changes</button>
</form>

<?php
    }
?>

<?php require_once 'includes/footer.php'; ?>