<nav class="navbar navbar-expand-sm navbar-light shadow navbar-fixed-top">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="navbar-brand text-success  h1 align-self-center">
            <a href="index.php"><img src="assets/img/logo.jpg" alt="insights-Logo"></a>
        </div>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">News & Arcticles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact</a>
                    </li>

                    <?php
                
                    if (isset($_SESSION['username'])) {
                        echo '<li class="nav-item">
                        <a class="nav-link" href="dashboard.php?open=1">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php?open=1">'.$_SESSION["username"].'</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline-danger btn-sm"><a href="index.php?logout=1"> Logout</a></button>
                    </li';
                    
                    } else {
                        echo
                        '<li class="nav-item">
                        <button type="button" class="btn btn-danger"><a href="login.php" target="_blank"> Login</a></button>
                    </li>
                    <li class="nav-item">
                        <a href="login.php?page=signup" target="_blank"><button class="btn btn-outline-success btn-sm" id="signup">Signup</button></a>
                    </li>';
                    }
                    ?>

                </ul>


            </div>
            <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                    </div>
                </div>
            </div>

            <a href="https://www.facebook.com" target="_blank"><img src="assets/img/Facebook-logo.png" class="fa fa-fw fa-user text-dark mr-4"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="assets/img/instalogo.jpg" id="insta" class="fa fa-fw fa-user text-dark mr-4"></a>
        </div>

    </div>
    </div>

    </div>
</nav>';