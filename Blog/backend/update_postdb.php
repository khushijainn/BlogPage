<?php
include "connection.php";

if(isset($_FILES['image'])){
   $image_name = $_FILES['image']['name'];
   $tmp_name = $_FILES['image']['tmp_name'];
}
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$date = date("d, M Y");
$sql = "UPDATE `post` SET `title`='$title',`description`='$description',`date`='$date',`image`='$image_name' WHERE `id`='$id'";
$query = mysqli_query($con,$sql) or die("update query error");
move_uploaded_file($tmp_name,"../img/uploaded_img/" . $image_name);
if($query){
    header("location: ../admin/post.php");
}
else{
    echo "image not uploaded";
}
?>