<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        i {
            color: darkblue;
        }
        td {
            color: darkblue;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
 

<?php
$query = $conn->query("SELECT * FROM artist");
?>

<table>
    <tr>
        <th>name</th>
        <th>country</th>   
        <th>jaartal</th>
        <th>Update</th>
        <th >Verwijderen</th>
    </tr>
    
    <?php while ($row = $query->fetch()) { ?>

    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['country']; ?></td>
        <td><?php echo $row['jaartal']; ?></td>
        <td><a href="update.php?id=<?php echo $row['id']; ?>"><i class='bx bx-pencil'></i></a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>"><i class='bx bx-trash'></i></a></td>
    </tr>
    <?php } ?>
    
</table>
</body>
</html>