<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Filmbrary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="../../styles/main.css" />
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class='container'>
        <div class='row'>
            <div class='col-md-6 col-lg-3 mb-4'>
                <div class="card">
                    <img src="https://image.tmdb.org/t/p/w500//4oD6VEccFkorEBTEDXtpLAaz0Rl.jpg" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Solo: A Star Wars Story</h6>
                        <div id="accordion">
                            <div>
                                <div id="heading'One">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#info-348350" aria-expanded="false" aria-controls="collapseOne">More Info</button> 
                                        <a href="https://www.themoviedb.org/movie/348350" class="btn btn-primary">Website</a>
                                        <button onclick="add()" value="348350" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Add to Favorites">+</button>
                                    </div> 
                                </div>

                                <div id="info-348350" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                    <p>
                                        Through a series of daring escapades deep within a dark and dangerous criminal underworld, Han Solo meets his mighty future copilot Chewbacca and encounters the notorious gambler Lando Calrissian.
                                    </p>
                                    <span class="badge badge-secondary" data-toggle="tooltip" data-placement="bottom" title="Released">2018</span>
                                    <span class="badge badge-primary" data-toggle="tooltip" data-placement="bottom" title="Genre">Action</span>
                                    <span class="badge badge-primary" data-toggle="tooltip" data-placement="bottom" title="Genre">Thriller</span>
                                    <span class="badge badge-info" data-toggle="tooltip" data-placement="bottom" title="Director">Han Salo</span>
                                    <span class="badge badge-info" data-toggle="tooltip" data-placement="bottom" title="Production Company">Universal Studios</span>
                                </div>
                            </div>
                        </div>
                        <div id="348350" class="collapse alert-success">
                            Movie added to Favorites
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/scripts.js"></script>
</body>
</html>



