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
            
            <!-- display profile menu item only for logged in users -->
            <?php
                session_start();
                if($_SESSION['userType'] === 'admin') {
                    echo "<a href='./admin.php' class='nav-item nav-link'>Admin Panel</a>";
                    echo "<a href='./moderator.php' class='nav-item nav-link'>Moderator Panel</a>";
                } else if($_SESSION['userType'] === 'moderator') {
                        echo "<a href='./moderator.php' class='nav-item nav-link'>Moderator Panel</a>";
                }
                // display login and register or logout button
                if(!$_SESSION['userType']) {
                    echo "<button data-toggle='modal' data-target='#loginModal' class='btn btn-primary' type='button'>Login</button>
                    <button data-toggle='modal' data-target='#registerModal' class='btn btn-primary' type='button'>Register</button>";
                } else if($_SESSION['userType']) {
                    echo "<a class='btn btn-primary' href='?logout=1'>Logout</a>";
                }
                // logout and redirect to homepage
                if($_GET['logout']==1) {
                    session_destroy();
                    header("Refresh:0; url=index.php");
                }
            ?>
        </div>
    </div> 
</nav>

<?php 
    include 'login.php';
    include 'register.php';
?>  
