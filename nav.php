<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("bootstyle.php") ?>
    <title>Document</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="home.php">
                <span class="fw-bold">
                    FABRIK
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>



            <div class="collapse navbar-collapse justify-content-center align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="location.php" class="nav-link">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="faq.php" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item" id="dash">
                        <?php 
                    if ($_SESSION['account_type'] == 1 || $_SESSION['account_type'] == 2){
                        echo '<a href="admin.php" class="nav-link">Dashboard</a>';
                    }
                ?>
                    </li>
                </ul>
            </div>
            <form action="home.php" method="post">
                <div class="d-flex flex-row-reverse">
                    <input class="btn btn-outline-light" type="submit" name="logout" value="Logout">
                </div>
            </form>
        </div>
    </nav>



    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Contact</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="container ms-3">
            <div class="container">
                Please visit:
                <a target="_blank" href="https://www.facebook.com/people/Albion-East-Page/100083627614229/">Facebook
                    Page</a>
                </br></br>
            </div>

            <div class="container">
                Contact us:
                </br>
                fabrik@gmail.com
                </br>
                09123456789
                </br></br>
            </div>

            <div class="container">
                Visit our store:</br>
                Jaro branch:</br>
                <a href="location.php">PHC5+9PH, E Lopez St, Jaro, Iloilo City, Iloilo</a></br></br>
                Passi branch:</br>
                <a href="location.php">Soon</a></br></br>

            </div>
        </div>
    </div>



    <?php include("bootscript.php") ?>
</body>

</html>