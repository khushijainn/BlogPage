<?php include "./component/links.php"; ?>

<body>
    <?php include "./component/navigation.php"; ?>

    <!-- all posts start -->
    <?php
    
    $id = $_GET['id'];

    $sql = " SELECT * FROM `post` WHERE id = '$id' ";
    $query = mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($query);
    

    ?>
    <div class="container my-5">
        <div class="mb-4">
            <h2>Update Post</h2>
        </div>
        <div>
            <form action="../backend/update_postdb.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="description" cols="30" rows="10" value="<?php echo $row['description']; ?>">
                </div> 
                <div class="mb-3">
                    <label class="form-label fw-bold">Post Image</label>
                    <input name='image' class="form-control form-control-sm" type="file">
                  </div>
                <button name="save" type="submit" class="btn btn-danger">Save</button>
            </form>
        </div>
    </div>
    <!-- all posts end -->


</body>

</html>