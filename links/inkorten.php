<?php

include 'connectie.php';

$url = $_GET['url'];

if (!filter_var($url, FILTER_VALIDATE_URL)) die("Invalid url");

$foundId = false;
function generateId() {
    $shortenedLink = ""; $acceptedChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";    
    while (strlen($shortenedLink) < 6) {
        $shortenedLink .= $acceptedChars[rand(0, strlen($acceptedChars) - 1)];
    }
    return $shortenedLink;
}

while (!$foundId) {
    $shortenedLink = generateId();
    $results = mysqli_query($conn, "SELECT * FROM links WHERE id = '$shortenedLink'");
    if (mysqli_num_rows($results) === 0) $foundId = true;
}

mysqli_query($conn, "INSERT INTO links (id, link) VALUES ('$shortenedLink', '$url')" );

header("Location: ./?id=$shortenedLink");


