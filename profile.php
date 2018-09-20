<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Filmbrary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="./styles/main.css" /> -->
    <!-- Latest compiled and minified CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

    <?php 
        include 'components/database.php';
    ?>

    <?php 
        include 'components/navbar.php';
    ?>

    <div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h1 class='display-4'>My Movies</h1>
            <p class='lead'>Ullamco incididunt reprehenderit culpa excepteur.</p>
        </div>
    </div>

    <div class='container'>
        <form class='form-inline mb-4' method="post">
            <label for="movie-title" class='mr-2'>Title</label>
            <input name='movie_title' placeholder='Movie Title' class='form-control mr-4' id='movie-title'type="text">

            <label for="select-genre" class='mr-2'>Genre</label>
            <select id='select-genre' name="select-genre" class='form-control mr-4'>
            <option>Action</option>
            <option>Horror</option>
            <option>Thriller</option>
            </select>

            <label for="year" class='mr-2'>Year</label>
            <input name='year' id='year'type="number" placeholder='Year' class='form-control mr-4'>

            <button type='submit' class='btn btn-primary'>Search</button>
        </form>

    <?php 
        if(isset($_POST['year']) || isset($_POST['movie-title'])) {

            // form variables
            $year = $_POST['year'];
            $movie_title = $_POST['movie-title'];

            // create query conditons
            $search = 'year='.$year;

            $sql_query = "SELECT title from movies where $search";
            $result = mysqli_query($conn, $sql_query);
            while ($row = mysqli_fetch_array($result)) {
                printf(
                    '<li>
                        %s
                    </li>'
                    ,$row[0]
                );
            } 
        }
    ?>

    <div class='container'>
        <div class='row'>
            <?php
                include 'components/favorite_movies.php'
            ?>
        </div>
    </div>
    
    <?php
        include 'components/footer.php'
    ?>

    <!-- Includes removeMovie ajax function and add ajax function -->
    <script src="js/scripts.js"></script>
</body>
</html>