<?php 
    include '../components/database.php';

    if(isset($_POST['user_id'])) {
        $id = $_POST['user_id'];
        $sql_query = "DELETE from users where id=$id";
        mysqli_query($conn, $sql_query);
    };
?>