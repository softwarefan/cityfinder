<?php
require_once('config.php');
$sql = "SELECT  cityName, opisanie FROM info WHERE cityName = '".$_GET['search']. "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   
$res->opisanie = $row['opisanie'];
$res->name = $row['cityName'];
echo json_encode($res);



} else {
    echo $sql;
    echo "0 results";
} 

$conn->close();
?> 
