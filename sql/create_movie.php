<?php 

    include '../components/database.php';

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $tmdb = $_POST['tmdb'];
        $year = $_POST['year'];
        $director = $_POST['director'];
        $plot = $_POST['plot'];

        $query = "INSERT INTO movies (title, tmdb_id, director, year, production_company, plot) VALUES ('$title', '$tmdb', '$director' , '$year', '$prod', $plot)";
        $result = mysqli_query($conn, $query);


        if (mysqli_error($result)) {
            echo 'ERROR - Could not create movie';
        } else {
            echo 'New movie successfully created.';
        }
    }
?>