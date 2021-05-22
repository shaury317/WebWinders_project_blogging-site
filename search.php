<?php
session_start();
if (isset($_GET['logout'])) {
    session_unset();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insights|Blogs|Latest News|</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'pageParts/stylesandfonts.php'; ?>
</head>

<body>
    <?php
    include 'pageParts/navbar.php';?>
    
<?php
include_once 'backendphp/config.php';
$keyword = $_GET['search'];
$postQuery = "SELECT * FROM posts WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%' ORDER BY id DESC";
$runPQ = mysqli_query($conn, $postQuery);
$post = mysqli_fetch_assoc($runPQ);

while ($post = mysqli_fetch_assoc($runPQ)) {
?>
    <div class="card mb-3" >
        <a href="index.php?post_id=<?= $post['id'] ?>" style="text-decoration:none;color:black">
            <div class="row g-0">
                <div class="col-md-5" style="background-image: url('https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg');background-size: cover;">
                    <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title"><?= $post['title'] ?></h5>

                        <p class="card-text text-truncate"><?= $post['content'] ?></p>
                        <p class="card-text"><small class="text-muted">Posted on <?= date('F jS, Y', strtotime($post['created_at'])) ?></small></p>
                    </div>
                </div>
            </div>
        </a>
    </div>
<?php
}

?>



<?php
    include 'pageParts/footer.php';
    include 'pageParts/javascript.php';

    ?>
</body>

</html>