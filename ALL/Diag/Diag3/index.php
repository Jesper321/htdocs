<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', "", 'top2000');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $country = $_POST['country'];

    $sql = "INSERT INTO artist (name, country) VALUES ('$name', '$country')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('Location: index.php'); // redirect en POST leeg maken
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Fetch and display existing records
$sql = "SELECT * FROM artist";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["country"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<form action="index.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="country">Country:</label>
    <input type="text" id="country" name="country"><br><br>

    <input type="submit" value="Submit">
</form>