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
    include 'pageParts/navbar.php';
    if (isset($_GET['logout'])) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>logged out </strong> successfully
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
    }
    if (isset($_GET['post_id'])) {
        include_once 'viewpost.php';
    } elseif (isset($_Get['search'])) {
        include 'pageParts/search.php';
    } else {
        include 'pageParts/mainPageContent.php';
    }


    include 'pageParts/footer.php';
    include 'pageParts/javascript.php';

    ?>
</body>

</html>