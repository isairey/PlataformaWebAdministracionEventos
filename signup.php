<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    
    <link href="img/favicon.ico" rel="icon">

   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="signup.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script defer src="signup.js"></script>
 
 <style>
<style>
.error {color: #FF0000;}
</style>

 </head>

<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$pass = $_POST['pass'];
              $cpass = $_POST['cpass'];
              if (empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($pass) || empty($cpass)) {
               
                echo "<script type=\"text/javascript\">
                        alert(\"Fill All The Fields.\");
                        window.location = \"signup.php\";
                      </script>";
                exit;
            }
            if ($pass != $cpass) {
              
              echo "<script type=\"text/javascript\">
                      alert(\"Confirm Password Again.\");
                      window.location = \"signup.php\";
                    </script>";
              exit;
          }
          $sqry = "SELECT * FROM usertb WHERE email = '$email' OR contact = '$phone'";
          $result1 = $conn->query($sqry);
          $rows = $result1->fetch_assoc();
          if ($rows) {
              
              echo "<script type=\"text/javascript\">
                      alert(\"Account Exists.\");
                      window.location = \"signup.php\";
                    </script>";
              exit;
          }
          if (!is_numeric($phone) || strlen($phone) != 10) {
          
            echo "<script type=\"text/javascript\">
                    alert(\"Invalid number.\");
                    window.location = \"signup.php\";
                  </script>";
            exit;
        }
        $qry = "INSERT INTO usertb (fname, lname, email, contact, pass)
        VALUES ('$fname', '$lname', '$email', '$phone', '$pass')";
$result = $conn->query($qry);

if ($result === TRUE) {
    
    echo "<script type=\"text/javascript\">
            alert(\"Successfully Registered.\");
            window.location = \"login.php\";
          </script>";
    exit;
} else {
    
    echo "<script type=\"text/javascript\">
            alert(\"Registration Failed. Try Again.\");
            window.location = \"signup.php\";
          </script>";
    exit;
}
            }                                        
							
						
								
          
						
					  ?>
<section class="vh-100 bg-image"
  style="background-image:C:\xampp5\htdocs\backendphp\images\pablo-lancaster-jones-j9blCRSZ_Q4-unsplash.jpg">
  <div class="mask d-flex align-items-center h-150 gradient-custom-3">
    <div class="container h-200">
      <div class="row d-flex justify-content-center align-items-center h-150">
        <div class="col-12 col-md-9 col-lg-10 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form id="form" action="" method="post">

                <div class="form-outline input-control mb-4">
                <label class="form-label" for="names">First Name</label>
                  <input type="text" name="fname" id="names" class="form-control form-control-lg" >
                  
                </div>
                <div class="form-outline mb-4 input-control">
                <label class="form-label" for="names">Last Name</label>
                  <input type="text" name="lname"id="names" class="form-control form-control-lg" >
                 
                </div>
                <div class="form-outline mb-4 input-control">
                <label class="form-label" for="number">Contact No</label>
                  <input type="text" name="phone" id="number" class="form-control form-control-lg" >
                 
                </div>

                <div class="form-outline mb-4 input-control">
                <label class="form-label" for="email">Your Email</label>
                  <input type="email" name="email" id="email" class="form-control form-control-lg" >
                  
                </div>

                <div class="form-outline mb-4input-control">
                <label class="form-label" for="pass">Password</label>
                  <input type="password" name="pass" id="pass" class="form-control form-control-lg" >
                  
                </div>

                <div class="form-outline mb-4 input-control">
                <label class="form-label" for="cpass">Confirm Password</label>
                  <input type="password" name="cpass" id="cpass" class="form-control form-control-lg" >
                 
                </div>

                

                <div class="d-flex justify-content-center">
                  <button type="submit"  name="save"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
