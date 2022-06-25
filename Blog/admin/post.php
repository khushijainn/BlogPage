<?php include "./component/links.php"; ?>

<body>

    <?php include "./component/navigation.php"; ?>

    <!-- all posts start -->
    <div class="container my-5">
        <div class="d-flex justify-content-between mb-4">
            <h2>All Posts</h2>
            <a href="./add_post.php"><button class="btn btn-danger">Add Posts</button></a>
        </div>
        <?php 
        $sql = "SELECT * FROM `post`";
        $query = mysqli_query($con,$sql) or die("Select query failed");
        $count = mysqli_num_rows($query);
        if ($count > 0) {
  
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            while($row = mysqli_fetch_assoc($query)) {
            ?>
              <tr>
                <th scope="row"><?php echo $row['id']; ?></th>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>
                    <a href="./update_post.php?id=<?php echo $row['id']; ?>" name="update_data" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                        <i class="far fa-edit mx-2 text-secondary fs-5"></i>
                </a>
                    <a href="./delete_btn.php?id=<?php echo $row['id']; ?>" name="delete_img" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                    <input type="hidden" name="del_image" value="<?php echo $row['image']; ?>">
                    <i class="far fa-trash-alt mx-2 text-danger fs-5"></i>
                </a>
                </td>
              </tr>

              <?php 
                }
              ?>
            </tbody>
        </table>
        <?php
        }
        ?>       
    </div>
    <!-- all posts end -->


</body>
