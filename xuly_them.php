<?php
include './ham.php';
$customer = [
  'customerName' => $_POST['customerName'],
  'phone'        => $_POST['phone'],
];
them_customer($customer);
header("location:pdp_pdo.php");