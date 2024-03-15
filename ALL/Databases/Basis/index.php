<?php
include 'files/dbconnect.php';
include 'files/delete.php';

//print_r($_GET);
// echo ($_GET['id']);


$sql = "SELECT * FROM autos";

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) { // output data of each row
  
  $html = '<table>';
  while($row = $result->fetch_assoc()) {
    $html .= "<tr>";
    $html .= "   <td>id: " . $row["id"]. "</td>" ;
    $html .= "   <td> AUTO: </td>" ;
    $html .= "   <td>" . $row["merk"]. "</td>" ;
    $html .= "   <td>" . $row["kenteken"]. "</td>";
    $html .= "   <td> ";
    $html .= "     <a href='index.php?action=delete&id=".$row["id"]."'>";
    $html .= "         delete";
    $html .= "     </a>";
    $html .= "   </td>"; 
    $html .= "</tr>";
  }
  $html .= '</table>';
} else {
  $html .= "0 results";
}

echo $html;
$conn->close();
?>