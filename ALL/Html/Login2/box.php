<?php
session_start();
if ($_SESSION['is_ingelogd'] != true) {
    header("Location: login2.php");
    die();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boxystyle.css" type="text/css">

    <title>Document</title>
</head>
<body>
<div class="container">
        
    <div class="header">
        Header
    </div>
    <div class="rounded" id="nav">
        <div href="home.asp">home</div>
        <div>menu a</div>
        <div>menu b</div>
        <div>menu c</div>
    </div>

    <div class="main">
        <div class="sidebar">sidebar_left</div>
        <div class="content">content
        </div>
        <div class="sidebar">sidebar_right</div>
    </div>

    <div class="footer">
        <div class="logout"><a href="logout.php">Logout</a>
    </div> 
</div>

</body>
</html>