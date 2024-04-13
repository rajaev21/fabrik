<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
</head>

<body>

    <?php 
include("nav.php");
if (empty($_SESSION['id'])) {
    header("location: login.php");
    exit;
}
?>
    <div class="container my-4">
        <div class="container mb-3">
            <p class="d-inline-flex gap-1">
                <a class="btn" data-bs-toggle="collapse" href="#sample" role="button">
                    Can I see a sample of the print quality before placing a large order?
                </a>
            </p>

            <div class="collapse" id="sample">
                <div class="card card-body">
                    Certainly! We can provide sample prints or mock-ups to ensure you're satisfied with the
                    quality
                    before proceeding with a large order.
                </div>
            </div>
        </div>

        <div class="container mb-3">
            <p class="d-inline-flex gap-1">
                <a class="btn" data-bs-toggle="collapse" href="#myDesign" role="button">
                    Can I bring my own designs for printing?
                </a>
            </p>
            <div class="collapse" id="myDesign">
                <div class="card card-body">
                    Yes, absolutely! We welcome custom designs from our customers. You can bring your own designs, or
                    work with our design team to create something unique.
                </div>
            </div>
        </div>

        <div class="container mb-3">
            <p class="d-inline-flex gap-1">
                <a class="btn" data-bs-toggle="collapse" href="#longProcess" role="button">
                    How long does it take to process an order?
                </a>
            </p>
            <div class="collapse" id="longProcess">
                <div class="card card-body">
                    Order processing time depends on factors such as order quantity, design complexity, and current
                    workload. We strive to fulfill orders as quickly as possible while maintaining quality standards.
                </div>
            </div>
        </div>


        <div class="container mb-3">
            <p class="d-inline-flex gap-1">
                <a class="btn" data-bs-toggle="collapse" href="#garmentType" role="button">
                    What types of garments can be printed on?
                </a>
            </p>
            <div class="collapse" id="garmentType">
                <div class="card card-body">
                    We can print on t-shirts, hoodies, sweatshirts, polo shirts, jerseys, and more.
                </div>
            </div>
        </div>


        <div class="container mb-3">
            <p class="d-inline-flex gap-1">
                <a class="btn" data-bs-toggle="collapse" href="#printingMethod" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    What printing methods do you offer?
                </a>
            </p>
            <div class="collapse" id="printingMethod">
                <div class="card card-body">
                    We offer a variety of printing methods including Direct to film (DTF), silk screen printing and
                    sublimation.
                </div>
            </div>
        </div>
    </div>
</body>

</html>