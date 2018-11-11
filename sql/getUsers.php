<?php 
    include '../components/database.php';

    // get id and username
    $sql_query = "SELECT id FROM users";
    $results = mysqli_query($conn, $sql_query);
    while ($row = mysqli_fetch_array($results)) {
        $id = $row['id'];
        echo 
            "<option>
                $id
            </option>
            ";
    }
?>
