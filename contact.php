<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Filmbrary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="./styles/main.css" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        include 'components/navbar.php';
    ?>

    <div class='jumbotron jumbotron-fluid'>
        <div class='container'>
            <h1 class='display-4'>Contact</h1>
            <p class='lead'>Have questions or suggestions? Talk to us.</p>
        </div>
    </div>

    <div class='form container-fluid'>
        <form>
            <div class='form-group'>
                <label for="name">Name</label>
                <input class='form-control' id='name' type="text" placeholder='Jon Doe'>
            </div>

            <div class='form-group'>
                <label for="mail">Mail</label>
                <input class='form-control' id='mail' type="email" placeholder='john@doe.com'>
            </div>

            <div class='form-group'>
                <label for="msg">Your Message</label>
                <textarea class='form-control' id='msg' rows="10" placeholder='Jon Doe'></textarea>
                <button type='submit' class='btn btn-primary'>Submit</button>
            </div>
        </form>
    </div>

    <?php 
        include 'components/footer.php';
    ?>

</body>
</html>