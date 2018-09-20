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

        // get year

        // get production company
        // $company = $movie->getProductionCompany();
        //     echo '<pre>',
        //         print_r($company),
        //     '</pre>';

        // get genre

        // get cover
        $movieCovers = $repository->getImages($id)->filterPosters();
        $unprotected = getaccess($movieCovers, 'data');
        // get only first poster
        foreach($unprotected as $poster) {
            $image = $poster;
            break;
        }

        // insert into database
        $sql = "INSERT INTO movies (title, tmdb_id, director, cover) VALUES ('$title', '$id', '$director', '$image')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        };

    };
        
?>