<?php 
    include '../components/database.php';

    // get user info
    $_POST['user_id'] = $id;
    $sql_query = "SELECT user_name, user_type, email FROM users WHERE id=$id";
    $results = mysqli_query($conn, $sql_query);
    echo $results;
?>
