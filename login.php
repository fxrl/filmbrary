<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=filmbrary', 'root', 'root');
 
if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $passwort = $_POST['password'];
    
    //secured by sending sql and user input seperate
    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    // execute interpretes variable as string
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();
        
    //check the pw
    if ($user !== false && password_verify($passwort, $user['password'])) {
        $_SESSION['userid'] = $user['id'];
        // redirect to admin.php
        header("Location: admin.php");
    } else {
        $errorMessage = "Mail Address or password invalid";
    }
    
}
?>

<?php 
  if(isset($errorMessage)) {
      echo $errorMessage;
  }
?>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?login=1" method="post">
            <label for="email">Email</label><br>
            <input type="email" size="40" maxlength="250" name="email"><br>
    
            <label for="password">Password</label><br>
            <input type="password" size="40"  maxlength="250" name="password"><br>
            <button class="btn btn-primary" type="submit">Log In</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>