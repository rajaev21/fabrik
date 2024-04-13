<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <style>
    .carousel-inner>div>img {
        height: 400px;
        margin: auto;
    }

    .card>a>img {
        height: 250px;
        width: 250px;
        margin: auto;
    }
    </style>

</head>

<body>
    <?php
include("nav.php");
include("connection.php");
$select = "SELECT * FROM `product`";
if(isset($_POST['dtf'])){
$_SESSION['title'] = "Direct to film (DTF)";
$print_type = "dtf";
} elseif (isset($_POST['sublimation'])){
$_SESSION['title'] = "Sublimation";
$print_type = "sublimation";
} elseif (isset($_POST['silk'])){
$_SESSION['title'] = "SilkScreens";
$print_type = "silk";
} else {
header('Location: home.php');
}
$query = mysqli_query($connection, $select);
?>

    <div class="container">
        <h1 class="text-center" id="gallery"><?php echo $_SESSION['title']; ?></h1>
        <h5 class="text-center text-muted">Best Seller</h5>
    </div>

    <!-- carousel -->
    <div id="carouselFade" class="carousel carousel-dark slide carousel-fade m-3 d-none d-md-block border"
        data-bs-ride="carousel">

        <!-- button -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/full_sublimation.png" class="d-block w-25" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/dtf.png" class="d-block w-25" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/logo.jpg" class="d-block w-25" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>
                        <h1>Shirt</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <?php 
            $select = "SELECT * FROM `product` WHERE shirt_type = 'tshirt' AND print_type = '$print_type'";
            $query = mysqli_query($connection, $select);
            $counter = 0;
            while ($row = mysqli_fetch_array($query)) { 
                if ($counter % 4 == 0 && $counter != 0) {
                    echo "</tr><tr>";
                }
                ?>
                    <td>
                        <div class="card" style="width: 18rem;">
                            <a
                                href="#home"><?php echo '<img src="'. $row['file_name'] . $row['extension'] .'" class="card-img-top d-flex" alt="'. $row['file_name'] . $row['extension'] .'">'; ?></a>
                            <a href=""></a>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $row['name']; ?></h5>
                                <p class="card-text">
                                    <?php echo "Item: ".$row['id']."</br> Brand: ".$row['fabric_brand']."</br> Posted: ".date("m/d/Y", $row['creation_date']);?>
                                </p>
                                <a href="location.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </td>
                    <?php $counter++;} ?>
                </tr>
            </tbody>
        </table>
    </div>






    <div class="container <?php echo ($print_type === 'sublimation') ? 'd-block' : 'd-none'; ?>">
        <table>
            <thead>
                <tr>
                    <th>
                        <h1>Jersey</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
            $select = "SELECT * FROM `product` WHERE shirt_type = 'jersey' AND print_type = '$print_type'";
            $query = mysqli_query($connection, $select);
            $counter = 0;
            while ($row = mysqli_fetch_array($query)) { 
                if ($counter % 4 == 0 && $counter != 0) {
                    echo "</tr><tr>";
                }
                ?>
                    <td>
                        <div class="card" style="width: 18rem;">
                            <a
                                href="#home"><?php echo '<img src="' . $row['file_name'] . $row['extension'] . '" class="card-img-top d-flex" alt="Image">'; ?></a>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $row['name']; ?></h5>
                                <p class="card-text">
                                    <?php echo "Item: ".$row['id']."</br> Brand: ".$row['fabric_brand']."</br> Posted: ".date("m/d/Y", $row['creation_date']);?>
                                </p>
                                <a href="location.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </td>
                    <?php $counter++;} ?>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>
                        <h1>Polo Shirt</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <?php 
            $select = "SELECT * FROM `product` WHERE shirt_type = 'poloshirt' AND print_type = '$print_type'";
            $query = mysqli_query($connection, $select);
            $counter = 0;
            while ($row = mysqli_fetch_array($query)) { 
                if ($counter % 4 == 0 && $counter != 0) {
                    echo "</tr><tr>";
                }
                ?>
                    <td>
                        <div class="card" style="width: 18rem;">
                            <a
                                href="#home"><?php echo '<img src="' . $row['file_name'] . $row['extension'] . '" class="card-img-top d-flex" alt="Image">'; ?></a>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $row['name']; ?></h5>
                                <p class="card-text">
                                    <?php echo "Item: ".$row['id']."</br> Brand: ".$row['fabric_brand']."</br> Posted: ".date("m/d/Y", $row['creation_date']);?>
                                </p>
                                <a href="location.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </td>
                    <?php $counter++;} ?>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>
                        <h1>Hoodie</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
            $select = "SELECT * FROM `product` WHERE shirt_type = 'hoodie' AND print_type = '$print_type'";
            $query = mysqli_query($connection, $select);
            $counter = 0;
            while ($row = mysqli_fetch_array($query)) { 
                if ($counter % 4 == 0 && $counter != 0) {
                    echo "</tr><tr>";
                }
                ?>
                    <td>
                        <div class="card" style="width: 18rem;">
                            <a href="#home">
                                <?php echo '<img src="' . $row['file_name'] . $row['extension'] . '" class="card-img-top d-flex" alt="Image">'; ?>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $row['name']; ?></h5>
                                <p class="card-text">
                                    <?php echo "Item: ".$row['id']."</br> Brand: ".$row['fabric_brand']."</br> Posted: ".date("m/d/Y", $row['creation_date']);?>
                                </p>
                                <a href="location.php" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </td>
                    <?php $counter++;} ?>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- cards -->
</body>

</html>