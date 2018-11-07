<?php
        include 'components/database.php';

        $target_dir = "img/carousel/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo 
            "<div class='alert alert-danger' role='alert'>
                Sorry, file already exists.
            </div>";
        
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 1000000) {
            echo 
            "<div class='alert alert-danger' role='alert'>
            Sorry, your file is too large.
            </div>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo            
            "<div class='alert alert-danger' role='alert'>
                Sorry, only JPG, JPEG, PNG & GIF files are allowed.
            </div>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo 
            "<div class='alert alert-danger' role='alert'>
                Sorry, your file was not uploaded.            
            </div>";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                // write filename and type to database
                $name = $_FILES['fileToUpload']['name'];
                $type = $_FILES['fileToUpload']['type'];

                $sql = "INSERT INTO files (file_name, type) VALUES ('$name', '$type')";
                mysqli_query($conn, $sql);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    ?>