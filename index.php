<?php 

session_start();
function message() {
        if (isset($_SESSION["message"])) {
            $output = "<div class=\"alert alert-danger\">";
            $output .= htmlentities($_SESSION["message"]);
            $output .= "</div>";
            
            // clear message after use
            $_SESSION["message"] = null;
            
            return $output;
        }
    }


?>

<!DOCTYPE html>
<html lang="zxx">

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Nanny 254</title>
  
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- how it works -->
    <link href="css/timeline.css" type="text/css" rel="stylesheet" media="all">
    <!-- grid hover -->
    <link href="css/hover.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="banner2" id="home">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="index.php">
                  Nanny 254
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#about">about</a>
                        </li>
                      
                        <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#contact">Contact</a>
                        </li>

                                <li class="nav-item dropdown mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                               <i class="far fa-user-circle"></i>Register
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item scroll" data-toggle="modal" aria-pressed="false"
                                            data-target="#exampleModal3">Nanny</a>
                               <a class="dropdown-item scroll" data-toggle="modal" aria-pressed="false"
                                            data-target="#exampleModal">Parent</a>
                                <div class="dropdown-divider"></div>
                              
                            </div>
                        </li>
                      

                    </ul>
                </div>

            </nav>
        </header>
        <!-- //header -->
        <div class="container">
            <div class="banner-text">
                <div class="slider-info">
                    <h3></h3>
                   
                    <a class="btn btn-primary mt-4 agile-link-bnr scroll" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal" role="button">Find Nanny</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- about -->

          </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- about -->
    <div class="about-w3sec py-sm-5" id="about">
        <div class="container py-5">
            <div class="title-section pb-4">
                <h3 class="main-title-agile">Whatever house keeping services you need, we've got you covered</h3>
                <span class="title-line">
                </span>
            </div>


<p>Nanny 254 helps to  link credible domestic workers to the family using an algorithm. The woman in need of a help will upload their profile onto the website then the system will automatically select a suitable help for her. This will depend on the salary she is offering, the number of children she has and the skill set that the domestic worker is required to have</p>
            <div class="ins-sec1">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="abt-block mb-lg-0 mb-5">
                            <div class="serv_abs serv_bottom">
                                <i class="fas fa-home"></i>
                            </div>
                            <h3>House Keepers</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-4 my-lg-0 my-md-5">
                        <div class="abt-block">
                            <div class="serv_abs serv_bottom">
                                <i class="fas fa-child"></i>
                            </div>
                            <h3>Nannies</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-md-5">
                        <div class="abt-block mt-md-0 mt-5">
                            <div class="serv_abs serv_bottom">
                                <i class="fas fa-female"></i>
                            </div>
                            <h3>Househelp</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
             
              
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- //about -->
    <!-- stats -->
    <section class="agile_stats py-sm-5" id="more">
        <div class="container">
            <div class="py-lg-5 w3-abbottom">
                <div class="row py-5">
                    <div class="counter col-lg-3 col-6">
                        <i class="far fa-smile"></i>
                        <div class="timer count-title count-number mt-2 text-white" data-to="50" data-speed="100"></div>
                        <p class="count-text text-capitalize text-white">Happy clients</p>
                    </div>

                    <div class="counter col-lg-3 col-6">
                        <i class="fas fa-database"></i>
                        <div class="timer count-title count-number mt-2 text-white" data-to="30" data-speed="100"></div>
                        <p class="count-text text-capitalize text-white">Househelps</p>
                    </div>
                    <div class="counter col-lg-3 col-6 mt-lg-0 mt-4">
                        <i class="fas fa-users"></i>
                        <div class="timer count-title count-number mt-2 text-white" data-to="20" data-speed="100"></div>
                        <p class="count-text text-capitalize text-white">Baby Sitters</p>
                    </div>
                    <div class="counter col-lg-3 col-6 mt-lg-0 mt-4">
                        <i class="fas fa-award"></i>
                        <div class="timer count-title count-number mt-2 text-white" data-to="15" data-speed="100"></div>
                        <p class="count-text text-capitalize text-white">House Helps</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
    <!-- services -->
 
    <!-- //services -->
    <!-- how it works -->
 

   <div class="testimonials py-lg-5" id="testi">
        <div class="container py-5">
            <div class="title-section pb-4">
                <h3 class="main-title-agile text-white">what people say about us.</h3>
                <span class="title-line bg-light">
                </span>
            </div>
            <div class="text-center py-lg-5">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>
                            <div class="testi-agile">
                                <p>
                                    <i class="fas fa-quote-left"></i>Nanny 254 are always available with their expert opinion - helping to make a difficult decision a little easier. We especially appreciated their ability to find us multiple candidates - and to keep presenting options until we found the perfect fit for our family. 

                                    <i class="fas fa-quote-right"></i>
                                </p>
                            </div>
                            <div class="testi-pos">
                                <img src="images/ts1.jpg" alt="" class="img-fluid rounded-circle mb-3" />
                                <h4>Johnsons Family</h4>
                                <span></span>
                            </div>
                        </li>
                        <li>

                            <div class="testi-agile">
                                <p>
                                    <i class="fas fa-quote-left"></i>Our nanny is a blessing. We can already see positive changes in our lives.  Life is less stressful and the kids are doing really well in school. She approaches each day and problem with a smile and a willingness to help. It's a rare trait that I wish more people had.  Thanks so much for your help.  I know we moved quickly through the process but the outcome couldn't have been better.  I've already passed your name along to a few other people that may need Nanny services 
                                    <i class="fas fa-quote-right"></i>
                                </p>
                            </div>
                            <div class="testi-pos">
                                <img src="images/ts2.jpg" alt="" class="img-fluid rounded-circle mb-3" />
                                <h4>Wagithomos Family</h4>
                               
                            </div>
                        </li>
                        <li>
                            <div class="testi-agile">
                                <p> I could not have been placed with a better family.Nanny 254 placed me with an amazing family. I so want to stay here forever! Thank You
                                    <i class="fas fa-quote-right"></i>
                                </p>
                            </div>
                            <div class="testi-pos">
                                <img src="images/ts3.jpg" alt="" class="img-fluid rounded-circle mb-3" />
                                <h4>Christine </h4>
                                <span>From Nanny</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->
    <!-- contact -->
    <div class="contact-wthree" id="contact">
        <div class="container py-sm-5">
            <div class="title-section py-4">
                <h3 class="main-title-agile">contact us</h3>
                <span class="title-line">
                </span>
            </div>
            <div class="row py-lg-5 py-4">
                <div class="col-lg-4">
                    <div class="agile-contact-top">
                        <h4>get in touch </h4>
                        <p>Director</p>
                    </div>
                    <hr>
                    <p>nanny254@gmail.com</p>
                    <p>Joyce Orata<p>
                    <p>0712 345 678 ||  0733 123 456</p>
             

                </div>
                <div class="offset-2"></div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <!-- register form grid -->
                    <div class="register-top1">
                        <form action="#" method="get" class="register-wthree">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            First name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Johnson" name="email"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Last name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Kc" name="name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            Mobile
                                        </label>
                                        <input class="form-control" type="text" placeholder="xxxx xxxxx" name="email"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Email
                                        </label>
                                        <input class="form-control" type="email" placeholder="example@email.com" name="email"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            Your message
                                        </label>
                                        <textarea placeholder="Type your message here" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-agile btn-block w-100 font-weight-bold text-uppercase">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--  //register form grid ends here -->
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footerv4-w3ls" id="footer">
        <div class="footerv4-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 footv4-left">
                
                        <h2>
                            <a href="index.html">Nanny 254</a>
                        </h2>
                        <p class="text-white">.</p>
                        <div class="footerv4-social">
                            <h3></h3>
                          
                        </div>
                        <!-- //footer social -->

                    </div>
                    <div class="col-lg-3 col-sm-6 footv4-content mt-sm-0 mt-4">
                        
                     
                    </div>
                    <div class="col-lg-3 footv4-left fv4-g3 my-lg-0 my-4">
                     
                    </div>
         
    <!-- footer -->
    
          
    <!-- //footer -->

    <!-- login  -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="checklogin.php" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="email" id="first_name"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="password" id="password"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" name="checklogin" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-white">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right">
                                <a href="#" class="text-white">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center dont-do text-white">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-white">
                                Register Now</a>

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>




 <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="checklogin.php" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="email" id="first_name"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="password" id="password"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" name="checklogin" value="Login">
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col sub-agile">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-white">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right">
                                <a href="#" class="text-white">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center dont-do text-white">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
                                Register Now</a>

                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- //login -->
    <!-- register -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="payment.php" method="post" class="p-3">
                       
                           <div class="form-group">
                            <label for="recipient-name" class="col-form-label">First Name</label>
                            <input pattern="^[A-Za-z]+$" title="Please enter Alphabetic Characters only" type="text" class="form-control" placeholder=" " name="first_name" id="recipient-rname" required="">
                        </div>
                           <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Last Name</label>
                            <input pattern="^[A-Za-z]+$" title="Please enter Alphabetic Characters only" type="text" class="form-control" placeholder=" " name="last_name" id="recipient-rname" required="">
                        </div>   <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone Number</label>
                            <input pattern="^[0-9]+$" title="Please enter Numeric Characters only" type="text" class="form-control" placeholder=" " name="phoneno" id="recipient-rname" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder=" " name="email" id="recipient-email"
                                required="">
                        </div>

                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Gender</label>
                            
                                  <select class="form-control" id="gender_id" name="gender_id">
                                    <option value="">please select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                  
                                  </select>
                 
                              </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="password" id="password1"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2"
                                required="">
                        </div>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Registration Fee</label>
                            <input type="text" class="form-control" placeholder=" " name="amount" id="recipient-rname"
                                required="">
                        </div>

                        <div class="sub-w3l">
                            <div class="sub-agile">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3 text-white">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                           

                               <button type="submit"  class="form-control" name="create">
                          Proceed To Payment 
                        </button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Nanny Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="payment.php" method="post" class="p-3">
                         <div class="form-group">
                            <label for="recipient-name" class="col-form-label">First Name</label>
                            <input pattern="^[A-Za-z]+$" title="Please enter Alphabetic Characters only" type="text" class="form-control" placeholder=" " name="first_name" id="recipient-rname" required="">
                        </div>
                           <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Last Name</label>
                            <input pattern="^[A-Za-z]+$" title="Please enter Alphabetic Characters only" type="text" class="form-control" placeholder=" " name="last_name" id="recipient-rname" required="">
                        </div>   <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone Number</label>
                            <input pattern="^[0-9]+$" title="Please enter Numeric Characters only" type="text" class="form-control" placeholder=" " name="phoneno" id="recipient-rname" required="">
                        </div>

                       <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Gender</label>
                            
                                  <select class="form-control" id="gender_id" name="gender_id">
                                    <option value="">please select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                  
                                  </select>
                 
                              </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder=" " name="email" id="recipient-email"
                                required="">
                        </div>
                          <div class="form-group">
                            <label for="password1" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="password" id="password1"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2"
                                required="">
                        </div>
              
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Registration Fee</label>
                            <input type="text" class="form-control" placeholder=" "  value = " 500" name="amount" 
                            readonly=""   >
                        </div>

                        <div class="sub-w3l">
                            <div class="sub-agile">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3 text-white">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                           

                               <button type="submit"  class="form-control" name="submit">
                          Proceed To Payment 
                        </button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- // register -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- testimonials  Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //testimonials  Responsiveslides -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <script src="js/counter.js"></script>
    <!-- //stats -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>