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