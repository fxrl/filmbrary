<?php 
    include '../components/database.php';

    if(isset($_POST['user_id'])) {
        $id = $_POST['user_id'];
        $mail = $_POST['mail'];
        $type = $_POST['type'];
        $name = $_POST['name'];
        $sql_query = "UPDATE `users` SET 
            `email` = '$mail',
            `user_type` = '$type',
            `user_name` = '$name' 
        WHERE `id` = $id;";
        mysqli_query($conn, $sql_query);
    };
?>
