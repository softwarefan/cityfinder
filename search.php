<?php
include_once("config.php");


$sql = "SELECT  cityName FROM info WHERE cityName like '".$_GET['search']. "%'";
$result = $conn->query($sql);
$res = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($res, $row['cityName']);
    }

  
echo json_encode($res);


} else {
    echo "0 results";
} 

$conn->close();
?> 
