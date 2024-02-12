<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<?php
    session_start();

    if(isset($_POST['naam']) && isset($_POST['wachtwoord'])) {
       if($_POST['naam'] == 'jeppie' && $_POST['wachtwoord'] == 'jeppie') {
        $_SESSION['is_ingelogd'] = true;
        header(header: 'Location: box.php');
       } else { 
        header(header: 'Location: geentoegang.php');
    }
}     
?>
    <form method="POST">
    <div class="container">
            <div id="header">
                Login!
            </div>
            <div id="username">
                <input type="text" name="naam" placeholder="Username">
            </div>
            <div id="password">
                <input type="password" name="wachtwoord" placeholder="Password">
            </div>
            <div id="sub"> 
                <input type="submit" value="Login">
            </div>
    </div>
        <div id="mini">
            Jo man
        </div>
    </form>

</body>
</html>