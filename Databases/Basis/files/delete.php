<?php
// echo "in delete<br>";

// echo "<pre>"; print_r($_GET); echo "</pre>";

if(isset($_GET['action']) && $_GET['action'] == "delete" && is_numeric( $_GET['id'])) 
{

    $sql = 'DELETE FROM `autos` WHERE `id` =' .$_GET['id'];
    //die("sql is ".$sql);
    if(mysqli_query($conn, $sql) ) {
        echo "Auto met id=". $_GET['id']. " succesvol verwijderd";
    }
    //die($sql'     JA GELUkT');
}