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
    <script src="js/bootstable.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
    <?php 
        include 'components/navbar.php';
        include 'components/check_login_mod.php';
    ?>

    <div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h1 class='display-4'>Moderator Control Panel</h1>
            <p class='lead'>Manage movies</p>
        </div>
    </div>

    <div class='container'>
        <div class='row'>
            <div class='col mt-4'>
                <h3>Edit Movies</h3>
                <table class="table table-responsive-md table-sm table-bordered text-center" id="makeEditableMovies">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID</th>
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
    
        <div class='admin row'>
            <!-- create new movie -->
            <div class='col'>
                <h3>Create New Movie</h3>
                <form method='POST' action="sql/create_movie.php">
                    <div class='form-group'>
                        <label for="title">Title</label>
                        <input class='form-control' type="text" name="title" placeholder='The Big Lebowski'>
                    </div>

                    <div class='form-group'>
                        <label for="tmdb">TMDB ID</label>
                        <input class='form-control' type="number" name="tmdb" placeholder='111'>                    
                    </div>

                    <div class='form-group'>
                        <label for="year">Year</label>
                        <input class='form-control' type="number" name="year" placeholder='2018'>                    
                    </div>

                    <div class='form-group'>
                        <label for="director">Director</label>
                        <input class='form-control' type="text" name='director'>                    
                    </div>

                    <div class='form-group'>
                        <label for="plot">Plot</label>
                        <textarea class='form-control' type="text" name='plot'></textarea>                   
                    </div>

                    <div class='form-group'>
                        <label for="genre">Genre</label>
                        <select class='form-control' name="genre">
                            <option value="28">Action</option>
                            <option value="12">Adventure</option>
                            <option value="16">Animation</option>
                            <option value="35">Comedy</option>
                            <option value="80">Crime</option>
                            <option value="99">Documentary</option>
                            <option value="18">Drama</option>
                            <option value="10751">Family</option>
                            <option value="14">Fantasy</option>
                            <option value="36">History</option>
                        </select>
                    </div>

                    <button name='submit' class='btn btn-primary'type='submit'>Submit</button>
                </form>
            </div>
            <div class='col'></div>
        </div>
    </div>

    <?php 
        include 'components/footer.php';
    ?>
    <script src='js/scripts.js'></script>
    <script src='js/movie-table.js'></script>
</body>
</html>