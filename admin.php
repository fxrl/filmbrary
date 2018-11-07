<?php 
    include 'components/check_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Filmbrary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/main.css" />
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php 
        include 'components/navbar.php';
    ?>

    <div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h1 class='display-4'>Profile</h1>
            <p class='lead'>Manage your account</p>
        </div>
    </div>

    <div class='container'>
        <div class='row'>
            <div class='col'>
                <h3>Hi <?php echo $_SESSION['username']?></h3>
                <p>
                    Manage your account and upload fresh pictures for your personalised filmbrary experience.
                </p>
                <button class='btn btn-primary'>Log Out</button>
                <button class='btn btn-primary'>Delete Account</button>
            </div>
            <div class='col'>
                <h3>Upload Slide</h3>
                <h6>You can add custom pictures to the slider on the startpage.</h6>
                <form class='my-4' enctype="multipart/form-data" action="<?php echo $SERVER_['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="fileToUpload">Select Picture</label><br>
                        <input type="file" name="fileToUpload" id="fileToUpload"><br>
                        <small>Maximum allowed filesize: 1.5mb</small>
                    </div>
                    <input type="submit" value="Upload Image" name="submit">        
                </form>
                <?php include 'components/file_upload.php'?>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
                <h3>Edit Users</h3>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        <th scope="col">User Type</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Delete User</th>
                        <th scope="col">Edit User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include 'sql/user_table.php';
                        ?>
                    </tbody>
                </table>
            </div>
            <div class='col'>
                <h3>Create New User</h3>
                <form action="">
                    <div class='form-group'>
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder='John Doe'>
                    </div>

                    <div class='form-group'>
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder='john@doe.com'>                    
                    </div>

                    <div class='form-group'>
                        <label for="password">Password</label>
                        <input type="text" name='password'>                    
                    </div>

                    <div class='form-group'>
                        <label for="userType">User Type</label>
                        <select name="userType">
                            <option value="admin">Admin</option>
                            <option value="browser">Browser</option>
                            <option value="moderator">Moderator</option>
                        </select>
                    </div>
                    <button class='btn btn-primary'type='submit'>Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php 
        include 'components/footer.php';
    ?>
    <script src='js/scripts.js'></script>
</body>
</html>