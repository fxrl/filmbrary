<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Filmbrary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/main.css" />
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <?php 
        include 'components/database.php';
        include 'components/navbar.php';
        include 'components/check_login_browser.php';
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
            <input name='movie-title' placeholder='Movie Title' class='form-control mr-4' id='movie-title' type="text">

            <label for="year" class='mr-2'>Year</label>
            <input name='year' id='year'type="number" placeholder='Year' class='form-control mr-4'>

            <button type='submit' class='btn btn-primary'>Search</button>
        </form>
    </div>

    <div class='container'>
        <div class='row'>
            <?php
                include 'sql/search_db.php'
            ?>
        </div>
    </div>

    <?php if ($displayMovies) : ?>
        <div class='container'>
            <div class='row'>
                <?php
                    include 'components/favorite_movies.php'
                ?>
            </div>
        </div>
    <?php endif; ?>

    
    <?php
        include 'components/footer.php'
    ?>

    <!-- Includes removeMovie ajax function and add ajax function -->
    <script src="js/scripts.js"></script>
</body>
</html>