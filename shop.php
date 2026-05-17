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

</section>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="d-flex justify-content-center row px-xl-10">
            <!-- Shop Sidebar Start -->
           
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-10 col-md-12 ">
                <div class="row pb-4">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            
                            <div class="ml-2">
                                <div class="btn-group">
                                   
                                </div>
                                <div class="btn-group ml-2">
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
								
								$select = "SELECT * FROM itemtb WHERE cat_id = '$_GET[id]'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
                                    if($row['pro_qty'] <= 0){
                                        
                                    }
                                    else{
                                        
                                    
					?>

                         <div class="col-lg-3 col-md-4 col-md-6 pb-2">     
                       <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid  w-100" src="pro_images/<?php echo $row['prod_image']; ?>" style="height: 250px ;">                                <div class="product-action">
                            <a class="btn btn"><?php echo $row['pro_desc'];?></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href=""><?php echo $row['name'];?></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>RS:<?php echo $row['prod_price'];?>/day</h5>
                                </div><div class="d-flex align-items-center justify-content-center mt-2" >    
                                    <a class="btn btn-outline-dark btn-square" href="insertcart1.php?id=<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href="addtofav1.php?id=<?php echo $row['product_id']; ?>"><i class="far fa-heart"></i></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <?php
                     }
                    }
                   ?>
                   
                   
                    
                   
                    
                   
                   
                   
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <section class="">
		<?php
			include 'includes/footer.php';
		?>
    </section>


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