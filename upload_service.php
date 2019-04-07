<?php
include_once("config.php");
$desc = $_POST['description'];
$name = $_POST['cityName'];
$image = $_POST['image'];
$img_path = "";
if(isset($_FILES['image'])){
   echo "hrllo";
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    echo "here";
    $extensions= array("jpeg","jpg","png", "JPG");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    $img_path = "uploads/".$file_name;
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp, $img_path);
       //echo "Success";
    }else{
       print_r($errors);
    }
 }

$sql = "INSERT INTO info (cityName, opisanie, picture)  VALUES ('". $name. "', '". $desc. "', '". $img_path. "')";
echo $sql;
if (isset($desc) && isset($name))  {

    
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