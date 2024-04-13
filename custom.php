<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Customize</title>

    <style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="row m-5">
            <div class="col-6">
                <input type="name" class="form-control mb-3" placeholder="Name" required>
                <input type="number" class="form-control mb-3" placeholder="Phone number" required>
                <input type="email" class="form-control mb-3" placeholder="Email" required>
                <input type="address" class="form-control mb-3" placeholder="Address" required>

                <label for="formFileMultiple">Reference image(s):</label>
                <input class="form-control mb-3" type="file" id="formFileMultiple" accept="image/*" multiple>
                <!-- description -->
                <textarea class="form-control" placeholder="Description" rows="3"></textarea>

            </div>

            <!-- type of printing -->
            <div class="col-6">
                <div class="dropdown mb-3" id="print">
                    <select class="form-select" onchange="selectOption()">
                        <option selected style="color: #999999;">Type of printing </option>
                        <option value="fullsubli">Full Sublimation</option>
                        <option value="subli">Partial Sublimation</option>
                        <option value="dtf">Direct to Film</option>
                        <option value="silk">Silk Screen</option>
                    </select>
                </div>

                <!-- brand -->
                <div class="dropdown mb-3" id="brand">
                    <select class="form-select">
                        <option selected>Brand</option>
                        <option value="polydex">Polydex</option>
                        <option value="dannon">Dannon</option>
                        <option value="lucky hannah">Lucky Hannah</option>
                        <option value="def">I have my own shirt</option>
                    </select>
                </div>

                <!-- mode of payment -->
                <div class="dropdown mb-3" id="modePayment">
                    <select class="form-select" onchange="selectOption()">
                        <option selected>Mode of payment</option>
                        <option value="gcash">Gcash</option>
                        <option value="bank">Bank transfer</option>
                        <option value="cash">Cash</option>
                    </select>

                    <!-- gcash -->
                    <div class="container d-none" id="chooseGcash">
                        <div class="row">
                            <div class="col-6 border shadow text-center d-flex align-items-center">
                                Gcash Number: 09123456789 Name:Fabrik One
                            </div>
                            <div class="col-6 border shadow text-center d-flex align-items-center">
                                Gcash Number: 09987654321 Name:Fabrik Two
                            </div>
                        </div>
                    </div>

                    <!-- Bank transfer -->
                    <div class="d-none" id="chooseBank">
                        <div class="row">
                            <div class="col-6 border shadow text-center d-flex align-items-center">
                                Sort code: 20-10-10
                            </div>
                            <div class="col-6 border shadow text-center d-flex align-items-center">
                                Account number: 10256598
                            </div>
                        </div>
                    </div>


                    <!-- Cash -->
                    <div class="container" id="chooseCash">
                        <p class="text-center"><small>50% of the total cost should be paid for the transaction to be
                                finalized</small></p>
                    </div>

                </div>
                <label for="formFileMultiple">Proof of payment:</label>
                <input class="form-control mb-3" type="file" id="formFileMultiple" accept="image/*" multiple>
                <input type="submit" name="submit" value="submit">
            </div>
        </div>
    </div>

    <div class="container h1 text-center">Visit our store</div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="h4 text-center">PHC5+9PH, E Lopez St, Jaro, Iloilo City, Iloilo</div>
                <div class="d-flex justify-content-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.1754282911024!2d122.55473037032553!3d10.720948836867235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee5187e003ea9%3A0x34c62d1e58f2cd45!2sFABRIK%20THE%20SHIRT%20MASTER!5e0!3m2!1sen!2sph!4v1710768277000!5m2!1sen!2sph"
                        width="320" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
            <div class="col-md-6">
                <div class="h4 text-center">Passi City</div>
            </div>
        </div>
    </div>



    <script>
    function selectOption(sourceId, targetId) {
        var sourceSelect = document.getElementById("print").querySelector('select');
        var targetSelect = document.getElementById("brand").querySelector('select');

        var selectedValue = sourceSelect.value;

        if (selectedValue === "fullsubli") {
            targetSelect.selectedIndex = 1;
            targetSelect.disabled = true;
        } else {
            targetSelect.disabled = false;
        }
    }

    function selectOption() {
        var modeofpayment = document.getElementById("modePayment").querySelector('select');
        var chooseGcash = document.getElementById("chooseGcash");
        var chooseBank = document.getElementById("chooseBank");
        var chooseCash = document.getElementById("chooseCash");

        var value = modeofpayment.value;
        if (value === "gcash") {

            chooseGcash.classList.remove("d-none");
            chooseBank.classList.add("d-none");
            chooseCash.classList.add("d-none");

            // show gcash number
            // file for proof of payment
        } else if (value === "bank") {

            chooseGcash.classList.add("d-none");
            chooseBank.classList.remove("d-none");
            chooseCash.classList.add("d-none");

            // show name
            // international bank account number
            // Business Identifier Code

        } else if (value === "cash") {

            chooseGcash.classList.add("d-none");
            chooseBank.classList.add("d-none");
            chooseCash.classList.remove("d-none");

        }
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>