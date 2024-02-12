<?php include 'preprocess.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>links shorterener</title>
</head>
<body>
    <form action="inkorten.php" method="get">
        <input type="text" name="url" required>
        <button>inkorten</button>
    </form>
    <?php if (isset($_GET["id"])) echo("http://localhost/links/?l=".$_GET["id"]); ?>
</body>
</html>