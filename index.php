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

    <!-- Carousel Background -->

    <header>
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="overlay"></div>
                <div class="col-lg-12 hero--content">
                    <h1>Filmbrary</h1>
                    <hr>
                    <p>Browse movies and create a collection of your favorite flicks.</p>
                    <a href="browse.php" class="btn btn-primary" >Browse Movies</a>
                </div>

                <?php 
                    include 'components/database.php';

                    $sql = "SELECT file_name FROM files";
                    $result = mysqli_query($conn, $sql); 
                    while ($row = mysqli_fetch_array($result)) {
                        $file = $row['file_name'];
                        $url = 'img/carousel/' . $file;
                        echo "<div class='carousel-item' style='background-image: url($url)'></div>";                    }
                ?>
            </div>
        </div>
    </header>

    <?php
        include './components/footer.php'
    ?>
    
    <script>
        // make first slide element active
        $('.carousel-item').first().addClass('active');
    </script>
</body>
</html>