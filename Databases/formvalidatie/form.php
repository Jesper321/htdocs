<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'form');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM form";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - naam: " . $row["naam"]. " " . $row["tv"]. " " . $row["anaam"] . " " . $row["PC"] . " " . $row["Plaats"]. " " . $row["telefoon"] . " " . $row["email"]. " " . $row["geslacht"]. " " . $row["boyband"]. " " . $row["geb.datum"]. "<br>";
  }
} else {
  echo "0 results";
}
