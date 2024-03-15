<?php
// Kopieer code van connect.php naar dit bestand
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>To-do list met PHP, PDO en een MySQL database</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div class="box"><!-- Formulier om een taak te versturen naar de database en in de taak tabel -->
    <form method="post" action="create.php">
        <input type="text" placeholder="Naam" name="naam"><br>
        <input type="text" placeholder="Taakomschrijving" name="taakomschrijving"><br>
        <input type="date" name="deadline"><br>
        <input type="submit" name="submit" value="Verzenden"><br>
    </form><br>
    <!-- Kopieer code van read.php naar dit bestand -->
    <?php include 'read.php'; ?>
</div>    
<style>
td, th {
  border: 1px solid #999;
  padding: 0.5rem;
}
body {
    background-color: lightblue;
}
.box {
    width: 500px;
    margin: auto;
    text-align: center;
}

</style>
</body>
</html>
