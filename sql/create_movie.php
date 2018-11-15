<?php 

    include '../components/database.php';

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $tmdb = $_POST['tmdb'];
        $year = $_POST['year'];
        $director = $_POST['director'];
        $plot = $_POST['plot'];
        $genre = $_POST['genre'];

        $query = "INSERT INTO movies (
                        title, 
                        tmdb_id,
                        director, 
                        year, 
                        plot
                        ) VALUES (
                        '$title',
                        '$tmdb', 
                        '$director', 
                        '$year', 
                        '$plot'
                        )";
        $result = mysqli_query($conn, $query);

        $genreQuery = "INSERT INTO genre_movies (genreID, movieID) VALUES ($genre, $tmdb)";
        $resultGenre = mysqli_query($conn, $genreQuery);

        if (mysqli_error($result) || mysqli_error($resultGenre)) {
            echo 'ERROR - Could not create movie';
        } else {
            echo 'New movie successfully created.';
        }
    }
?>