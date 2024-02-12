<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <style>
td, th {
  border: 1px solid #999;
  padding: 0.5rem;
}
body {
    background: linear-gradient(90deg, rgba(11,200,204,1) 0%, rgba(209,195,195,1) 82%);
    font-family: verdana;
}
.box {
    width: 500px;
    margin: auto;
    text-align: center;
}
</style>

    <title>Diagtoets-4 Jesper</title>
 
</head>
<body>
    <div class="box">
        add
    <form method="post" action="create.php">
        <input type="text" placeholder="name" name="name"><br>
        <input type="text" placeholder="country" name="country"><br>
        <input type="number" placeholder="jaartal" name="jaartal" value="2000"><br>
        <input type="submit" name="submit" value="Verzenden"><br>
    </form><br>

    <?php include 'read.php'; ?>
</div>    

</body>
</html>
