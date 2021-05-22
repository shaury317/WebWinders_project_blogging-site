<?php
include_once 'backendphp/config.php';
$postQuery = "SELECT * FROM posts ORDER BY id DESC";
$runPQ = mysqli_query($conn, $postQuery);
$post = mysqli_fetch_assoc($runPQ);
?>

<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>1</b>Article</h1>
                            <h3 class="h2">Articcle body</h3>
                            <p>
                                Article Body


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>1</b>Article</h1>
                            <h3 class="h2">Articcle body</h3>
                            <p>
                                Article Body
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>1</b>Article</h1>
                            <h3 class="h2">Articcle body</h3>
                            <p>
                                Article Body
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>

<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Trending Article</h1>
            <p>
                Best articles on site
            </p>
        </div>
    </div>
    <?php
    $count=0;
    
    while ($post = mysqli_fetch_assoc($runPQ)) {
        if($count<3){
    ?>
    <!-- <a href="index.php?post_id=<?= $post['id'] ?>" style="text-decoration:none;color:black"> -->
    <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./assets/img/" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3"><?=$post['id'].$post['title'] ?></h5>
            <p class="text-center"><a href="index.php?post_id=<?= $post['id'] ?>" class="btn btn-success">Open</p></p>
        </div>
    </div>
        <!-- </a> -->
    <?php
    $count++;}}

    ?>
</section>

<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">News & Arcticle</h1>
                <p>
                    body
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="">
                        <img src="./assets/img/" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">


                        </ul>
                        <a href="" class="h2 text-decoration-none text-dark">News 1</a>
                        <p class="card-text">
                            Body of the news
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="">
                        <img src="./assets/img/" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">


                        </ul>
                        <a href="" class="h2 text-decoration-none text-dark">News2</a>
                        <p class="card-text">
                            Body of the news
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="">
                        <img src="./assets/img/" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">


                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">News3</a>
                        <img src="./assets/img/" class="card-img-top" alt="...">
                        <p class="card-text">
                            Body of news
                    </div>
                </div>

</section>