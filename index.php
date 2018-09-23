<!DOCTYPE html>
<html>
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
        include './components/navbar.php'
    ?>

    <div class="container-fluid hero">
        <div class="col-lg-12 hero--content">
            <h1>Filmbrary</h1>
            <p>Browse movies and create a collection of your favorite flicks.</p>
            <a href="browse.php" class="btn btn-primary" >Browse Movies</a>
        </div>
    </div>

    <?php
        include './components/footer.php'
    ?>

</body>
</html>