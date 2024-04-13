<?php 
session_start();
include("connection.php");

if (isset($_POST['createAccount'])){
    $passwordf = $_POST['passwordf'];
    $passwords = $_POST['passwords'];
    if($passwordf == $passwords){
        $email = $_POST['email'];
        $email = trim($email);
        $email = preg_replace('/[^a-zA-Z0-9@._-]/', '', $email);
        $username = $_POST['username'];
        $number = $_POST['number'];
        $address = $_POST['address'];
        $defType = 3;
        $time = time();

        $sql = "INSERT INTO `user` (`username`, `password`, `email`,`number`, `address`, `account_type`, `creation_date`) 
        VALUES ('$username', '$passwordf', '$email', '$number', '$address', '$defType', '$time')";
        mysqli_query($connection, $sql);
        if (!empty($_SESSION['id'])){
            header("Location: admin.php");
            exit;
        } else {
            echo "Registration complete!";
            header("Location: login.php");
            exit;
        }
    } else {
    echo "Password do not match";
    header("Location: login.php");
    exit;
    }
} else {
    header("Location: login.php");
    exit;
}


?>