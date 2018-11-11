<?php 
    include 'components/check_login.php';
?>

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
        include 'components/navbar.php';
    ?>

    <div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h1 class='display-4'>Profile</h1>
            <p class='lead'>Manage your account</p>
        </div>
    </div>

    <div class='container'>
        <div class='row'>
            <div class='col'>
                <h3>Hi <?php echo $_SESSION['username']?></h3>
                <p>
                    Manage your account and upload fresh pictures for your personalised filmbrary experience.
                </p>
                <button class='btn btn-primary'>Log Out</button>
                <button class='btn btn-primary'>Delete Account</button>
            </div>
            <div class='col'>
                <h3>Create New Movie</h3>
                <form method='POST' action="sql/create_movie.php">
                    <div class='form-group'>
                        <label for="title">Title</label>
                        <input type="text" name="title" placeholder='The Big Lebowski'>
                    </div>

                    <div class='form-group'>
                        <label for="tmdb">TMDB ID</label>
                        <input type="number" name="tmdb" placeholder='111'>                    
                    </div>

                    <div class='form-group'>
                        <label for="year">Year</label>
                        <input type="number" name="year" placeholder='2018'>                    
                    </div>

                    <div class='form-group'>
                        <label for="director">Director</label>
                        <input type="text" name='director'>                    
                    </div>

                    <div class='form-group'>
                        <label for="plot">Plot</label>
                        <input type="text" name='plot'>                    
                    </div>

                    <button name='submit' class='btn btn-primary'type='submit'>Submit</button>
                </form>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
                <h3>Edit Users</h3>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Title</th>
                        <th scope="col">TMDB ID</th>
                        <th scope="col">Director</th>
                        <th scope="col">Year</th>
                        <th scope="col">Production Company</th>
                        <th scope="col">Plot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include 'sql/movie_table.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php 
        include 'components/footer.php';
    ?>
    <script src='js/scripts.js'></script>
</body>
</html>