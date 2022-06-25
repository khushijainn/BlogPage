<?php 
session_start();
if(!$_SESSION['user']){
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>

  <div class="main container-fluid">
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" style="font-size: 1.6rem;" href="#">BlogPoint!</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item mx-3">
            <h1 style="color:white">Welcome
              <?php echo $_SESSION['user'] ?>
            </h1>
          </li>
          <li class="nav-item mx-3">
            <a href="edit.php"><button class="btn btn-danger">Edit</button></a>
          </li>
          </li>
          <li class="nav-item mx-3">
            <a href="log_out.php"><button class="btn btn-danger">Log Out</button></a>
          </li>
      </div>
    </div>
  </nav>

  <a class="navbar-brand fw-bold" style="color:black" href="#">Write Your Blog Here</a>
  <div>
            <form action="useraddpost.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label fw-bold">Title</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Post Image</label>
                    <input name="image" class="form-control form-control-sm" type="file">
                </div>
                <button name="save" type="submit" class="btn btn-danger">Save</button>
            </form>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>