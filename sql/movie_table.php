<?php 
    include '../components/database.php';
    $sql_query = "SELECT * FROM movies";
    $results = mysqli_query($conn, $sql_query);
    while ($row = mysqli_fetch_array($results)) {
        echo 
            "<tr>
                <td>" . $row['id'] . "</td>
                <td scope='row'>" . $row['title'] . "</td>
                <td>" . $row['tmdb_id'] . "</td>
                <td>" . $row['director'] . "</td>
                <td>" . $row['year'] . "</td>
                <td>" . $row['production_company'] . "</td>
                <td>" . $row['plot'] . "</td>
            </tr>";
    }
?>
