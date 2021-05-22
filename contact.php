<?php
session_start();
if (isset($_GET['logout'])) {
    session_unset();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blogger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'pageParts/stylesandfonts.php';?>
</head>

<body>
<!-- Call Us- (1234-5678)
Email Us- insights@gmail.com -->
    <?php
    // include 'pageParts/navbarUpper.php';
    // include 'pageParts/navbarMain.php';
    include 'pageParts/navbar.php';
    if (isset($_GET['logout'])) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>logged out </strong> successfully
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
    }
    include 'pageParts/contactPageContent.php';
    
    include 'pageParts/footer.php';
    ?>
    <?php
    include 'pageParts/javascript.php';
    ?>
    
</body>

</html>