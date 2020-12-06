<?php
    $title = 'Home';
    require_once 'includes/header.php';
    require("db/conn.php");
?>

<h1 class='text-center'>Your ToDo List</h1>

<div class="wrap">
    <div class="task-list">
        <ul>
            
        </ul>
    </div>
    <form class="add-new-task" autocomplete="off">
        <input type="text" name="new-task" placeholder="Add a new item..." />
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>