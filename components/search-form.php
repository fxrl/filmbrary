<div class='container'>
        <form class='form-inline mb-4' name="search" action="./search.php" method="get">
            <label for="searchterm" class='mr-2'>Title</label>
            <input name="searchterm" placeholder='Title' class='form-control mr-4' id='movie-title'type="text">

            <label for="select-genre" class='mr-2'>Genre</label>
            <select id='select-genre' name="select-genre" class='form-control mr-4'>
                <?php 
                    include 'components/genres.php';
                ?>
            </select>
            
            <button type='submit' class='btn btn-primary' name="search" value="Search">Search</button>
        </form>
    </div>