<?php 
if (isset($_POST['submit'])) {
    echo $_POST['rad'];
} else {
    echo "Error deleting product";
}
?>



<form method="post">
    <input type="radio" name="rad" value="value">

    <input type="submit" name="submit" value="Submit">
</form>