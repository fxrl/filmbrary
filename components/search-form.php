<div class='container search'>
        <h3>Search Movie</h3>
            <form class='form-inline mb-4' name="search" action="./search.php" method="get">
                <input name="searchterm" placeholder='Title' class='form-control' id='movie-title'type="text">
                <select id='select-genre' name="select-genre" class='form-control'>
                    <?php 
                        include 'components/genres.php';
                    ?>
                </select>
                <button type='submit' class='btn btn-primary' name="search" value="Search">Search</button>
            </form>
    </div>
</div>