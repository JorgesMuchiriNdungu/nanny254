
            <?php

            require_once "connection.php";

            require_once "checklogin.php";

            ?>

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
                               Nanny
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item scroll" data-toggle="modal" aria-pressed="false"
                                            data-target="#exampleModal3">Sign in</a>
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <div class="dropdown-divider"></div>
                              
                            </div>
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
                      

                <li>
                                        <button type="button" class="btn"><a href="logout.php">
                                            Logout
                                        </button>
                                    </li>

                                </ul>
                            </div>

                        </nav>
                    </header>
                    <!-- //header -->
                    <div class="container">
                        <div class="banner-text">
                            <div class="slider-info">
                                  <h3>Welcome <?php echo $_SESSION['authlog']['first_name']?></h3>
                                <a class="btn btn-primary mt-4 agile-link-bnr scroll" href="#about" role="button">Find Reading Materials</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //banner -->
                <!-- about -->  <div class="about-w3sec py-sm-5" id="about">
                    
                        </div>
              <div class="more-services py-lg-5">
        <div class="container pt-sm-5">
            <div class="title-section py-4">
             <h3 class="main-title-agile">Reading Materials </h3>
                <span class="title-line">
                </span>
            </div>
            <div class="row grid pt-sm-5">
                <div class="col-lg-3 col-6">
                    <figure class="effect-layla">
                   <img src="images/firstaid.jpg" alt="img" class="img-fluid" />
                        <figcaption>
                           <h4>First Aid Training</h4><a href="firstaid.pdf"></a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-6">
                    <figure class="effect-layla">
                       <a href="babysitter.pdf"> <img src="images/sitter.jpg" alt="img" class="img-fluid" /></a>
                        <figcaption>
                            <h4>Baby Sitter Training</h4> <a href="sitter.pdf"></a>
                           
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-3 col-6">
                    <figure class="effect-layla">
                     <img src="images/cookbook.jpg" alt="img" class="img-fluid" /></a>
                        <figcaption>
                            <h4>The Cookbook</h4> <a href="cookbook.pdf"></a>
                           
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3 col-6">
                    <figure class="effect-layla">
                      <a href="breakfast.pdf">  <img src="images/breakfast.jpg" alt="img" class="img-fluid" /></a>
                        <figcaption>
                          <h4>Breakfast Recipes</h4>  <a href="breakfast.pdf"></a>
                           
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
              </div>
        </div>
    </div>
                <!-- services -->
              
                <!-- //services -->
                <!-- how it works -->

                <!-- //how it works -->
                <!-- testimonials -->
                <div class="testimonials py-lg-5" id="testi">
                    <div class="container py-5">
                        <div class="title-section pb-4">
                            <h3 class="main-title-agile text-white">What people say about us.</h3>
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
                                            <p> I could not have been placed with a better family. I am a little overwhelmed with how AWESOME SAUCE HE IS. All he does is smile he's contagious bc he has me smili You have placed me with an amazing family. I so want to stay here forever! Thank You
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
                                        <input type="text" class="form-control" placeholder=" " name="first_name" id="first_name"
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
                                        <input type="text" class="form-control" placeholder=" " name="first_name" id="first_name"
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
                                        <input type="text" class="form-control" placeholder=" " name="first_name" id="recipient-rname"
                                            required="">
                                    </div>
                                       <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Last Name</label>
                                        <input type="text" class="form-control" placeholder=" " name="last_name" id="recipient-rname"
                                            required="">
                                    </div>   <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Phone Number</label>
                                        <input type="text" class="form-control" placeholder=" " name="phoneno" id="recipient-rname"
                                            required="">
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
                                        <input type="text" class="form-control" placeholder=" " name="first_name" id="recipient-rname"
                                            required="">
                                    </div>
                                       <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Last Name</label>
                                        <input type="text" class="form-control" placeholder=" " name="last_name" id="recipient-rname"
                                            required="">
                                    </div>   <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Phone Number</label>
                                        <input type="text" class="form-control" placeholder=" " name="phoneno" id="recipient-rname"
                                            required="">
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
                                        <label for="recipient-name" class="col-form-label">Salary Range</label><br>
                                       <select class="form-control" name="salary">
              <option value="class1">5000-1000</option>
              <option value="class2">10000-15000</option>
              <option value="class3">15000+</option>

            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="age" class="col-form-label">Age Bracket</label>
                                                           <select class="form-control" name="age">
              <option value="16-20">16-20</option>
              <option value="21-24">21-24</option>
              <option value="25-30">25-30</option>
              <option value="30+">30+</option>
            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="category" class="col-form-label">Category</label>
                                                            <select class="form-control" name="category">
                                                          
              <option value="babysitter">Baby Sitter</option>
              <option value="nanny">Nanny</option>
              <option value="housekeper">House Keeper</option>
            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="password2" class="col-form-label">Location</label>
                                                                            <select class="form-control" name="location">
              <option value="Nairobi">Nairobi</option>
              <option value="Mombasa">Mombasa</option>
              <option value="Kisumu">Kisumu</option>
              <option value="Eldoret">Eldoret</option>
            </select>
                                    </div>
                                        <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Skills</label>
                                    <textarea class="form-control" name="skills" id="new-post" rows="3"  placeholder="List down your skils" ></textarea>
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