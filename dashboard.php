<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("location:login.php");
  exit;
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
  if($_SERVER['HTTP_REFERER']=='http://localhost/websterproject/login.php'){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Welcome </strong>' . $_SESSION["username"] . ' you have been successfully logged in' . '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }

  include 'dashboard/sidebar.php';

  if (isset($_GET['open'])) {
    if ($_GET['open'] == 'post') {
      include 'dashboard/post.php';
    }
    elseif($_GET['open'] == 'myposts') {
      include 'dashboard/myposts.php';
    }else include 'dashboard/profile.php';
  }


  include 'pageParts/footer.php';
  include 'pageParts/javascript.php';

  ?>
</body>

</html>