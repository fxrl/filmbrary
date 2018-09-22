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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald:600,700" rel="stylesheet">
</head>

<body>

    <?php 
        include './components/navbar.php'
    ?>

    <div class='carousel slide' id='carousel---hero' data-ride='carousel'>
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class='carousel-inner'>
            <div class='carousel-item active'>
                <img class='d-block w-100' src="./img/jeff-pierre-465509-unsplash.jpg" alt="hero-img">
                <div class='carousel-caption d-none d-md-block'>
                    <h5>Every movie or series you ever wanted to know more about - we got it.</h5>
                </div>
            </div>
            <div class='carousel-item'>
                <img class='d-block w-100' src="./img/jakob-owens-199505-unsplash.jpg" alt="hero-img">
                <div class='carousel-caption d-none d-md-block'>
                    <h5>Collect your favorite movies in your own list.</h5>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carousel---hero" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>

        <a class="carousel-control-next" href="#carousel---hero" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class='body container'>
        <div class='about row py-4'>
            <div class="col-sm-12 text-center">
                <h1>About Filmbrary</h1>
                <p>Adipisicing elit qui pariatur aliquip ut ipsum enim. Magna irure voluptate occaecat laboris reprehenderit qui ad enim esse nulla elit nulla. Et sit culpa esse nisi ipsum adipisicing et. Laborum non Lorem sit consequat ea ullamco eu est laborum culpa ut elit. Fugiat nulla irure sit consectetur qui ad consectetur anim labore ex sint.</p>
            </div>
        </div>

        <div class='browse row pb-4'>
            <div class="col-sm-12 text-center">
                <h2>Browse our Movies</h2>
                <p>elit qui pariatur aliquip ut ipsum enim. Magna irure voluptate occaecat laboris reprehenderit qui ad enim esse nulla elit nulla. Et sit culpa esse nisi ipsum adipisicing et. Laborum non Lorem sit consequat ea ullamco eu est laborum culpa ut elit. Fugiat nulla irure sit consectetur qui ad consectetur anim labore ex sint.</p>
                <a class='btn btn-primary' href='browse.php'>Browse</a>
            </div>
        </div>
    </div>

    <?php
        include './components/footer.php'
    ?>

</body>
</html>