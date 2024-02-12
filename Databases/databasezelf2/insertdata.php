<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_query("localhost", "root", "", "test2");

    $sql ="INSERT INTO test2 ( id, vnaam, anaam, email, gebdatum, opmerkingen) VALUES 
    ( 'diezelstraat', 'zwolle', 30 ) ";

    $results = mysqli_query($conn, $sql);

    mysqli_close($conn);
    ?>
</body>
</html>