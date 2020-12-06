<?php
    $title = 'My List';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $results = $crud->getList();
?>

    <table class="table">
        <tr>
            <!-- <th>#</th> -->
            <th>List Item</th>
            <!-- <th>Last Name</th>
            <th>Specialty</th> -->
            <th>User</th>
        </tr>
        <?php  
            while($r = $results->fetch(PDO::FETCH_ASSOC)){  
        ?>
            <tr>
                <td><?php echo $r['name'] ?></td>
                <td><?php echo $r['username'] ?></td>
                <!-- <td><?php echo $r['lastname'] ?></td>
                <td><?php echo $r['name'] ?></td> -->
                <td>
                    <!-- <a href = "view.php?id=<?php echo $r['attendee_id'] ?>" class = "btn btn-primary">View</a>
                    <a href = "edit.php?id=<?php echo $r['attendee_id'] ?>" class = "btn btn-warning">Edit</a>
                    <a onclick = "return confirm('Are you sure you want to delete this record?');" 
                    href = "delete.php?id=<?php echo $r['attendee_id'] ?>" class = "btn btn-danger">Delete</a> -->
                </td>
            </tr>
        <?php
           }        
        ?>
    </table>

<?php require_once 'includes/footer.php'; ?>