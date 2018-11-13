<?php 
    include '../components/database.php';

    if (isset($_POST['user'])) {

        // get user info
        $_POST['user_id'] = $id;
        $sql_query = "SELECT user_name, user_type, email FROM users WHERE id=$id";
        $results = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($results);
            $userName = $row['user_name'];
            $userType = $row['user_type'];
            $email = $row['email'];

            echo "
            <form method='post' action=''>
                <div class='form-group'>
                    <label for='name'>User Name</label>
                    <input name='name' type='text' value='$userName' placeholder='John Doe'>
                </div>
                <div class='form-group'>
                    <label for='userType'>User Type</label>
                    <select value='$userType' name='userType'>
                        <option value='admin'>Admin</option>
                        <option value='moderator'>Moderator</option>
                        <option value='browser'>Browser</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label for='email'>User Type</label>
                    <input value='$email' name='email' placeholder='john@doe.com'>
                </div>
                <button name='editUser' type='submit' class='btn btn-primary'>Save Changes</button>
            </form>
          ";

        $userName = '';
        $userType = '';
        $email = '';

        $results->close();
    
    }
?>
