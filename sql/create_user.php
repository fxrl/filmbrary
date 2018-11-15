<?php 

    include '../components/database.php';

    if (isset($_POST['submit'])) {
        $userName = $_POST['username'];
        $userType = $_POST['userType'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users (email, password, created_at, user_type, user_name) VALUES ('$email', '$password', NOW() ,'$userType', '$userName')";
        $result = mysqli_query($conn, $query);


        if (mysqli_error($result)) {
            echo 'ERROR - Could not create user';
        } else {
            echo 'New user successfully created.';
            header('location:../admin.php');
        }
    }
?>