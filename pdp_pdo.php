<?php
include "./ham.php";
$customers  = lay_customers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xuat bang php</title>
</head>
<body>
    <a href="them.php">THEM MOI CUSTOMER</a>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>phone</td>
            <td>xoa</td>
            <td>cap nhat</td>
        </tr>
        <?php
            foreach($customers as $cus) {
                echo "<tr>";
                echo "<td>".$cus["customerNumber"]."</td>";
                echo "<td>".$cus["customerName"]."</td>";
                echo "<td>".$cus["phone"]."</td>";
                echo "<td><a href='xoa.php?id=".$cus["customerNumber"]."'>xoa</a></td>";
                echo "<td><a href='capnhat.php?id=".$cus["customerNumber"]."'>cap nhat</a></td>";
                echo "</tr>";
            }

        ?>
    </table>
    
</body>
</html>