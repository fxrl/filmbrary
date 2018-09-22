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

        // get production company
        $test = getaccess($popularMovie, 'productionCompanies');
        $test1 = getaccess($test, 'data');
        foreach ($test1 as $test3) {
            $company = getaccess($test3, 'name');
        }

        // get year
        $releaseYear = $popularMovie->getReleaseDate()->format('Y');

        // get genre
        $genreArray = array();
        foreach ($popularMovie->getGenres() as $genre) {
            array_push($genreArray,$genre->getName());
        }

        //get plot description
        $fullPlot = getaccess($popularMovie, 'overview');

            // limit to first sentence of plot
            $regex = '/^(.*?)[.?!]\s/';
            preg_match($regex, $fullPlot, $matches);

            // if the description is only one sentence long use the fullPlot
            $plot = $matches[0] != "" ? $matches[0] : $fullPlot;


        echo 
        "<div class='col-md-6 col-lg-3 mb-4'>
            <div class='card'>
                <img src='https://image.tmdb.org/t/p/w500/",$poster,"' class='card-img-top'>
                <div class='card-body'>
                    <h6 class='card-title'>",$title," | ",$releaseYear,"</h6>
                    <div id='accordion'>
                        <div>
                            <div id=heading'One>
                                <h5 class='mb-0'>
                                    <a class='btn btn-primary' data-toggle='collapse' data-target='#info-",$id,"'","' aria-expanded='true' aria-controls='collapseOne'>
                                        More Info
                                    </a>
                                </h5>
                            </div>

                            <div id='info-",$id,"'","class='collapse' aria-labelledby='headingOne' data-parent='#accordion'>
                                ",$plot,"
                                <a href='https://www.themoviedb.org/movie/",$id,"'","class='btn btn-primary'>Visit Website</a>
                            </div>
                        </div>
                    </div>
                    <button onclick=add() value='",$id,"'","class='btn btn-primary'>Add to favorites</button>
                    <div id='",$id,"'","class='collapse alert-success'>
                        Movie added to Favorites
                    </div>
                </div>
            </div>
        </div>";

    }
?>

