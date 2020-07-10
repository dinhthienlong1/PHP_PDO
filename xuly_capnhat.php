<?php
     include './ham.php';
     $customer = [
        'customerName'    => $_POST['customerName'],
        'phone'           => $_POST['phone'],
        'customerNumber'  => $_POST['customerNumber'], // khoa chinh quan trong
      ];
      capnhat_customer($customer);
      header("location:pdp_pdo.php");