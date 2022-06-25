<?php include "./component/links.php"; ?>

<body>
    <?php include "./component/navigation.php"; ?>

    <!-- all posts start -->
    <div class="container my-5">
        <div class="mb-4">
            <h2>Add New Post</h2>
        </div>
        <div>
            <form action="../backend/add_postdb.php" method="post" enctype="multipart/form-data">
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
        </div>
    </div>
    <!-- all posts end -->


</body>

</html>