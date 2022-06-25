<?php
include "connection.php";

if(isset($_FILES['image'])){
   $image_name = $_FILES['image']['name'];
   $tmp_name = $_FILES['image']['tmp_name'];
}

$title = $_POST['title'];
$description = $_POST['description'];
$date = date("d, M Y");
$sql = "INSERT INTO `post`(`title`, `description`, `date`, `image`) VALUES ('$title','$description','$date','$image_name')";
$query = mysqli_query($con,$sql) or die("insert query error");
move_uploaded_file($tmp_name,"../img/uploaded_img/" . $image_name);
if($query){
    header("location: user.php");
}
else{
    echo "image not uploaded";
}
    

?>