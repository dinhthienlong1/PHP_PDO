<?php
include "./ham.php";
$id = $_GET["id"];
xoa_customer($id);
header("location:pdp_pdo.php");