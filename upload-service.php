
header('Content-Type: text/html; charset=utf-8');
include_once("config.php");
$desc = $_POST['description'];
$name = $_POST['cityName'];

$sql = "INSERT INTO info (cityName, opisanie)  VALUES ('". $name. "', '". $desc. "')";

if (isset($desc) && isset($name)) {

    
    if ($conn->query($sql) === TRUE) {

        echo "success";
    } else {

        echo "failure";
    }

    
} else {
    echo "empty values";
}
$conn->close();
?> 