<?php

$conn = mysqli_connect("localhost", "root", "", "test2"); //test2 = database

$SQL = "INSERT INTO `users` (name, password) VALUES ('koert', 'meneer')";

$results = mysqli_query($conn, $SQL); //conect de twee dingen

// while ($row = mysqli_fetch_row($results)) {
//     print_r($row);
// }

echo readline("$results");
