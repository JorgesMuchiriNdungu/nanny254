<?php

require_once "connection.php";

require_once "checklogin.php";

  $id =$_SESSION['authlog']['first_name'];
  $spot_users = "SELECT * FROM `nannies` WHERE employer = '$id'";

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
                            <button type="button" class="btn  ml-lg-2 w3ls-btn">
                                <i class="fas fa-user-home"></i><a href="logout.php">Logout</a>
                            </button>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!-- //header -->
        <div class="container">
       
            
            </div>
        </div>
    </div>


    <br>

    <br><br>

    <br>

     <!-- about -->
    <div class="about-w3sec py-sm-5" id="about">
        <div class="container py-sm-5">
            <div class="title-section py-4">
                <h3 class="main-title-agile">Rate your Nanny</h3>
                <span class="title-line">
                </span>
            </div>




 <body>


<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #e00056;
    color: white;
}


.starRating:not(old){
  display        : inline-block;
  width          : 7.5em;
  height         : 1.5em;
  overflow       : hidden;
  vertical-align : bottom;
}

.starRating:not(old) > input{
  margin-right : -100%;
  opacity      : 0;
}

.starRating:not(old) > label{
  display         : block;
  float           : right;
  position        : relative;
  background      : url('star-off.svg');
  background-size : contain;
}

.starRating:not(old) > label:before{
  content         : '';
  display         : block;
  width           : 1.5em;
  height          : 1.5em;
  background      : url('star-on.svg');
  background-size : contain;
  opacity         : 0;
  transition      : opacity 0.2s linear;
}

.starRating:not(old) > label:hover:before,
.starRating:not(old) > label:hover ~ label:before,
.starRating:not(:hover) > :checked ~ label:before{
  opacity : 1;
</style>
 <?php 

$result_spot_users = $conn->query($spot_users);
    if($result_spot_users->num_rows >0){
        while($spot_users_row = $result_spot_users->fetch_assoc()){
  
    ?>

  <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"><legend>Nanny Rating </legend></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="exampleModal">
                    <form action="profileupdate.php" method="post" class="p-3" enctype="multipart/form-data">
                       <fieldset>
                      
                           <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" placeholder=" " name="first_name" value=<?php echo $spot_users_row["first_name"];?> id="recipient-rname"
                                required="">
                        </div>
                      
                       <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone Number</label>
                            <input type="text" class="form-control" placeholder=" " name="phoneno" value=<?php echo $spot_users_row["phoneno"]; ?>  id="recipient-rname"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder=" " name="email"  value=<?php echo $spot_users_row["email"]; ?> id="recipient-email"
                                required="">
                        </div>

                        <div class="form-group">
                             <label for="Rating" class="col-form-label">Rating</label>
                                <span class="starRating">
        <input id="rating5" type="radio" name="rating" value="5">
        <label for="rating5">5</label>
        <input id="rating4" type="radio" name="rating" value="4">
        <label for="rating4">4</label>
        <input id="rating3" type="radio" name="rating" value="3" checked>
        <label for="rating3">3</label>
        <input id="rating2" type="radio" name="rating" value="2">
        <label for="rating2">2</label>
        <input id="rating1" type="radio" name="rating" value="1">
        <label for="rating1">1</label>
      </span>
                        </div>
                           


                                              <div class="form-group">
                             <label for="dob" class="col-form-label">Comments</label>
                            <input type="text" class="form-control" placeholder=" " name="comments" id="comments"
                             required=""  >
                        </div>
                           



                       
                         
                                        <div class="right-w3l">
                                        <input type="submit" class="form-control" name="update" value="update">
                                    </div>
                        </fieldset>


     
                </div>
            </div>
        </div>
    </div>
                       <?php
  



}        }


        ?>
                           
                </div>
            </div>
        </div>
    </div>

</form>


            </tr>
                   </table>

    <!-- footer -->
    
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