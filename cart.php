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
				window.location.href ='cart_delete.php?id='+id;
			}
		}
        function change(q,c,p,u){
            var cs=document.getElementsByName("quanty")[c].value;
            window.location.href='updatecart.php?q='+q+'&c='+cs+'&p='+p+'&u='+u;
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
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <form action="" method="post">
    <div class="container-fluid">
        <div class="row px-xl-5">
        <form action="" method="post">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <?php
                        $i=0;
                    $cus_id = $_SESSION['u_id'];			
                     $select = "SELECT * FROM addtocart WHERE cust_id='$cus_id'";
                     $result = $conn->query($select);
                    while($row = $result->fetch_assoc()){
                     $p_id=$row['product_id'];
                    $selecto = "SELECT * FROM itemtb WHERE product_id='$p_id'";
                     $result1 = $conn->query($selecto);
                     while($rew = $result1->fetch_assoc()){
				
                        $pr=$rew['prod_price'];
                        $qu=$row['qty'];
                        $tot=$pr*$qu;
                        $sele = "UPDATE addtocart SET total ='$tot' WHERE product_id='$p_id' AND cust_id='$cus_id'";
                        $result2 = $conn->query($sele);
                 	 	?>
                            <tbody class="align-middle">
                        <tr>
                            
                            <td class="align-middle"><img src="pro_images/<?php echo $rew['prod_image']; ?>" style="width: 50px;"><?php echo $rew['name']; ?></td>
                            <td class="align-middle">Rs <?php echo $tot; ?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input name="quanty" onchange="change(<?php echo $rew['pro_qty']; ?>,<?php echo $i;?>,<?php echo $p_id; ?>,<?php echo $cus_id; ?>)" type="number" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo $row['qty']; ?>" min="1" max="<?php echo $rew['pro_qty']; ?>">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"> <a href="javascript:sureToApprove(<?php echo $row['cart_id'];?>)"class="btn btn-sm btn-danger"><i class="fa fa-times"></i></td>
                        </tr>
                       
                       
                    </tbody>
                    <?php
                            
                
                                 if(isset($_POST['save'])){
                    
                                //  $tot=$_POST['tot'];
                        
                                  $sele = "UPDATE addtocart SET total ='$tot' WHERE product_id='$p_id' AND cust_id='$cus_id'";
                                 $result2 = $conn->query($sele);
                                  if($result2 == TRUE){
             
                                     echo "<script type = \"text/javascript\">
                                    
                                     window.location = (\"checkout.php\")
                                     </script>";
                                     exit;
                                 }else{
                                 echo "<script type = \"text/javascript\">
                                 alert(\" Failed. Try Again\");
                                 window.location = (\"cart.php\")
                                 </script>";
                         }
                     }              
                    
                                }
                                ++$i;
                            }
                            ?>
                </table>
            </div>
            <div class="col-lg-4">
      
                    <div class="input-group">
                       
                    </div>
        
                <form action="" method="post">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Place Order</span></h5>
                <div class="bg-light p-30 mb-5">
                   
                    <div class="pt-2">
                        
                        <button type=submit name="save"class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>
        </form>
    </div>
<?php    


                  
                   
                      
                    


        ?>            
    <!-- Cart End -->

    <section class="">
		<?php
			include 'includes/footer.php';
		?>

    


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