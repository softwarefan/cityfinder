<?php
include_once("config.php");
$name = trim($_GET['user-name']);
$password = trim($_GET['password']);

$sql = "SELECT name, password from users where name = '" . $name . "' and password = '" . $password . "'";


if (isset($name) && isset($password)) {

    $res = $conn->query($sql);
    if ($res->num_rows == 1) {
        session_start();
        $_SESSION['logged'] = "logged";
        echo "success";
    } else {
        echo "failure";
    }
   
}

$conn->close();

