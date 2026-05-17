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
                    <span class="breadcrumb-item active">Payment</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class=" container-fluid ">
        <div class="row px-xl-8">
            <div class="d-flex justify-content-center col-lg-8">
             <?php
            
             $t= $_GET['tt'];?>
            <div class="col-lg-8 ">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Scan Qr Code and Enter The  transaction id</h6>
                        
                        <img src="qr.jpg"style="height: 250px ;">
                        
                    </div>
                    <div class="border-bottom pt-3 pb-2">
                       
                       
                    </div>
                    <div class="pt-2">
                        
                    </div>
                </div>
                <form action="" method="post">
                <div class="mb-5">
                 
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                    <div class="bg-light p-30">
                        <div class="form-group">
                            <h6> Total : <?php echo $t ?> </h6>
                            <div class="form-outline mb-4input-control">
                                <input type="text" name="pay">
                                <label>Transaction id</label>
                            </div>
                        </div>
                        <div class="form-group">
                            
                        </div>
                        <div class="form-group mb-4">
                           
                        </div>
                        <button type="submit" name="save" class="btn btn-block btn-primary font-weight-bold py-3">Complete Order</button>
                    </div>
                    
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Checkout End -->
    <?php               $cus_id = $_SESSION['u_id'];
                        $oid= $_GET['id'];
						if(isset($_POST['save'])){
                            $pay = $_POST['pay'];
                            if (empty($pay)) {
               
                                echo "<script type=\"text/javascript\">
                                        alert(\"Enter transaction id Fields.\");
                                        window.location = \"qrcode.php\";
                                      </script>";
                                exit;
                            }

                            include 'includes/config.php';
							
                            $qry = "UPDATE payment SET transaction_id = '$pay' WHERE cust_id ='$cus_id' AND order_id = '$oid'";
                            $result = $conn->query($qry);
                
                              if ($result === TRUE) {
                             
                              $sqry = "DELETE  FROM addtocart WHERE cust_id = '$cus_id'";
                              $result1 = $conn->query($sqry);
                        
                             echo "<script type=\"text/javascript\">
                             alert(\"Successfully Placed order.\");
                              window.location = \"home.php\";
                            </script>";
                             exit;
                              } else {
                        
                              echo "<script type=\"text/javascript\">
                                alert(\"Registration Failed. Try Again.\");
                                window.location = \"qrcode.php\";
                              </script>";
                        
                    }
                 }
                ?>
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