<?php 
 include './ham.php';
 $customer = lay_customer($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAP NHAT CUSTOMER</title>
</head>
<body>
    <form action="xuly_capnhat.php" method="POST">
    <br>
        <!--- truong khoa chinh bi an -->
        <input type="hidden" value="<?= $customer['customerNumber'] ?>" name="customerNumber"/>
        <br>
        <label>customerName</label>
        <input type="text" value="<?= $customer['customerName'] ?>" name="customerName"/>

        <br>
        <label>phone</label>
        <input type="text" value="<?= $customer['phone'] ?>" name="phone"/>
        <br>
        <button type="submit">CAP NHAT</button>
        <a href="pdp_pdo.php">back</a>
    </form>
    
</body>
</html>