<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Filmbrary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="./styles/main.css" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        include './components/navbar.php';
    ?>

    <div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h1 class='display-4'>About Us</h1>
            <p class='lead'>Who we are and what drives us.</p>
        </div>
    </div>

    <div class='container'>
        <div class='motivation row'>
            <div class="col-sm-12">
                <h1>Our Motivation</h1>
                <p>Adipisicing elit qui pariatur aliquip ut ipsum enim. Magna irure voluptate occaecat laboris reprehenderit qui ad enim esse nulla elit nulla. Et sit culpa esse nisi ipsum adipisicing et. Laborum non Lorem sit consequat ea ullamco eu est laborum culpa ut elit. Fugiat nulla irure sit consectetur qui ad consectetur anim labore ex sint.</p>
                <p>Adipisicing elit qui pariatur aliquip ut ipsum enim. Magna irure voluptate occaecat laboris reprehenderit qui ad enim esse nulla elit nulla. Et sit culpa esse nisi ipsum adipisicing et. Laborum non Lorem sit consequat ea ullamco eu est laborum culpa ut elit. Fugiat nulla irure sit consectetur qui ad consectetur anim labore ex sint.</p>
            </div>
        </div>
    </div>

    <div class='container'>
        <div class='jumbotron'>
            <h2 class='display-5'>Meet the Team</h2>
            <p class='lead'>Quis laboris nulla commodo aute reprehenderit excepteur consectetur qui ea nostrud quis culpa nisi.</p>
        </div>
    </div>

    <div class='team container'>
        <div class='row'>
            <div class='col-md-6 col-lg-3 my-3'>
                <div class='card'>
                    <img src="./img/team/dani-vivanco-566013-unsplash.jpg" class='card-img-top' alt="">
                    <div class='card-body'>
                        <h6 class='card-title'>Full Name</h6>
                        <p class='card-text'>Est Lorem do consequat eu.</p>
                    </div>
                </div>
            </div>

            <div class='col-md-6 col-lg-3 my-3'>
                <div class='card'>
                    <img src="./img/team/ethan-haddox-541053-unsplash.jpg" class='card-img-top' alt="">
                    <div class='card-body'>
                        <h6 class='card-title'>Full Name</h6>
                        <p class='card-text'>Est Lorem do consequat eu.</p>
                    </div>
                </div>
            </div>

            <div class='col-md-6 col-lg-3 my-3'>
                <div class='card'>
                    <img src="./img/team/joseph-gonzalez-399972-unsplash.jpg" class='card-img-top' alt="">
                    <div class='card-body'>
                        <h6 class='card-title'>Full Name</h6>
                        <p class='card-text'>Est Lorem do consequat eu.</p>
                    </div>
                </div>
            </div>

            <div class='col-md-6 col-lg-3 my-3'>
                <div class='card'>
                    <img src="./img/team/lucas-sankey-378674-unsplash.jpg" class='card-img-top' alt="">
                    <div class='card-body'>
                        <h6 class='card-title'>Full Name</h6>
                        <p class='card-text'>Est Lorem do consequat eu.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <?php 
        include './components/footer.php';
    ?>
    


</body>
</html>