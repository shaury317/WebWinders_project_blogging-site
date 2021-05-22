<div>
    <div class="container m-auto mt-3 row">
        <div class="col-8">
            <?php
            include 'backendphp/config.php';
            $post_id = $_GET['post_id'];
            $postQuery = "SELECT * FROM posts WHERE id=$post_id";
            $runPQ = mysqli_query($conn, $postQuery);
            $post = mysqli_fetch_assoc($runPQ);
            $user_id=$post['user_id'];
            $userQuery="SeLECT * FROM User_info WHERE id=$user_id";
            $runUQ = mysqli_query($conn, $userQuery);
            $user = mysqli_fetch_assoc($runUQ);
            
            ?>
            <div class="card mb-3">

                <div class="card-body">
                    <h5 class="card-title"><?= $post['title'] ?></h5>
                    <span class="badge bg-danger ">Posted By <?= $user['name']?></span>
                    <span class="badge bg-primary ">Posted on <?= date('F jS, Y', strtotime($post['created_at'])) ?></span>
                    <div class="border-bottom mt-3"></div>
                    <?php
                    // $post_images = getImagesByPost($db, $post['id']);
                    //php to get related image



                    ?>




                    <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $c = 1;
                            foreach ($post_images as $image) {
                                if ($c > 1) {
                                    $sw = "";
                                } else {
                                    $sw = "active";
                                }
                            ?>
                                <div class="carousel-item <?= $sw ?>">
                                    <img src="images/<?= $image['image'] ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php
                                $c++;
                            }
                            ?>


                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> -->




                    <!-- 
                  <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" class="img-fluid mb-2 mt-2" alt="Responsive image"> -->


                    <p class="card-text"><?= $post['content'] ?>
                    </p>
                    <div class="addthis_inline_share_toolbox"></div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Comment on this
                    </button>

                </div>
            </div>
            <div>
                <h4>Related Posts</h4>

                
                    <a href="#" style="text-decoration:none;color:black">
                        <div class="card mb-3" style="max-width: 700px;">
                            <div class="row g-0">
                                <div class="col-md-5" style="background-image: url('https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg');background-size: cover">
                                    <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">related post 1 with same cateogary</h5>
                                        <p class="card-text text-truncate">related post 1 body short</p>
                                        <p class="card-text"><small class="text-muted">Posted on date time of related post</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                

            </div>

        </div>
        <?php include_once('pageparts/sidebar.php'); ?>

    </div>