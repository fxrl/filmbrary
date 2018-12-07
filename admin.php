
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
    <script src="js/bootstable.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
    <?php 
        include 'components/navbar.php';
        include 'components/check_login_admin.php';
        ?>

    <div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h1 class='display-4'>Admin Control Panel</h1>
            <p class='lead'>Manage Users and Slides</p>
        </div>
    </div>

    <div class='container'>
        <div class='admin row'>
            <div class='col'>                
                <!-- create new user -->
                <div class='my-4'>
                    <h3>Create New User</h3>
                    <form method='POST' action="sql/create_user.php">
                        <div class='form-group'>
                            <label for="username">Username</label>
                            <input type="text" class='form-control' name="username" placeholder='John Doe'>
                        </div>

                        <div class='form-group'>
                            <label for="email">Email</label>
                            <input type="email" class='form-control' name="email" placeholder='john@doe.com'>                    
                        </div>

                        <div class='form-group'>
                            <label for="password">Password</label>
                            <input type="password" class='form-control' name='password'>                    
                        </div>

                        <div class='form-group'>
                            <label for="userType">User Type</label>
                            <select class='form-control' name="userType">
                                <option value="admin">Admin</option>
                                <option value="browser">Browser</option>
                                <option value="moderator">Moderator</option>
                            </select>
                        </div>
                        <button name='submit' class='btn btn-primary mt-2'type='submit'>Submit</button>
                    </form>
                </div>
            </div>
            <div class=' col'>
                <!-- upload new slides -->
                <h3>Upload Slide</h3>
                <!-- run form on same page with action attribute -->
                <form class='my-4' enctype="multipart/form-data" action="<?php echo $SERVER_['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                        <label class='btn btn-primary' for="fileToUpload">Select Picture</label>
                        <input type="file" class='form-control' name="fileToUpload" id="fileToUpload">
                        <p class='mt-2'>Please select a image file.</p>
                        <small>Maximum allowed filesize: 1.5mb</small>
                    </div>
                    <input type="submit" class=' btn btn-primary' value="Upload Image" name="submit">        
                </form>
                <!-- upload script -->
                <?php include 'components/file_upload.php'?>
            </div>
        </div>

        <div class='row'>
            <div class='col'>
                <!-- edit users -->
                <h3>Edit Users</h3>
                <table class="table table-responsive-md table-sm table-bordered text-center" id="userTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created At</th>
                            <th scope="col">User Type</th>
                            <th scope="col">User Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include 'sql/user_table.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src='js/scripts.js'></script>
    <script src='js/user-table.js'></script>

    <?php include 'components/footer.php'; ?>

</body>
</html>