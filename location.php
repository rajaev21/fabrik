<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
</head>

<body>
    <?php include ("nav.php"); 
    if (empty($_SESSION['id'])){
        header("location: login.php");
        exit;
    }?>


    <div class="container m-5">
        <div class="h1">Visit our shop to place order:</div>
        <table>
            <thead>
                <tr>
                    <td>
                        <div class="h3 text-center">Jaro branch</div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.1754961294555!2d122.5593438!3d10.720943599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aee5187e003ea9%3A0x34c62d1e58f2cd45!2sFABRIK%20THE%20SHIRT%20MASTER!5e0!3m2!1sen!2sph!4v1711899700260!5m2!1sen!2sph"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </td>
                    <td>
                        <div class="h3 text-center">Passi branch</div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1633.8290493870775!2d122.64347343495575!3d11.1079807332487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sph!4v1711899870964!5m2!1sen!2sph"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>