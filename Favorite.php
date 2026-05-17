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
    <script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this ")){
				window.location.href ='fav_delete.php?id='+id;
			}
		}
	</script>
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
                 
                    <span class="breadcrumb-item active">Favorite</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-10 table-responsive mb-5">
                <table  class="table table-light table-borderless table-hover text-center mb-6">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Add To Cart</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <?php
                  
                    $cus_id = $_SESSION['u_id'];			
                    $select = "SELECT * FROM favorite WHERE cust_id='$cus_id'";
                     $result = $conn->query($select);
                     while($row = $result->fetch_assoc()){
                       $p_id=$row['product_id'];

                   $selecto = "SELECT * FROM itemtb WHERE product_id='$p_id'";
                   $result1 = $conn->query($selecto);
                   while($rew = $result1->fetch_assoc()){
							?>
                    <tbody class="align-middle">
                        <tr>
                            <td class="align-middle"><img src="pro_images/<?php echo $rew['prod_image']; ?>" alt="" style="width: 50px;"><?php echo $rew['name']; ?></td>
                            <td class="align-middle">Rs <?php echo $rew['prod_price']; ?></td>
                           
                            <td  class="align-middle"style="position:absolute; left:67%"><a class="btn btn-outline-dark btn-square" href="insertcart2.php?id=<?php echo $row['product_id']; ?>"><i class="fa fa-shopping-cart"></i></td>
                            <td class="align-middle"><a  href="javascript:sureToApprove(<?php echo $row['fav_id'];?>)" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></></td>
                        </tr>
                        <?php
                                }}
                
                       ?>
                    </tbody>
                </table>
            </div>
           
        </div>
    </div>
    <!-- Cart End -->


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