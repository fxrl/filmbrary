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