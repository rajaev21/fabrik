<?php 
session_start();
if (!empty($_SESSION['id'])) {
    header("location: home.php");
    exit;
} else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("bootstyle.php") ?>
    <title>Login</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row align-items-center vh-100 text-end">
            <div class="col-6 d-none d-md-block">
                <img src="img/logo.jpg" class="w-75" alt="logo">
            </div>
            <div class="col-12 col-md-4 border border-secondary shadow">
                <div class="m-5 text-center">
                    <?php
                        if (isset($_GET['error'])) {
                            $errorMessage = '';
                            switch ($_GET['error']) {   
                                    case '1':
                                            $errorMessage = "Invalid username or password. Please try again.";
                                            break;
                                    default:
                                            $errorMessage = "An unexpected error occurred.";
                            }
                        echo "<p style='color: red;'>$errorMessage</p>";
                        }
                    ?>
                    <form action="login_query.php" method="post">
                        <input type="text" name="username" placeholder="Username" class="form-control h6 shadow"
                            required></br>


                        <!-- showpass -->


                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control shadow" id="inputPassword"
                                placeholder="Password">
                            <button class="btn btn-outline-secondary" type="button" id="showPass"
                                onclick="showLoginPassword()">
                                <i class="fa-solid fa-eye" id="eyeLogin"></i>
                            </button>
                        </div>

                        </br></br>
                        <input type="submit" class="btn btn-outline-dark" name=login value="Login">
                    </form>
                    </br></br>


                    <button type="button" class="btn btn-outline-dark" name="register" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Register</button>


                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <!-- registration form -->
                                <div class="modal-body">
                                    <form action="register_query.php" method="post">
                                        <!-- username -->
                                        <div class="input mb-3">
                                            <input type="text" class="form-control shadow" placeholder="Username"
                                                name="username" required>
                                        </div>
                                        <!-- password -->
                                        <div class="input mb-3">
                                            <input type="password" class="form-control shadow" id="passwordf"
                                                placeholder="Password" name="passwordf" required>
                                        </div>
                                        <!-- password -->
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control shadow" id="passwords"
                                                placeholder="Confirm Password" name="passwords" required>
                                            <button class="btn btn-outline-dark" type="button"
                                                onclick="showRegisterPassword()" id="registerPassword"><i
                                                    class="fa-solid fa-eye" id="eyeRegister"></i></button>
                                        </div>
                                        <!-- email -->
                                        <div class="input mb-3">
                                            <input type="email" class="form-control shadow" placeholder="Email"
                                                name="email" required>
                                        </div>
                                        <!-- number -->
                                        <div class="input mb-3">
                                            <input type="number" class="form-control shadow" placeholder="Phone number"
                                                name="number" required>
                                        </div>
                                        <!-- address -->
                                        <div class="input mb-3">
                                            <input type="address" class="form-control shadow" placeholder="Address"
                                                name="address" required>
                                        </div>



                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-black"
                                                data-bs-dismiss="modal">Close</button>
                                            <input type="submit" name="createAccount" value="Register">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>


    <script>
    function showLoginPassword() {
        var myInput = document.getElementById("inputPassword");
        var eyeLogin = document.getElementById("eyeLogin");
        if (myInput.type == "password") {
            myInput.type = "text";
            eyeLogin.classList.remove("fa-eye");
            eyeLogin.classList.add("fa-eye-slash");
        } else {
            myInput.type = "password";
            eyeLogin.classList.remove("fa-eye-slash");
            eyeLogin.classList.add("fa-eye");
        }
    }

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
    <?php include("bootscript.php") ?>
</body>

</html>