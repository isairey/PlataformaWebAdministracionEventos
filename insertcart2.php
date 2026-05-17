<?php
session_start();
include 'includes/config.php';

$p_id = $_GET['id'];
$cust_id = $_SESSION['u_id'];

$sql = "insert into addtocart (cust_id, product_id) values ('$cust_id', '$p_id')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script type = \"text/javascript\">
                        alert(\" Successfully Added\");
                        window.location = (\"favorite.php\")
                        </script>";
                
}