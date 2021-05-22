<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insights|Blogs|Latest News|</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'pageParts/stylesandfonts.php';?>
</head>

<body>
<?php
  include 'pageParts/navbar.php';
    // redirect supok means signup is sucessfull login to continue
    if(isset($_GET['redirect'])){
      if($_GET['redirect']=='supok')
            echo '<div class="alert alert-success" role="alert">
            Signup is sucessfull please login to continue
          </div>';
        }

    if(isset($_GET['page'])){
      if($_GET['page'] == 'fpass'){
      include 'pageParts/forms/LOGIN_NEW.php';
      }
      if($_GET['page'] == 'signup'){
      include 'pageParts/forms/SIGNUP_NEW.php';
      }
    }
    else{include 'pageParts/forms/LOGIN_NEW.php';}
    
    include 'pageParts/footer.php';
    include 'pageParts/javascript.php';
  ?></body>

</html>