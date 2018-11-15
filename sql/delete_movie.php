<?php 
    include '../components/database.php';

    if(isset($_POST['movie_id'])) {
        $id = $_POST['movie_id'];
        $sql_query = "DELETE from movies where id=$id";
        mysqli_query($conn, $sql_query);
    };
?>