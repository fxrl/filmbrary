<?php 

    include '../components/database.php';
    require_once '../vendor/autoload.php';
    $token  = new \Tmdb\ApiToken('399d678918d2d64323e29a196cfacba3');
    $client = new \Tmdb\Client($token);

    // function to access protected api data
    function getaccess($obj, $prop) {
        $reflection = new ReflectionClass($obj);
        $property = $reflection->getProperty($prop);
        $property->setAccessible(true);
        return $property->getValue($obj);
    };

    if (isset($_POST['id'])) {

        $id = $_POST['id'];

        // load movie from api
        $repository  = new \Tmdb\Repository\MovieRepository($client);
        $movie = $repository->load($id);

        // get title
        $title = (string)$movie->getTitle();

        // get director
        $crew = $movie->getCredits()->getCrew();
        foreach ($crew as $person) {
            $director = (string)($person->getName());
        };

        // get production company
        $test = getaccess($movie, 'productionCompanies');
        $test1 = getaccess($test, 'data');
        foreach ($test1 as $test3) {
            $company = getaccess($test3, 'name');
        }

        // get year
        $releaseYear = $movie->getReleaseDate()->format('Y');

        // get genre
        $genreArray = array();
        foreach ($movie->getGenres() as $genre) {
            $genreName = $genre->getID();

            $sqlGenre = "INSERT INTO genre_movies (movieID, genreID) VALUES ('$id', '$genreName')";

            if ($conn->query($sqlGenre) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sqlGenre . "<br>" . $conn->error;
            };
            // array_push($genreArray,$genre->getName());
        }

        // $genres = json_encode($genreArray);

        // get cover
        $movieCovers = $repository->getImages($id)->filterPosters();
        $unprotected = getaccess($movieCovers, 'data');
        // get only first poster
        foreach($unprotected as $poster) {
            $image = $poster;
            break;
        }

        //get plot description
        $fullPlot = getaccess($movie, 'overview');

            // limit to first sentence of plot
            $regex = '/^(.*?)[.?!]\s/';
            preg_match($regex, $fullPlot, $matches);

            // if the description is only one sentence long use the fullPlot
            $plot = $matches[0] != "" ? $matches[0] : $fullPlot;

        // insert into database
        $sql = "INSERT INTO movies (title, tmdb_id, director, cover, plot, production_company, year) VALUES ('$title', '$id', '$director', '$image', '$plot', '$company', '$releaseYear')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        };

    };
        
?>