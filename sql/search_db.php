<?php 
    include '../components/database.php';

    $displayMovies = true;

    if (isset($_POST['movie-title'])) {

        $displayMovies = false;
        // form variables
        $movie_title = $_POST['movie-title'];

        // create query conditons
        $search = '"'.$_POST['movie-title'].'"';
        $sql_query = 'SELECT * from movies where title='.$search;

        $result = mysqli_query($conn, $sql_query);
        while ($row = mysqli_fetch_array($result)) {
            echo 
            "<div class='col-md-6 col-lg-3 mb-4'>
                <div class='card'>
                    <img src='https://image.tmdb.org/t/p/w500/",$row['cover'],"' class='card-img-top'>
                    <div class='card-body'>
                        <h6 class='card-title'>",$row['title'],"</h6>
                        <p class='card-text'>",$plot,"</p>
                        <a href='https://www.themoviedb.org/movie/",$row['tmdb_id'],"'","class='btn btn-primary'>More Info</a>
                        <button onclick=removeMovie(",$row['id'],") class='btn btn-primary'>Remove</button>
                    </div>
                </div>
            </div>";
        };
    }
    ?>