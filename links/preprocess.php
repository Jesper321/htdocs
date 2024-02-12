<?php

if (isset($_GET["l"])) {

    include 'connectie.php';

    $id = $_GET["l"];

    $results = mysqli_query($conn, "SELECT * FROM links WHERE id = '$id';");

    echo("test");

    if (mysqli_num_rows($results) > 0) {

        $rij = mysqli_fetch_assoc($results);
        var_dump($rij);
        header("Location: ". $rij["link"]);

    }

    die();

}