<?php
session_start();
include 'includes/config.php';


$p_id = $_GET['id'];
$cust_id = $_SESSION['u_id'];


$select1 = "SELECT * FROM itemtb WHERE product_id=$p_id";
$result1 = $conn->query($select1);
while($row = $result1->fetch_assoc()){
    $catid=$row['cat_id'];
}

$sql = "insert into addtocart (cust_id, product_id) values ('$cust_id', '$p_id')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script type=\"text/javascript\">
                        window.location.href = \"shop.php?id=" . $catid . "\";
                      </script>";
}