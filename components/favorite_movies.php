<?php 
    // $sql_query = "SELECT * from movies";
    $sql_query = "SELECT title, director, year, production_company, plot, cover, GROUP_CONCAT(genre) as genre FROM movies RIGHT JOIN genre_movies ON movies.tmdb_id = genre_movies.movieID RIGHT JOIN genres ON genre_movies.`genreID` = genres.id  GROUP BY title";
    $result = mysqli_query($conn, $sql_query);
    while ($row = mysqli_fetch_array($result)) {
        // $decoded_genres =json_decode($row['genre']);

        echo  
        "<div class='col-md-6 col-lg-3 mb-4'>
            <div class='card'>
            <img src='https://image.tmdb.org/t/p/w500/",$row['cover'],"' class='card-img-top'>
            <div class='card-body'>
                    <h6 class='card-title'>",$row['title'],"</h6>
                    <div id='accordion'>
                        <div>
                        <div id=heading'One>
                            <div class='btn-group' role='group' aria-label='movie-card-button'>
                                <button class='btn btn-primary collapsed' data-toggle='collapse' data-target='#info-",$row['tmdb_id'],"' aria-expanded='false' aria-controls='collapseOne'>More Info</button> 
                                <a href='https://www.themoviedb.org/movie/",$row['tmdb_id'],"'","class='btn btn-primary'>Website</a>
                                <button onclick='removeMovie(",$row['id'],")' value='",$row['tmdb_id'],"'","class='btn btn-primary' data-toggle='tooltip' data-placement='bottom' title='Remove from Favorites'>-</button>           
                            </div>

                            <div id='info-",$row['tmdb_id'],"'","class='collapse' aria-labelledby='headingOne' data-parent='#accordion'>
                                <p>
                                ",$row['plot'],"
                                </p>
                                <span class='badge badge-secondary' data-toggle='tooltip' data-placement='bottom' title='Released'>",$row['year'],"</span>
                                <span class='badge badge-info' data-toggle='tooltip' data-placement='bottom' title='Director'>",$row['director'],"</span>
                                <span class='badge badge-info' data-toggle='tooltip' data-placement='bottom' title='Production Company'>",$row['production_company'],"</span>";

                            //     foreach ($decoded_genres as $genre) {
                            //         echo "
                            //         <span class='badge badge-primary' data-toggle='tooltip' data-placement='bottom' title='Genre'>
                            //             ",$genre,"
                            //         </span>"
                            //     ;
                            // };


                            echo "      </div>
                            </div>
                        </div>
                        <div id='",$id,"'","class='collapse alert-success'>
                            Movie added to Favorites
                        </div>
                    </div>
                    </div>
                </div>
            </div>";
    };
?>