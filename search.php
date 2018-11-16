<?php

require_once "connection.php";

require_once "checklogin.php";

?>
          <?php
   
            if (isset($_POST["search"]))
{


$Fname=$_SESSION['authlog']['first_name'];
$email=$_SESSION['authlog']['email'];
$phone=$_SESSION['authlog']['phoneno'];
$salary = $_POST['salary'];
$age = $_POST['age'];
$category = $_POST['category'];
$location= $_POST['location'];
//my variables


$date_done=date('Y-m-d H:i:s');

      $spot_users = "SELECT * FROM `nannies` WHERE salary = '$salary' and age like '$age' and category like '$category' and location like '$location' and status like 'unemployed'" ;




$insert_qry =  "INSERT INTO application(first_name,email,phoneno,salary,age,category,location) VALUES ('$Fname', '$email',
            '$phone', '$salary','$age','$category','$location' )";
if ($conn->query($insert_qry) === TRUE){
            
           echo "";
            // echo "successfull";
        }else{
            echo "Error in ". $insert_qry .' ON '. $conn->error;            
        }

  }


else {

echo "No Match found";


}

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
            <div class="banner-text">
                <div class="slider-info">
                      <h3>Welcome <?php echo $_SESSION['authlog']['first_name']?></h3>
                    <a class="btn btn-primary mt-4 agile-link-bnr scroll" href="#about" role="button">Find Nanny</a>
                </div>
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
                <h3 class="main-title-agile">Nanny Results </h3>
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
</style>

        <table id="customers">
<tr>

     <th>Image</th>
     <th>Name</th>
     <th>Email</th>
     <th>Phone_number</th>
     <th>Skills</th>
     <th>Status</th>
     <th>Background Check</th>
     <th>Action</th>

        




 <?php 

$result_spot_users = $conn->query($spot_users);
    if($result_spot_users->num_rows >0){
        while($spot_users_row = $result_spot_users->fetch_assoc()){
  
    ?>
                <tr>
        <td><img src="uploads/default.png"></td>
        <td><?php echo $spot_users_row["first_name"]; ?>  <?php echo $spot_users_row["last_name"]; ?></td>
        <td><?php echo $spot_users_row["email"]; ?></td>
        <td><?php echo $spot_users_row["phoneno"]; ?></td>
        <td><?php echo $spot_users_row["skills"]; ?></td>
        <td><?php echo $spot_users_row["status"]; ?></td>
        <td><?php echo $spot_users_row["vetting"]; ?></td>
        <td><a href="update.php?id=<?php echo $spot_users_row["id"]; ?>">Create Booking</a>


        </td>
                

                       <?php
  



}








        }


        else {

echo "No Match found";


}
?>


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