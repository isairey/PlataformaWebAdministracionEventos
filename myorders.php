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
    <section class="">
		<?php
			include 'includes/header.php';
		?>

</section>

   
    


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
    <div class="container-fluid">
        <div class="row px-xl-5">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Your Orders</span></h5>
            <div class="d-flex justify-content-center col-lg-12S">
             <div></div>   
               
            <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-black" >
                                    
                                    <th scope="col">Date</th>
                                    <th scope="col">Rental Dates</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Delivery Details</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    
                                </tr>
                            </thead>
                            <?php
                                 $cust_id=  $_SESSION['u_id'];
								include 'includes/config.php';
								$select = "SELECT * FROM payment WHERE cust_id='$cust_id'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['order_date'];?></td>
                                    <td><?php echo $row['from_date'];?> To <?php echo $row['last_date'];?></td>
                                    <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                                    <td><?php echo $row['address'];?>,<?php echo $row['city'];?>, 
                                    <?php echo $row['pin'];?>,<br>
                                     <?php echo $row['phoneno'];?></td>
                                    <td><?php echo $row['total_price'];?></td>
                                    <td><?php echo $row['status'];?></td>
                                    
                                </tr>
                            </tbody>
                            <?php
                                }
                                ?>
                        </table>
                    </div>
             </div>
         </div>  
       </div>    
   
            <section class="">
                <?php
                    include 'includes/footer.php';
                ?>
        
            </section>
        




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