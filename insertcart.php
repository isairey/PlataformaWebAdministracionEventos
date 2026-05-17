<?php
session_start();
include 'includes/config.php';

$p_id = $_GET['id'];
$cust_id = $_SESSION['u_id'];

$sql = "insert into addtocart (cust_id, product_id,qty) values ('$cust_id', '$p_id',1)";
$result = mysqli_query($conn, $sql);
if ($result) {
    header('location: home.php');
}