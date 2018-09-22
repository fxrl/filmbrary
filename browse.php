<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Filmbrary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="styles/main.css" />
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <?php 
        include 'components/navbar.php';
    ?>

    <div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h1 class='display-4'>Browse Movies</h1>
            <p class='lead'>Ullamco incididunt reprehenderit culpa excepteur.</p>
        </div>
    </div>

    <?php 
        include 'components/search-form.php';
    ?>
    
    <div class='container'>
        <div class='row'>
            <?php
                include 'components/popular_movies.php'
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