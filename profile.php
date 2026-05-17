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
        <form action="" method="post">
        <div class="row px-xl-5">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Profile</span></h5>
            <div class="d-flex justify-content-center col-lg-10">
            <?php
                            
                             
                            
                             $cust_id=  $_SESSION['u_id'];
							
                                 
                            ?>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <?php
                        $squery = "SELECT * FROM usertb WHERE cust_id = '$cust_id'";
                            $result1 = $conn->query($squery);
                            while ($row = $result1->fetch_assoc()) {
                            ?>
                            <label>First Name</label>
                            <input name="ffname"class="form-control" type="text" value="<?php echo $row['fname'];?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input name="llname" class="form-control" type="text" value="<?php echo $row['lname'];?>">
                        </div>
                       
                       <?php
                            }
                            ?>
                        
                       
                        <div class="col-md-6 form-group">
                            <label>New Password</label>
                            <input name="npass" class="form-control" type="password">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Current Password</label>
                            <input name="cpass" class="form-control" type="password">
                        </div>
                        <div class="mb-5">
                   
                    <button type="submit" name="save" class="btn btn-sm btn-primary ">Sumbit</button>
                </div>
                            

                    </div>
                </div>
             </div>
         </div>
         </form>  
       </div>    
   <?php
       if(isset($_POST['save'])){
        $npass = $_POST['npass'];
        $ffname = $_POST['ffname'];
        $llname = $_POST['llname'];
        $cpass = $_POST['cpass'];
        $pass= $_SESSION['pass'];
        $query = "SELECT * FROM usertb WHERE cust_id = '$cust_id' AND pass = '$cpass'";
        $rs = $conn->query($query);
        $num = $rs->num_rows;
        $rows = $rs->fetch_assoc();
        if($num > 0){
            $sql = "UPDATE usertb SET pass='$npass',lname='$llname',fname='$ffname' WHERE cust_id = '$cust_id'";
            $ros = $conn->query($sql);
        echo "<script type = \"text/javascript\">
        alert(\"Successfully Saved.\");
        window.location = (\"profile.php\")
        </script>";
        exit;
         } else { 
            echo "<script type = \"text/javascript\">
            alert(\"Failed Save\");
            window.location = (\"profile.php\")
            </script>";
       } }
     
   

            ?>
   
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