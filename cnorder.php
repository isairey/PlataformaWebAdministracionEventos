<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Event Essentials</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <section class="">
		<?php
			include 'includes/header.php';
		?>
   
    <!-- Navbar End -->
   
   

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="home.php">Home</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid ">
        <div class="row px-xl-8">
            <div class="d-flex justify-content-center col-lg-8">
            
                           
            
            <div class="col-lg-8 ">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                    <h6 class="mb-3"> <pre>Products                                               price/day<pre></h6>
                        <?php
								$id=$_SESSION['u_id'];
                                $tval = 0;
								
                                $select1 = "SELECT * FROM addtocart WHERE  cust_id = '$id'";
                                $result1 = $conn->query($select1);
                                while($row1 = $result1->fetch_assoc()){   
                                $p_id=$row1['product_id'];  
                                $oqty=$row1['qty'];
                     
                                $select2 = "SELECT * FROM itemtb WHERE product_id = '$p_id'";
                                 $result2 = $conn->query($select2);
                                 while($row2 = $result2->fetch_assoc()){
                                 $pric = $row2['prod_price'];
                                 $tot = $pric * $oqty;
                                 $tval += $tot;
                                  
                                
 
                     ?>
                       <div class="d-flex justify-content-between">
                            <p><?php echo $row2['name'];?></p>
                            <!-- <?php echo $row1['qty'];?></p> -->
                            <p><?php echo $tot;?></p>
                            
                        </div>
                        <?php
                       
                       
                                }
                            }
                    ?>
                    </div>
                   
                    <div class="border-bottom pt-3 pb-2">
                       
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">Free</h6>
                        </div>
                    </div>
                    
                    <?php
                //  $select = "SELECT * FROM payment WHERE order_id = '$_GET[id]'";
				// 				$result = $conn->query($select);
				// 				while($row = $result->fetch_assoc()){
               ?>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            
                            <h5>Total</h5>
                            <h5>
                            <?php 
                            $diff=$_GET['dff'];
                            $ttt = $tval * $diff;
                            echo $ttt;?></h5>

                            <?php
                             if (isset($_POST['save'])) {
                                $oid=$_GET['oid'];
                                $sqlll ="INSERT INTO order_details(order_id,product_id,prod_qty,total,cust_id) SELECT '$oid',product_id,qty,total,cust_id
                                FROM addtocart WHERE cust_id='$id'";
                                $resultll = $conn->query($sqlll);
                              
                             
                                if ($resultll == TRUE) {
                                    
                            
                                    $tsql="UPDATE payment SET total_price='$ttt' WHERE order_id = '$oid '";
                                    $result5 = $conn->query($tsql);


                                    $vsql="SELECT addtocart.*,itemtb.*
                                    FROM addtocart
                                    INNER JOIN itemtb ON addtocart.product_id=itemtb.product_id AND addtocart.cust_id='$id' ";
                                    $result8=$conn->query($vsql);

                                    while($u=$result8->fetch_assoc()){
                                        $iqty=$u['pro_qty'];
                                        $o_qty=$u['qty'];
                                        $pr=$u['product_id'];
                                        $newqty = $iqty - $o_qty;
                                        $sele = "UPDATE itemtb SET pro_qty='$newqty' WHERE product_id='$pr'";
                                        $result4 = $conn->query($sele);
                              } 
                              echo "<script type=\"text/javascript\">
                                        alert(\"Successfully Registered.\");
                                        window.location.href = \"qrcode.php?id=$oid&tt=$ttt\";
                                    </script>";
                              exit;
                            }
                            else {
                                echo "<script type=\"text/javascript\">
                                        alert(\"Failed. Try Again\");
                                        window.location.href = \"cnorder.php\";
                                    </script>";
                            } 
                        }
                     
                            
                            
                  ?>
                        </div>
                    </div>
                </div>
                <?php
                // }
             ?>
                <div class="mb-5">
                    <form action="" method="post">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                    <div class="bg-light p-30">
                           
                        <button  type="submit"name="save" class="btn btn-block btn-primary font-weight-bold py-3">Place Order</button>
                    </div>
                                </form>
                        
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->


    <!-- Footer Start -->
    <section class="">
		<?php
			include 'includes/footer.php';
		?>
   
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>