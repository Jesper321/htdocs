<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "get">
        gebruiker: <input type="text" name="loginnaam"> <br>
        wachtwoord: <input type="password" name="wachtwoord"> <br>

        <input type="radio" name="gender" value="M"> M <br>
        <input type="radio" name="gender" value="V"> V <br>
        <input type="radio" name="gender" value="X"> X <br>

        <input type="checkbox" name="remember" value="true"> onthoud mij <br>
        <input type="checkbox" name="test" value="true"> test <br>
    
    <select name="klas">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>

     </select>  <br>
    <input type="submit" value="log in">
</form>

<?php
    if(empty($_GET))
    {
        echo "vul aub wat in en druk op de knop";
        return;
    }

    $name =          $_GET['loginnaam'];
    $pass =          $_GET['wachtwoord'];
    $gender =        $_GET['gender'];
    $remember =      $_GET['remember'];
    $test =          $_GET['test'];
    $class =         $_GET['klas'];

    echo "<br>";
    echo "<br><p>";
    echo $name . " " . $pass . " " . $gender . " " . $remember . " " . $test . " " . $class;
    echo "</p>"; 
?>
</body>
</html>