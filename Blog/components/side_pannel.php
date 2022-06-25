<div class="col-lg-3">
                    <div class="row">
                        <!-- search start -->
                        <form action="search.php" method="get">
                            <div class="row">
                                <div class="col-9">
                                    <input name="search_term" type="text" placeholder="Search..." class="form-control"
                                        style="width: 100%;">
                                </div>
                                <div class="col-3">
                                    <input name="submit" type="submit" class="btn btn-danger">
                                </div>
                            </div>
                        </form>
                        <!-- search end -->

                        <!-- popular post start -->
                        <?php
                        $sql = "SELECT * FROM `post`";
                        $query = mysqli_query($con,$sql) or die("Query error");
                        $rows = mysqli_num_rows($query);
                        if($rows>0){


                        ?>
                        <div class="row my-5">
                            <h4 class="mb-4">Popular Post</h4>
                            <div class="col-12">
                                <div>
                                    <div class="card mb-3" style="width: 100%; border: 100%;">
                                        <div class="row g-0">
                                         <?php 
                                            while($data = mysqli_fetch_assoc($query)){
                                         ?>
                                            <div class="col-md-4">
                                                <img src="./img/uploaded_img/<?php echo $data['image'] ?>" style="height: 100%;" class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $data['title']; ?></h5>
                                                    <p class="card-text"><small class="text-muted"><?php echo $data['date']; ?></small></p>
                                                </div>
                                            </div>
                                          <?php } ?>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- popular post end -->
                    </div>
                </div>