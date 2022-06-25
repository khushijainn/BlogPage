<?php

include "../backend/connection.php";

$id = $_GET['id'];
$select = "SELECT * FROM `post` WHERE id=$id";
$select_query = mysqli_query($con,$select) or die("select query error");
$row = mysqli_fetch_assoc($select_query);

$img_name = $row['image'];
$path = "../img/uploaded_img/".$img_name;
unlink($path);

$sql = "DELETE FROM `post` WHERE id=$id";
$query = mysqli_query($con,$sql) or die("DELETE query failed");
header("location:post.php");

?>
