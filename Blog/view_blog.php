<?php include "./components/links.php"; ?>

<body>

    <?php include "./components/navigation.php" ?>
    <?php include "./components/hero.php" ?>

    <section>
        <div class="container my-5 py-5">
            <div class="row gx-5">
                <!-- main start -->
                <div class="col-lg-9">
                    <div class="row gy-4">
                        <?php $id=$_GET['id']; 
                        $sql = "SELECT * FROM `post` WHERE id='$id'";
                        $query = mysqli_query($con,$sql);
                        $row = mysqli_fetch_assoc($query);

                        ?>
                        <div class="col-12">
                            <div>
                                <div class="card" style="width: 100%; border: none;">
                                    <img src="./img/uploaded_img/<?php echo $row['image'] ?>" class="card-img-top" alt="Image not found">
                                    <div class="card-body">
                                        <h2 class="card-title"><?php echo $row['title']; ?></h2>
                                        <p class="card-text lh-lg"><?php echo $row['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- main end -->

                <!-- side pannel start -->
                <?php include "./components/side_pannel.php" ?>
                <!-- side pannel end -->
            </div>
        </div>
    </section>

    <?php include "./components/footer.php" ?>
</body>

</html>