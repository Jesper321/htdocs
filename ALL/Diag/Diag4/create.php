<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    echo "name = ".$name;
    $name = $_POST['name'];
    $country = $_POST['country'];
    $jaartal = $_POST['jaartal'];

    $query = "INSERT INTO artist (name, country, jaartal) VALUES ('".$name."', '$country', '$jaartal')";
    $conn->exec($query);
    header("location: index.php");
}
?>