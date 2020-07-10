<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xuat bang php</title>
</head>
<body>
    <?PHP
            $customer=[
                ["id"=>11, "name"=>"nguyen van a"],
                ["id"=>22, "name"=>"nguyen van b"],
                ["id"=>33, "name"=>"nguyen van c"],
            ];
    ?>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
        </tr>
        <?php
            foreach($customer as $cus) {
                echo "<tr>";
                echo "<td>".$cus["id"]."</td>";
                echo "<td>".$cus["name"]."</td>";
                echo "</tr>";
            }

        ?>
    </table>
    
</body>
</html>