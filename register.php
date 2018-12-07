<?php 
session_start();
include 'components/database.php';
$pdo = new PDO('mysql:host=localhost;dbname=filmbrary', 'root', 'root');
?>
 
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
    $error = false;
    $email = htmlspecialchars($_POST['email']);
    $passwort = htmlspecialchars($_POST['passwort']);
    $passwort2 = htmlspecialchars($_POST['passwort2']);
    $type = 'browser';
  
    
    if(strlen($passwort) == 0) {
        echo 
        "<div class='alert alert-danger' role='alert'>
            Please enter a password.
        </div>";
        $error = true;
    }
    if($passwort != $passwort2) {
        echo 
        "<div class='alert alert-danger' role='alert'>
        Passwords do not match.
        </div>";
        $error = true;
    }
    
    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) { 
        $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();
        
        if($user !== false) {
            
            echo 
            "<div class='alert alert-danger' role='alert'>
                Email already in use.
            </div>";
            $error = true;
        }    
    }
    
    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {    
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
        
        $statement = $pdo->prepare("INSERT INTO users (email, password, user_type) VALUES (:email, :passwort, :type)");
        $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash, 'type' => $type));
        
        if($result) {        
            echo
            "<div class='alert alert-success' role='alert'>
                You have been successfully registered. <a href='login.php'>Zum Login</a>
            </div>";
            $showFormular = false;
        } else {
            echo 
            "<div class='alert alert-danger' role='alert'>
                Error while saving. Please try again.
            </div>";
        }
    } 
}

?>

        <?php
            if($showFormular) {
        ?>

            <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerLabel">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="?register=1" method="post">
                    E-Mail:<br>
                    <input type="email" size="40" maxlength="250" name="email"><br><br>
                    Dein Passwort:<br>
                    <input type="password" size="40"  maxlength="250" name="passwort"><br>
                    Passwort wiederholen:<br>
                    <input type="password" size="40" maxlength="250" name="passwort2"><br><br>
                    <input type="submit" value="Abschicken">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
 
 

        <?php
        } //Ende von if($showFormular)
        ?>
