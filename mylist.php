<?php
    $title = 'My List';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    $users_id = $_SESSION['id'];
    $results = $crud->getList($users_id);

?>

    <table class="table">
        <tr>
            <th>List Item(s)</th>
            <th></th>
        </tr>
        <?php  
            // echo var_dump($results);
            while($r = $results->fetch(PDO::FETCH_ASSOC)){  
            // foreach(($r = $results->fetch(PDO::FETCH_ASSOC)) as $value){  
        ?>
            <tr>
                <td><?php echo $r['name'] ?></td>
                <td>
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            options
                        </button>
                        <div class="dropdown-menu">
                            <!-- Dropdown menu links -->
                            <a href = "editlist.php?id=<?php echo $r['id'] ?>" class = "btn btn-light">Edit</a>
                            <a href = "delete.php?id=<?php echo $r['id'] ?>" class = "btn btn-light">Delete</a>
                        </div>
                    </div>                    
                </td>
            </tr>
            <?php
                }        
            ?>
            <tr>
                <td>
                    <form method='get' id = "submit-form" action='newlist.php?users_id=<?php echo $_SESSION['id'] ?>"'>
                    <input required type="text" name="name" id= "name" class= "form-control" placeholder="Add a new item..." /></form>
                </td>
                <td><button type="submit" form = "submit-form" name='submit' class="btn btn-success">Save Item</button></td>
            </tr>

    </table>

<?php require_once 'includes/footer.php'; ?>