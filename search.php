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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

    <?php 
        include 'components/navbar.php';
    ?>

    <div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h1 class='display-4'>Search Results</h1>
            <p class='lead'>Ullamco incididunt reprehenderit culpa excepteur.</p>
        </div>
    </div>

    <?php 
        include 'components/search-form.php';
    ?>

    <div class='container'>
        <div class='row'>
        
    <?php
        require_once 'vendor/autoload.php';

        $token  = new \Tmdb\ApiToken('399d678918d2d64323e29a196cfacba3');
        $client = new \Tmdb\Client($token);

            // function to access protected api data
        function getaccess($obj, $prop) {
            $reflection = new ReflectionClass($obj);
            $property = $reflection->getProperty($prop);
            $property->setAccessible(true);
            return $property->getValue($obj);
        };
        if (isset($_GET['searchterm'])) {
            $searchterm = $_GET['searchterm'];

            $query = new \Tmdb\Model\Search\SearchQuery\MovieSearchQuery();
            $query->page(1);
            $repository = new \Tmdb\Repository\SearchRepository($client);
            $find = $repository->searchMovie($searchterm, $query);
    
            foreach ($find as $movie) {
                // get title
                $title = $movie->getTitle();

                //get plot description
                $plot = getaccess($movie, 'overview');
    
                // get image
                $id = $movie->getID();
                $movieRepository = new \Tmdb\Repository\MovieRepository($client);
                $moviesPosters = $movieRepository->getImages($id)->filterPosters();
                $unprotected = getaccess($moviesPosters, 'data');
                // get only first poster
                foreach($unprotected as $poster) {
                    $image = $poster;
                    break;
                }
        
                echo 
                "<div class='col-md-6 col-lg-3 mb-4'>
                    <div class='card'>
                        <img src='https://image.tmdb.org/t/p/w500/",$image,"' class='card-img-top'>
                        <div class='card-body'>
                            <h6 class='card-title'>",$title,"</h6>
                            <p class='card-text'>",$plot,"</p>
                            <button onclick=add() value='",$id,"'","class='btn btn-primary'>Add to favorites</button>
                            <a href='https://www.themoviedb.org/movie/",$id,"'","class='btn btn-primary'>More Info</a>
                        </div>
                    </div>
                </div>";
        
            }

        }
    ?>
        </div>
    </div>
    
    
    <?php
        include 'components/footer.php'
    ?>
    <script src="js/scripts.js"></script>
</body>
</html>