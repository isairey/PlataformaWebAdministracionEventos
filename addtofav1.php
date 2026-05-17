<?php
session_start();
include 'includes/config.php';

$f_id = $_GET['id'];
$cus_id = $_SESSION['u_id'];

$select1 = "SELECT * FROM itemtb WHERE product_id=$f_id";
$result1 = $conn->query($select1);
while($row = $result1->fetch_assoc()){
    $catid=$row['cat_id'];
}

$sql = "insert into favorite (cust_id, product_id) values ('$cus_id', '$f_id')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script type=\"text/javascript\">
                        window.location.href = \"shop.php?id=" . $catid . "\";
                      </script>";
}