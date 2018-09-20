<?php
    require_once 'vendor/autoload.php';

    $token  = new \Tmdb\ApiToken('399d678918d2d64323e29a196cfacba3');
    $client = new \Tmdb\Client($token);

    // function to access protected api data
    function accessProtected($obj, $prop) {
        $reflection = new ReflectionClass($obj);
        $property = $reflection->getProperty($prop);
        $property->setAccessible(true);
        return $property->getValue($obj);
    };

    $repository = new \Tmdb\Repository\GenreRepository($client);
    $genres     = $repository->loadMovieCollection();


    foreach ($genres as $genre) {
        $name = accessProtected($genre,'name');
        // $id = accessProtected($genre,'id');
        echo '<option>',
                $name,
            '</option>';
    };
