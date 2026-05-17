<?php
session_start();
include 'includes/config.php';

$f_id = $_GET['id'];
$cus_id = $_SESSION['u_id'];

$sql = "insert into favorite (cust_id, product_id) values ('$cus_id', '$f_id')";
$result = mysqli_query($conn, $sql);
if ($result) {
    header('location: home.php');
}