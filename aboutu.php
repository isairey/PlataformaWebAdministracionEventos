<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Event Essentilas</title>
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
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="aboutu.php">About</a>
                    <a class="text-body mr-3" href="login.php">Contact</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right">

                            <a href="../login.php/" class="dropdown-item" type="button" >Sign in</a>
                            <a href="../signup.php/" class="dropdown-item" type="button" >Sign up</a>
                            <a href="../adminlog.php/" class="dropdown-item" type="button" >admin</a>
                        </div>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">GBP</button>
                            <button class="dropdown-item" type="button">CAD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">FR</button>
                            <button class="dropdown-item" type="button">AR</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="login.php" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="login.php" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Event</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Essentials</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                       
                        <div class="input-group-append">
                            
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+91 9745139507</h5>
            </div>
        </div>
    </div>
    
    <nav>
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Event Combos <i class="fa fa-angle-right float-right mt-1"></i></a>
                           
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            <?php
								include 'includes/config.php';
								$select = "SELECT cat_name FROM `categorytb` WHERE cat_name LIKE'%event'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
                                <a href="" class="dropdown-item"><?php echo $row['cat_name'];?></a>
                                <?php
                                }
                                ?>     
                            </div>
                                
                                </div>
                                <div class="nav-item dropdown dropright">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Items <i class="fa fa-angle-right float-right mt-1"></i></a>
                          
                                <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <?php
								
								$select = "SELECT cat_name FROM `categorytb` WHERE cat_name LIKE'%s'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
                                
                             <a href="" class="dropdown-item"><?php echo $row['cat_name'];?></a>
                       
                        <?php
                            }
                       ?>
                  
                       </div>
                        </div>
                        </div>
                </nav>
                
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Sherin's</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            
                            <a href="aboutu.php" class="nav-item nav-link">About</a>
                            
                            <a href="login.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="login.php" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style=" padding-bottom: 2px;">0</span>
                            </a>
                            <a href="login.php" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</nav>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <span class="breadcrumb-item active">Contact</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">About Us</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <p class=" text-justify text-dark" >Welcome to our premier event rental marketplace! At Event Essentials, we are passionate about making your special occasions unforgettable. Whether you're planning a wedding, corporate gala, birthday party, or any other celebration, we have everything you need to transform your event into a remarkable experience.

                        Discover an extensive collection of high-quality rental items, meticulously curated to suit a wide range of themes and styles. From elegant tableware and exquisite linens to stunning decor pieces and state-of-the-art audiovisual equipment, we offer an extensive inventory that will inspire your creativity and elevate your event to new heights.
                        
                        With our user-friendly platform, finding the perfect items for your event is a breeze. Browse our diverse catalog, filter by category, and explore countless options that will bring your vision to life. Whether you're aiming for a timeless and classic ambiance or a modern and trendy atmosphere, our vast selection ensures that you'll find exactly what you're looking for.
                        
                        We understand the importance of convenience and reliability when it comes to event planning. That's why we pride ourselves on exceptional customer service and a seamless rental experience. Our team of dedicated experts is here to assist you every step of the way, providing personalized recommendations, answering your questions, and ensuring that your rentals are delivered on time, in pristine condition.
                        
                        At [Ecommerce Website Name], we believe in the power of shared experiences and the magic that unfolds when meticulous planning meets extraordinary rental options. Let us be your trusted partner in creating unforgettable memories. Start exploring our exceptional collection today and embark on a journey of unparalleled event design and innovation.
                        
                        Welcome to our world of event rentals where your imagination knows no bounds!</p>
                        
                        
                       
                        
                        
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe style="width: 100%; height: 250px;"
                    src="https://maps.google.com/maps?q=mararikulam&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Mararikulam, Kerala, India</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>eventessential@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+91 9745139507</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-4 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">We Rent-out all items need for an event.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i> Alappuzha,Kerala,India</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>eventessentialrentals.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+91 9745139507</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="login.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="login.php"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="aboutu.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">join us</h5>
                        <p>Book for your next event</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="www.twitter.com"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="wwwlinkedin.com"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="www.instagram.com"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
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