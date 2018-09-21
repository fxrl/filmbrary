<?php 
    $sql_query = "SELECT * from movies";
    $result = mysqli_query($conn, $sql_query);
    while ($row = mysqli_fetch_array($result)) {
        $decoded_genres =json_decode($row['genre']);

        echo 
        "<div class='col-md-6 col-lg-3 mb-4'>
            <div class='card'>
            <img src='https://image.tmdb.org/t/p/w500/",$row['cover'],"' class='card-img-top'>
            <div class='card-body'>
                    <h6 class='card-title'>",$row['title'],"</h6>
                    <div id='accordion'>
                        <div>
                            <div id=heading'One>
                                <h5 class='mb-0'>
                                    <a class='btn btn-primary' data-toggle='collapse' data-target='#info-",$row['tmdb_id'],"'","' aria-expanded='true' aria-controls='collapseOne'>
                                        More Info
                                    </a>
                                </h5>
                            </div>

                            <div id='info-",$row['tmdb_id'],"'","class='collapse' aria-labelledby='headingOne' data-parent='#accordion'>
                                ",$row['plot'];

                                foreach ($decoded_genres as $genre) {
                                    echo '<br>',$genre;
                                };


        echo
                                "<a href='https://www.themoviedb.org/movie/",$row['tmdb_id'],"'","class='btn btn-primary'>Visit Website</a>
                            </div>
                        </div>
                    </div>
                    <button onclick=removeMovie(",$row['id'],") class='btn btn-primary'>Remove</button>
                </div>
            </div>
        </div>";
    };
?>