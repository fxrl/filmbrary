<?php 
    include 'config.php'
?>

<nav class='navbar navbar-expand-md navbar-light'>
    <a href="./index.php" class="navbar-brand <?php echo($current_page == 'index.php' || $current_page == '') ? 'active' : NULL?>">
        Filmbrary
    </a>
    <button class='navbar-toggler' type='button' data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class='collapse navbar-collapse' id="navbarNavAltMarkup">
        <div class='navbar-nav'>
            <a href="./browse.php" class="nav-item nav-link <?php echo($current_page == 'browse.php' || $current_page == '') ? 'active' : NULL ?>">Browse Movies</a>
            <a href="./profile.php" class="nav-item nav-link <?php echo($current_page == 'profile.php' || $current_page == '') ? 'active' : NULL ?>">My Movies</a>
            <a href="./about.php" class="nav-item nav-link <?php echo($current_page == 'about.php' || $current_page == '') ? 'active' : NULL ?>">About</a>
            <a href="./contact.php" class="nav-item nav-link <?php echo($current_page == 'contact.php' || $current_page == '') ? 'active' : NULL ?>">Contact</a>
            <button data-toggle="modal" data-target="#loginModal" class="btn btn-primary" type="button">Login</button> 
            <a href="register.php" class="btn btn-primary" type="button">Register</a>   
        </div>
    </div> 
</nav>

<?php 
    include 'login.php';
?>  
