<?php
session_start();
if (is_set($_SESSION['logged'])) {
    header("location:upload.php");
} else {
    header("location:admin.html");
}





?>