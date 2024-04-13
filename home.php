<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabrik</title>
</head>

<body>
    <?php 
include("nav.php"); 
if (isset($_POST['logout'])) {
    $_SESSION = array();
    session_destroy();
    header("location: login.php");
    exit;
} elseif (empty($_SESSION['id'])) {
    header("location: login.php");
    exit;
}
?>
    <div class="container-lg">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 my-5 text-center text-md-start">
                <h1>
                    <div class="display-5">Full Sublimation</div>
                </h1>
                <p class="lead my-4 text-muted">Unlike traditional printing methods that may be limited to specific
                    areas, full sublimation covers the entire surface of the product. This results in a visually
                    stunning and cohesive look without any white spaces.</p>
                <form action="gallery.php" method="post">
                    <input type="submit" name="sublimation" value="View Product" class="btn btn-secondary btn-lg">
                </form>
            </div>
            <div class="col-md-5 text-center">
                <img class="img-fluid d-none d-md-block" src="img/full_sublimation.png" alt="full sublimation">
            </div>
        </div>
    </div>

    <div class="container-lg">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 text-center">
                <img class="img-fluid d-none d-md-block" src="img/dtf.png" alt="direct to film">
            </div>
            <div class="col-md-5 my-5 text-center text-md-end">
                <h1>
                    <div class="display-2">D.T.F.</div>
                    <div class="display-5 text-muted">Direct to film</div>
                </h1>
                <p class="lead my-4 text-muted">Unlike conventional methods restricted to specific areas, DTF seamlessly
                    blankets the entire product surface, ensuring a captivating and unified appearance with no white
                    spaces. The result? A visually stunning and cohesive design that brings your ideas to life in vivid
                    detail. DTF's revolutionary approach unlocks limitless </p>
                <form action="gallery.php" method="post">
                    <input type="submit" name="dtf" value="View Product" class="btn btn-secondary btn-lg">
                </form>
            </div>

        </div>
    </div>

    <div class="container-lg">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 my-5 text-center text-md-start">
                <h1>
                    <div class="display-3">Silk Screen</div>
                </h1>
                <p class="lead my-4 text-muted">This meticulous process involves using a fine mesh screen to transfer
                    ink onto the product, resulting in sharp and durable images that withstand the test of time. Whether
                    it's apparel, promotional items, or personalized gifts, silk screen printing provides a distinctive
                    and lasting impression, celebrating the perfect blend of tradition and innovation in the world of
                    custom design.</p>
                <form action="gallery.php" method="post">
                    <input type="submit" name="silk" value="View Product" class="btn btn-secondary btn-lg">
                </form>
            </div>
            <div class="col-md-5 text-center">
                <img class="img-fluid d-none d-md-block" src="img/silk_screen.png" alt="silk screen">
            </div>
        </div>
    </div>
</body>

</html>