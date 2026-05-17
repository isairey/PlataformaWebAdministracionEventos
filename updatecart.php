<?php
include 'includes/config.php';

$q=$_GET['q'];
$u=$_GET['u'];
$c=$_GET['c'];
$p=$_GET['p'];

$sql= "UPDATE addtocart SET qty='$c'WHERE cust_id='$u'AND product_id='$p'";
$result=mysqli_query($conn, $sql);
header('location:cart.php');

?>

