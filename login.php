<?php
session_start();
if (is_set($_SESSION['logged'])) {
    header("Location:upload.php");
} else {
    header("Location:admin.html");
}





?>