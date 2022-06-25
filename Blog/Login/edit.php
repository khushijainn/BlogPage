<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "blog";

$con = mysqli_connect($server,$user,$password,$database) or die("Connection not established");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/fb749df670.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/main.js"></script>
    <title>BlogPoint</title>
  </head>

<body>
<!-- Navbar start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" style="font-size: 1.6rem;" href="#">BlogPoint</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li>
                        <a href="user.php"><button name="back" class="btn btn-danger">Back</button></a>
                    </li>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- all posts start --> 
    <div class="container my-5">
        <div class="mb-4">
            <h2>Edit Post</h2>
        </div>
        <h5>Enter the Title of the Blog</h5>
        <div>
            <form action="edit2.php" method="GET" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control" name="title">
                </div>
                <button name="Edit" type="submit" class="btn btn-danger">Edit</button>
            </form>
        </div>
    </div>
    <!-- all posts end -->

</body>
</html>