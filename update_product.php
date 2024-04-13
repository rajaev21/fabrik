<?php 
include("connection.php");
if(isset($_POST['update_product'])) {
    for ($i = 0; $i<count($_POST['id_product']); $i++) {
        $id = $_POST['id_product'][$i];
        $name = $_POST['name'][$i];
        $name = ucwords($name);
        $shirt_type =  $_POST['shirt_type'][$i];
        $fabric_brand =  $_POST['fabric_brand'][$i];
        $print_type =  $_POST['print_type'][$i];
        $sql = "UPDATE `product` SET `name` = '$name', `shirt_type` = '$shirt_type',`fabric_brand` = '$fabric_brand',`print_type` = '$print_type' WHERE `id` = '$id'";
        mysqli_query($connection, $sql);
        echo "product updated";

        if (!empty($_POST['delete_product'][$i])){
            $id = $_POST['delete_product'][$i];
            $file_name = $_POST['file_name'][$i];
            $extension = $_POST['extension'][$i];
            $sql = "DELETE FROM `product` where `id` = '$id'";
            mysqli_query($connection, $sql);
            $fileDelete =$file_name.$extension;
            if (file_exists($fileDelete)) {
                if (unlink($fileDelete)) {
                    echo "File deleted successfully.";
                } else {
                    echo "Error: Unable to delete the file.";
                }
            } else {
                echo "File does not exist.";
            }
        }
    }
    header('Location: admin.php');
    exit;

} 
?>