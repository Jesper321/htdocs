<?php

$conn = mysqli_connect("localhost", "root", "", "test2"); //test2 = database

$SQL = "SELECT * FROM users";

$results = mysqli_query($conn, $SQL); //conect de twee dingen

while ($row = mysqli_fetch_row($results)) {
    foreach ($row as $value) {
        print($value . "<br>");
    }
}

