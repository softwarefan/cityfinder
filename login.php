<?php
session_start();
if (isset($_SESSION['logged'])) {
    header("Location:upload.php");
} else {
    header("Location:admin.html");
}





?>