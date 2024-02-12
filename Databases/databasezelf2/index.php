<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #table{
            background-color: yellow;
            border: solid white 1px;
        }
    </style>
</head>
<body>

<?php

    $conn = mysqli_connect("localhost", "root", "", "test2");

    $sql ="SELECT * FROM test2";

    $results = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($results);


    echo "<table id=\"table\">";
    while($row = mysqli_fetch_assoc($results))
    {
        $render .= "<tr>";
        $render .= "<td>" . $row['id'] . "<td>";
        $render .= "<td>" . $row['vnaam'] . "<td>";
        $render .= "<td>" . $row['tv'] . "<td>";
        $render .= "<td>" . $row['anaam'] . "<td>";
        $render .= "<td>" . $row['email'] . "<td>";
        $render .= "<td>" . $row['gebdatum'] . "<td>";
        $render .= "<td>" . $row['opmerkingen'] . "<td>";
       

    }
$render .= "</table>";

mysqli_close($conn);

    ?>

<div> blalal </div>

<?php
    echo $render
?>
</body>
</html>
