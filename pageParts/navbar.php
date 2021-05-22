<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="index.php">
    <img src="assets/img/logo.jpg" alt="insights-Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="search.php?search=+">All Posts</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          cateogry
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="search.php?search=%23webdevelopement">web developement</a>
          <a class="dropdown-item" href="search.php?search=%23designing">designing</a>
          <a class="dropdown-item" href="search.php?search=%23androiddevelopemnt">Android developement</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item disabled" href="#">view all cateogary</a>
        </div>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      
    </ul>


    <?php

    if (isset($_SESSION['username'])) {
      ?>
      <a class="nav-link" href="dashboard.php?open=1">Dashboard</a>
           <a class="nav-link" href="dashboard.php?open=1"><?=$_SESSION["username"]?></a>
           <button type="button" class="nav-item btn btn-outline-danger"><a href="index.php?logout=1"> Logout</a></button>
      <?php
      } else {
        ?>

        <a href="login.php" target="_blank"><button class="btn btn-warning my-2 my-sm-0" id="signup">login</button></a>
        <a href="login.php?page=signup" target="_blank"><button class="btn btn-success my-2 my-sm-0" id="signup">Signup</button></a>
      <?php
    }
    ?>

    </ul>
    <form class="form-inline my-2 my-lg-0" method='GET' action='search.php'>
      <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>