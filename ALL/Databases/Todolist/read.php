<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    

<?php
// Query maken om alle rijen uit de tabel taak op te halen
$query = $conn->query("SELECT * FROM taak");
?>
<!-- Tabel aanmaken in HTML -->
<table>
    <tr>
        <th>Naam</th>
        <th>Taakomschrijving</th>
        <th>Deadline</th>
        <th>Update</th>
        <th >Verwijderen</th>
    </tr>
    <!-- While loop die door alle opgehaalde rijen van de tabel taak gaat -->
    <?php while ($row = $query->fetch()) { ?>
    <!-- Alle data van de opgehaalde rij in table row stoppen -->
    <tr>
        <td><?php echo $row['naam']; ?></td>
        <td><?php echo $row['taakomschrijving']; ?></td>
        <td><?php echo $row['deadline']; ?></td>
        <td><a href="update.php?id=<?php echo $row['id']; ?>"><i class='bx bx-pencil'></i></a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>"><i class='bx bx-trash'></i></a></td>
    </tr>
    <?php } ?>
    <style>
        i {
            color: darkblue;
        }
        td {
            color: darkblue;
        }
    </style>
</table>
</body>
</html>