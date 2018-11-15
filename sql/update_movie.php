<?php 
    include '../components/database.php';

    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $tmdb = $_POST['tmdb'];
        $director = $_POST['director'];
        $year = $_POST['year'];
        $prod = $_POST['prod'];
        $plot = $_POST['plot'];

        $sql_query = "UPDATE `movies` SET 
            title = '$title',
            tmdb_id = '$tmdb',
            director = '$director',
            year = '$year',
            production_company = '$prod',
            plot = '$plot' 
        WHERE id = $id";

        mysqli_query($conn, $sql_query);
    };
?>
