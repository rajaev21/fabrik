<?php 
if (empty($_SESSION['id'])){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>

    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
        aria-controls="offcanvasExample">
        Link with href
    </a>


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
                Visit our store:
                </br>
                Jaro branch:
                </br>


                Passi branch:

            </div>
        </div>
    </div>
</body>

</html>