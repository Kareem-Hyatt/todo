<?php
    $title = 'My List';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    // if(!isset($_GET['users_id']))
    // {
    //     echo "Try again</h1>";
    //     // $users_id = $_GET['users_id'];
    //     // $results = $crud->getList($users_id);
    // }
    // else
    // {
        // echo "kinda working";
        $users_id = $_GET['users_id'];
        // $result = $crud->getAttendeeDetails($id);
        $results = $crud->getList($users_id);

    $results = $crud->getList($users_id);
?>

    <table class="table">
        <tr>
            <th>List Item</th>
            <th></th>
        </tr>
        <?php  
            while($r = $results->fetch(PDO::FETCH_ASSOC)){  
        ?>
            <tr>
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

    <?php
        // }
    ?>

<?php require_once 'includes/footer.php'; ?>