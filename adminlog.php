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

    <link href="login.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script>
    function viewPassword()
{
  var passwordInput = document.getElementById('password-field');
  var passStatus = document.getElementById('pass-status');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='fa fa-eye-slash';
    
  }
  else{
    passwordInput.type='password';
    passStatus.className='fa fa-eye';
  }
}
</script>
</head>

<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admintb WHERE email = '$uname' AND password = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									window.location = (\"admin/index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"adminlog.php\")
									</script>";
					}
				}
			?>
<section class="h-200 gradient-form" style="background-color: #eee;" >
  <div class="container py-4 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6" style="background-color: #39545B;">
              <div class="card-body p-md-5 mx-md-4">
             
             
              <div class="text-center col-lg-12">
                <a href="" class="text-center">
                    <span class="h1 text-uppercase text-primary bg-dark px-8">Event</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Essentials</span>
                   </a>
            </div>
                <div class="text-center">
                
                  <h4 class="mt-1 mb-5 pb-1">Create Your Event</h4>
                </div>

                <form action="" method="post">
                  <p>Please Fill The Below</p>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Email</label>
                    <input type="email" name="uname" id="form2Example11" class="form-control" />
                    
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" name="pass" id="password-field" class="form-control" />
                    <i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()"style="position:absolute;top:66%; left:75%"></i>
                    
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                  
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="login">Log
                      in</button>
                     
                  </div>

                 

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
              <h4 class="mb-4">We are more than just a company</h4>
                <p class=" text-justify small mb-0">Welcome to our premier event rental marketplace! At Event Essentials, we are passionate about making your special occasions unforgettable. Whether you're planning a wedding, corporate gala, birthday party, or any other celebration, we have everything you need to transform your event into a remarkable experience.
Discover an extensive collection of high-quality rental items, meticulously curated to suit a wide range of themes and styles. From elegant tableware and exquisite linens to stunning decor pieces and state-of-the-art audiovisual equipment, we offer an extensive inventory that will inspire your creativity and elevate your event to new heights.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>