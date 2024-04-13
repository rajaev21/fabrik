<?php 
session_start();
include("connection.php");

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from `user` where `username` = '$username' and `password` = '$password'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $user['id'];
        $_SESSION['account_type'] = $user['account_type'];
        header('Location: home.php');
        exit;
    } else {
        header("Location: login.php?error=1");
        exit;
    }
} else {
    header("Location: login.php?error=2");
    exit;
}


?>