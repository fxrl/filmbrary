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

    $repository = new \Tmdb\Repository\MovieRepository($client);
    // get popular movies
    $popularMovies = $repository->getPopular();
    // loop through movies
    foreach ($popularMovies as $popularMovie) {
        // get title
        $title = $popularMovie->getTitle();

        // get image
        $id = $popularMovie->getID();
        $popularMoviesPosters = $repository->getImages($id)->filterPosters();
        $unprotected = getaccess($popularMoviesPosters, 'data');
        // get only first poster
        foreach($unprotected as $poster) {
            $image = $poster;
            break;
        }

        //get plot description
        $plot = getaccess($popularMovie, 'overview');

        // //get keywords
        // $movie = $repository->load($id);
        // foreach ($movie->getKeywords() as $keyword) {
        //    echo '<br/>', $keyword->getName();
        // }

        echo 
        "<div class='col-md-6 col-lg-3 mb-4'>
            <div class='card'>
                <img src='https://image.tmdb.org/t/p/w500/",$poster,"' class='card-img-top'>
                <div class='card-body'>
                    <h6 class='card-title'>",$title,"</h6>
                    <p class='card-text'>",$plot,"</p>
                    <button onclick=add() value='",$id,"'","class='btn btn-primary'>Add to favorites</button>
                    <a href='https://www.themoviedb.org/movie/",$id,"'","class='btn btn-primary'>More Info</a>
                </div>
            </div>
        </div>";

    }
?>

