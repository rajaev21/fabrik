<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php include("nav.php");
if (empty($_SESSION['id'])){
    header("location: login.php");
    exit;
}
?>

    <div class="container border shadow my-3">
        <?php if ($_SESSION['account_type'] == 1){?>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Address</th>
                    <th>Account Type</th>
                    <th>Creation Date</th>
                </tr>
            </thead>
            <tbody>
                <?php 
            include("connection.php");
            $sql = "SELECT * FROM `user`";
            $query = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <form action="admin_query.php" method="post">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['number']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td>
                            <select name="acc_type">
                                <option value="<?php echo (int)1 ?>"
                                    <?php if ($row['account_type'] == 1) echo "selected"; ?>>Admin</option>
                                <option value="<?php echo (int)2 ?>"
                                    <?php if ($row['account_type'] == 2) echo "selected"; ?>>Moderator</option>
                                <option value="<?php echo (int)3 ?>"
                                    <?php if ($row['account_type'] == 3) echo "selected"; ?>>Customer</option>
                            </select>
                        </td>
                        <td><?php echo $row['creation_date']; ?></td>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <td><input type="submit" name="update" value="Update" class="btn btn-primary"></td>
                        <td>
                            <input
                                type=<?php if ($row['account_type'] == 1) echo "hidden"; if ($row['account_type'] != 1) echo "submit"; ?>
                                name="delete" value="Delete" class="btn btn-secondary">
                        </td>
                    </form>
                </tr>

                <?php 
            } 
        }
            ?>
            </tbody>
        </table>
    </div>


    <div class="container d-flex justify-content-center my-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Register an account
        </button>
    </div>


    <div class="container border shadow">
        <div class="h1 mt-5">Add Product:</div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="register_query.php" method="post">
                            <!-- username -->
                            <div class="input mb-3">
                                <input type="text" class="form-control shadow" placeholder="Username" name="username"
                                    required>
                            </div>
                            <!-- password -->
                            <div class="input mb-3">
                                <input type="password" class="form-control shadow" id="passwordf" placeholder="Password"
                                    name="passwordf" required>
                            </div>
                            <!-- password -->
                            <div class="input-group mb-3">
                                <input type="password" class="form-control shadow" id="passwords"
                                    placeholder="Confirm Password" name="passwords" required>
                                <button class="btn btn-outline-dark" type="button" onclick="showRegisterPassword()"
                                    id="showPass"><i class="fa-solid fa-eye" id="eyeRegister"></i></button>
                            </div>
                            <!-- email -->
                            <div class="input mb-3">
                                <input type="email" class="form-control shadow" placeholder="Email" name="email"
                                    required>
                            </div>
                            <!-- number -->
                            <div class="input mb-3">
                                <input type="number" class="form-control shadow" placeholder="Phone number"
                                    name="number" required>
                            </div>
                            <!-- address -->
                            <div class="input mb-3">
                                <input type="address" class="form-control shadow" placeholder="Address" name="address"
                                    required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-black" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-black" name="createAccount" value="Register">
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>



        <form action="admin_query.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td>
                        <div class="input mb-3">
                            <input type="text" name="name" placeholder="Name" required>
                        </div>
                    </td>
                    <td>
                        <div class="input mb-3">
                            <select name="print_type" id="print_type" onchange="select()" required>
                                <option value="sublimation">Sublimation</option>
                                <option value="dtf">Direct to film</option>
                                <option value="silk">Silk Screen</option>
                            </select>
                        </div>
                    </td>

                    <td>
                        <div class="input mb-3">
                            <select name="fabric_type" id="fabric_type" required>
                                <option value="polydex">Polydex</option>
                                <option value="luckyhannah">Lucky Hannah</option>
                                <option value="dannon">Dannon</option>
                                <option value="thanos">Thanos</option>
                            </select>
                        </div>
                    </td>

                    <td>
                        <div class="input mb-3">
                            <select name="shirt_type" id="shirt_type" required>
                                <option value="jersey">Jersey</option>
                                <option value="tshirt">T-shirt</option>
                                <option value="poloshirt">Polo Shirt</option>
                                <option value="hoodie">Hoodie</option>
                            </select>
                        </div>
                    </td>

                    <td>
                        <div class="input mb-3">
                            <input type="file" name="uploaded_file" accept=".jpg, .jpeg, .png" required>
                        </div>
                    </td>

                    <td>
                        <div class="mb-3">
                            <input type="submit" name="fileupload" value="Upload" class="btn btn-secondary">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <form action="update_product.php" method="post">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Tmp</th>
                    <th>Shirt</th>
                    <th>Print</th>
                    <th>Fabric</th>
                    <th>Date</th>
                    <th>File</th>
                    <th>Ext</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php 
            include("connection.php");
            $sql = "SELECT * FROM `product`";
            $query = mysqli_query($connection, $sql);
            while ($product = mysqli_fetch_array($query)){
        ?>
                <tr>
                    <input type="hidden" name="id_product[]" value="<?php echo $product['id']; ?>">
                    <td><?php echo $product['id'] ?></td>
                    <td><input type="text" name="name[]" value=<?php echo $product['name'] ?>></td>
                    <td><?php echo $product['tmp_name'] ?></td>
                    <td>
                        <select name="shirt_type[]">
                            <option value="jersey" <?php if($product['shirt_type'] === "jersey") echo "selected"; ?>>
                                Jersey</option>
                            <option value="tshirt" <?php if($product['shirt_type'] === "tshirt") echo "selected"; ?>>
                                T-shirt</option>
                            <option value="poloshirt"
                                <?php if($product['shirt_type'] === "poloshirt") echo "selected"; ?>>Polo Shirt</option>
                            <option value="hoodie" <?php if($product['shirt_type'] === "hoodie") echo "selected"; ?>>
                                Hoodie</option>
                        </select>
                    </td>
                    <td>
                        <select name="print_type[]">
                            <option value="sublimation"
                                <?php if($product['print_type'] === "sublimation") echo "selected"; ?>>Sublimation
                            </option>
                            <option value="dtf" <?php if($product['print_type'] === "dtf") echo "selected"; ?>>Direct to
                                film</option>
                            <option value="silk" <?php if($product['print_type'] === "silk") echo "selected"; ?>>Silk
                                Screen</option>
                        </select>
                    </td>
                    <td>
                        <select name="fabric_brand[]">
                            <option value="polydex"
                                <?php if($product['fabric_brand'] === "polydex") echo "selected"; ?>>Polydex</option>
                            <option value="luckyhannah"
                                <?php if($product['fabric_brand'] === "luckyhannah") echo "selected"; ?>>Lucky Hannah
                            </option>
                            <option value="dannon" <?php if($product['fabric_brand'] === "dannon") echo "selected"; ?>>
                                Dannon</option>
                            <option value="thanos" <?php if($product['fabric_brand'] === "thanos") echo "selected"; ?>>
                                Thanos</option>
                        </select>
                    </td>
                    <td><?php echo $product['creation_date'] ?></td>
                    <td><?php echo $product['file_name'] ?></td>
                    <td><?php echo $product['extension'] ?></td>

                    <td><input type="checkbox" name="delete_product[]" value="<?php echo $product['id']; ?>"></td>
                    <td><input type="hidden" name="file_name[]" value="<?php echo $product['file_name']; ?>"></td>
                    <td><input type="hidden" name="extension[]" value="<?php echo $product['extension']; ?>"></td>
                </tr>
                <?php } ?>


            </tbody>
        </table>
        <div class="container my-3 d-flex justify-content-center">
            <input type="submit" class="btn btn-primary" name="update_product" value="Update">
        </div>
    </form>
    <script>
    function showRegisterPassword() {
        var passwordf = document.getElementById("passwordf");
        var passwords = document.getElementById("passwords");
        var eyeRegister = document.getElementById("eyeRegister");
        if (passwordf.type == "password") {
            passwordf.type = "text";
            passwords.type = "text";
            eyeRegister.classList.remove("fa-eye");
            eyeRegister.classList.add("fa-eye-slash");
        } else {
            passwordf.type = "password";
            passwords.type = "password";
            eyeRegister.classList.remove("fa-eye-slash");
            eyeRegister.classList.add("fa-eye");
        }
    }
    </script>
</body>

</html>