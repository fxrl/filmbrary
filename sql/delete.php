<?php 
    include '../components/database.php';

    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql_query = "DELETE from movies where id=$id";
        mysqli_query($conn, $sql_query);
    };
?>