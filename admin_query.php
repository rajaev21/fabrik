<?php
session_start();
include("connection.php"); 

if ($_SESSION['account_type'] == 1 || $_SESSION['account_type'] == 2) {


if (isset($_POST['delete'])){
    $id = $_POST['id'];

    $query = "DELETE FROM `user` WHERE id = '$id'";
    $result = mysqli_query($connection, $query);    
    if ($result) {
        echo "User deleted successfully";
        header('Location: admin.php');
        exit;
    } else {
        echo "User not found";
        header('Location: admin.php');
        exit;
    }
}

if (isset($_POST['update'])){
    $accountType = $_POST['acc_type'];
    $id = $_POST['id'];

    $query = "UPDATE `user` SET `account_type` = '$accountType' WHERE id = '$id'";
    $result = mysqli_query($connection, $query);    
    if ($result) {
        echo "User updated successfully";
        header('Location: admin.php');
        exit;
    } else {
        echo "Error updating user";
        header('Location: admin.php');
        exit;
    }
}


if(isset($_POST['fileupload']) && isset($_FILES['uploaded_file'])) {

    if ($_FILES['uploaded_file']['size'] != 0) {
    // $filename = $_FILES['uploaded_file']['name'];
    $name = $_POST['name'];
    $name = ucwords($name);
    $tmp_name = $_FILES['uploaded_file']['tmp_name'];
    $extension = ".".pathinfo($_FILES['uploaded_file']['name'], PATHINFO_EXTENSION);


    $fabric_type = $_POST['fabric_type'];
    $shirt_type = $_POST['shirt_type'];
    $print_type = $_POST['print_type'];
    $time = time();
    $filename = "product/" . $name.$time;

    // $statement = "INSERT INTO `product` (`name`,`tmp_name`,`shirt_type`,`print_type`,`fabric_brand`,`creation_date`,`file_name`,`extension`)
    // VALUES ('$name','$tmp_name','$shirt_type','$print_type','$fabric_type','$time','$filename','$extension')";
    // mysqli_query($connection,$statement);

    $destination = "product/" . $name.$time.$extension;
    echo $tmp_name.$destination;
    // move_uploaded_file($tmp_name, $destination);

    // header('Location: admin.php');
    exit;
    } else {
        header('Location: admin.php');
        exit;
    }
}

} else {
    // header("Location: home.php");
    exit;
}
?>