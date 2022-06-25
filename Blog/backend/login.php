<?php

include "connection.php";
session_start();

if(isset($_POST['login']))
{

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` where username='$username'" ;
    $query = mysqli_query($con,$sql) or die("Query error");

    if(mysqli_num_rows($query)){
        $row = mysqli_fetch_assoc($query);
        $dbpassword = $row['password'];
        $_SESSION['user'] = $row['username'];
        if($password===$dbpassword){
            header("location: ../admin/post.php");
        }
        else{
            echo "incorrect password";
        }
    }
    else {
        echo "Invalid username";
    }

}

?>