<?php include "components/links.php"; ?>

<body>
    
    <?php include "components/navigation.php" ?>
    <?php include "components/hero.php" ?>

    <section>
        <div class="container my-5 py-5">

        <?php
        if(isset($_GET['submit'])){
            $search_term = $_GET['search_term'];

            $select = "SELECT * FROM `post` WHERE `title` LIKE '%{$search_term}%'";

            $query = mysqli_query($con,$select) or die("Word not found");

            $rows = mysqli_num_rows($query);
            if($rows>0){

        }
        ?>

            <div class="row gx-5">
                <!-- main start -->
                <div class="col-lg-9">
                    <h1>Search Term: <?php echo $search_term; ?></h1>
                    <div class="row gy-4">

                        <?php 
                        while($data = mysqli_fetch_assoc($query)){
                            ?>
                        <div class="col-lg-6">
                            <div>
                                <div class="card" style="width: 100%; border: none;">
                                    <img src="./img/uploaded_img/<?php echo $data['image'] ?>" class="card-img-top" alt="Image not found">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $data['title']; ?></h5>
                                        <p class="card-text"><?php echo $data['description']; ?></p>
                                        <a href="./view_blog.php?id=<?php echo $data['id']; ?> " class="btn btn-danger">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </div>
                <!-- main end -->
                <?php } ?>
                <!-- side pannel start -->
                <?php 
                // include "./components/side_pannel.php" 
                ?>
                <!-- side pannel end -->
            </div>
        </div>
    </section>

    <?php include "./components/footer.php" ?>
</body>

</html>