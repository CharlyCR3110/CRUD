<?php 

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if (!$result)   {
            $_SESSION['message'] = 'Failed to complete';
            $_SESSION['message_type'] = 'danger';
    
            header("Location: index.php");
        }

        $_SESSION['message'] = 'Task Save Succesfully';
        $_SESSION['message_type'] = 'success';

        header("Location: index.php");
    }   
?>