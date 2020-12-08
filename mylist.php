<?php
    $title = 'My List';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $users_id = $_SESSION['id'];
    $results = $crud->getList($users_id);

    // $results = $crud->getList($users_id);
?>

    <table class="table">
        <tr>
            <th>List Item</th>
            <th></th>
        </tr>
        <?php  
            echo var_dump($results);
            while($r = $results->fetch(PDO::FETCH_ASSOC)){  
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
                            <a href = "editlist.php?users_id=<?php echo $r['users_id'] ?>" class = "btn btn-light">Edit</a>
                            <a href = "delete.php?users_id=<?php echo $r['users_id'] ?>" class = "btn btn-light">Delete</a>
                        </div>
                    </div>                    
                </td>
            </tr>
        <?php
           }        
        ?>
    </table>

<?php require_once 'includes/footer.php'; ?>