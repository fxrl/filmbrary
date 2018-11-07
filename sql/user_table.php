<?php 
    include '../components/database.php';
    $sql_query = "SELECT * FROM users";
    $results = mysqli_query($conn, $sql_query);
    while ($row = mysqli_fetch_array($results)) {
        echo 
            "<tr>
                <th scope='row'>" . $row['id'] . "</th>
                <td>" . $row['email'] . "</td>
                <td>" . $row['created_at'] . "</td>
                <td>" . $row['user_type'] . "</td>
                <td>" . $row['user_name'] . "</td>
                <td> <button class='btn btn-primary text-center' onclick='deleteUser(" . $row['id'] . ")'>X</button> </td>
                <td> <button onclick=''>X</button> </td>
            </tr>";
    }
?>
