<?php

require_once "connection.php";
require_once "checklogin.php";

$id =$_SESSION['authlog']['first_name'];
$spot_users  = "SELECT * from nannies where first_name = '$id'";

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Nanny 254</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Insurance Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
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
    <div class="banner" id="home">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="index.html">
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
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#about">about</a>
                        </li>
                        <li class="nav-item dropdown mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item scroll" href="#work">our work</a>
                                <a class="dropdown-item scroll" href="#testi">testimonials</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item scroll" href="#more">more</a>
                            </div>
                        </li>
                        <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#contact">Contact</a>
                        </li>
                        <li>
                            <button type="button" class="btn  ml-lg-2 w3ls-btn" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal">
                                <i class="far fa-user-circle"></i>
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
                    <h3>Welcome <?php  echo $_SESSION["authlog"]["username"];?></h3>
                    <p class="text-white mt-sm-4 mt-2">Your Nanny 254 has been activated you can Proceed to Log in.</p>
                    <a class="btn btn-primary mt-4 agile-link-bnr scroll" data-toggle="modal" data-target="#exampleModal" role="button"> Proceed to Log in</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- about -->


    <
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
                            <input type="text" class="form-control" placeholder=" " name="nickname" id="recipient-name"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="password" id="password"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Login" name="checklogin">
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
    <!-- //login -->
    <!-- register -->
   

 <?php 

$result_spot_users = $conn->query($spot_users);
    if($result_spot_users->num_rows >0){
        while($spot_users_row = $result_spot_users->fetch_assoc()){
  
    ?>

  <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"><legend>General Information</legend></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="exampleModal">
                    <form action="nannyupdate.php" method="post" class="p-3">
                       <fieldset>
                      
                           <div class="form-group">
                            <label for="recipient-name" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" placeholder=" " name="first_name" value=<?php echo $spot_users_row["first_name"]; ?> id="recipient-rname"
                                required="">
                        </div>
                           <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder=" " name="last_name" value=<?php echo $spot_users_row["last_name"]; ?>  id="recipient-rname"
                                required="">
                        </div>   <div class="form-group">
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
                             <label for="dob" class="col-form-label">DOB</label>
                            <input type="date" class="form-control" placeholder=" " name="dob" id="dob"
                               >
                        </div>

                          <div class="form-group">
                             <label for="nhif" class="col-form-label">NHIF Member No</label>
                            <input type="text" class="form-control" placeholder=" " name="nhif" id="nhif">
                               
                        </div>


                      
                        <button type="button"   onClick='incr()' class="next action-button"  data-toggle="modal" data-target="#exampleModal2" data-dismiss="modal">
                              Next</button>
                                <div class="right-w3l">
                           
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


    <!-- //login -->
    <!-- register -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"> <legend>Driving Record</legend></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                       <fieldset>
                       
                       
     
                              <div class="form-group">
                                <label class="control-label">Do you have a valid driving license</label>
                            
                                  <select class="form-control" id="license" name="license">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>
                           <div class="form-group">
                            <label for="recipient-name" class="col-form-label">License</label>
                            <input type="text" class="form-control" placeholder=" " name="license" id="recipient-rname"
                                required="">
                        </div>   <div class="form-group">
                            <label for="recipient-name" class="col-form-label">County</label>
                            <input type="text" class="form-control" placeholder=" " name="county" id="recipient-rname"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="accident" class="col-form-label">No of accidents and Driving offences in the past three years</label>
                            <input type="text" class="form-control" placeholder=" " name="accident" id="accident"
                                required="">
                        </div>
                            <div class="form-group">
                                <label class="control-label">Are you able to drive a Manual Transmission</label>
                            
                                  <select class="form-control" id="manual" name="manual">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>


                                     <div class="form-group">
                                <label class="control-label">Do you have a car?</label>
                            
                                  <select class="form-control" id="car" name="car">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>
                       
                        <button type="button"   onClick='incr()' class="next action-button"  data-toggle="modal" data-target="#exampleModal3" data-dismiss="modal">
                              Next</button>
       <button type="button"    class="next action-button"  data-toggle="modal" data-target="#exampleModal" data-dismiss="modal">
                              Back</button>
                            </fieldset>

         
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- register -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">  <legend>Job Preference</legend></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <fieldset>
                      
                       
     
                              <div class="form-group">
                                <label class="control-label">Do you prefer to Live-in or Live Out</label>
                            
                                  <select class="form-control" id="living" name="living">
                                    <option value="">please select</option>
                                    <option value="live-in">live-in</option>
                                    <option value="live-out">live-out</option>
                                  
                                  </select>
                 
                              </div>


                                   <div class="form-group">
                                <label class="control-label">Do you prefer to work full-time or Part-time</label>
                            
                                  <select class="form-control" id="wtime" name="wtime">
                                    <option value="">please select</option>
                                    <option value="full-time">full-time</option>
                                    <option value="part-time">part-time</option>
                                  
                                  </select>
                 
                              </div>

                                    <div class="form-group">
                                <label class="control-label">Do you prefer Permanent or Temporary employement </label>
                            
                                  <select class="form-control" id="employment" name="employment">
                                    <option value="">please select</option>
                                    <option value="Permanent">Permanent</option>
                                    <option value="Temporary">Temporary</option>
                                  
                                  </select>
                 
                              </div>



                                    <div class="form-group">
                                <label class="control-label">What days do you prefer to work</label>
                            
                                  <select class="form-control" id="days" name="days">
                                    <option value="">please select</option>
                                    <option value="Monday-Friday">Monday-Friday</option>
                                    <option value="Monday-Saturday">Monday-Saturday</option>
                                    <option value="Monday-Sunday">Monday-Sunday</option>
                                  
                                  
                                  </select>
                 
                              </div>


                                    <div class="form-group">
                                <label class="control-label">Job Category Applying for</label>
                            
                                  <select class="form-control" id="category" name="category">
                                    <option value="">please select</option>
                                    <option value="Nanny">Nanny</option>
                                    <option value="Domestic Manager">Domestic Manager</option>
                                    <option value="House Manager">House Manager</option>
                                  
                                  
                                  </select>
                 
                              </div>
                        
                        <button type="button"   onClick='incr()' class="next action-button"  data-toggle="modal" data-target="#exampleModal4" data-dismiss="modal">
                              Next</button>
        <button type="button"  class="next action-button"  data-toggle="modal" data-target="#exampleModal3" data-dismiss="modal">
                              Back</button>
                            </fieldset>

                                       
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- register -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModaLabel1" ><legend>Background Check</legend></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                              <fieldset>
                       
                       
     
                              <div class="form-group">
                                <label class="control-label">Do you have any criminal record conviction</label>
                            
                                  <select class="form-control" id="criminal" name="criminal">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>
                           <div class="form-group">
                            <label for="recipient-name" class="col-form-label">If Yes Explain </label>
                            <input type="text"   class="form-control" placeholder=" " name="cyes" >
                                
                        </div>  


                               <div class="form-group">
                                <label class="control-label">Do you Smoke  ?</label>
                            
                                  <select class="form-control" id="smoke" name="smoke">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>


                              <div class="form-group">
                                <label class="control-label">Do you take drugs</label>
                            
                                  <select class="form-control" id="drugs" name="drugs">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>
                                <div class="form-group">
                                <label class="control-label">Do you drink Alcohol</label>
                            
                                  <select class="form-control" id="alcohol" name="alcohol">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>

                   
                        <button type="button"   onClick='incr()' class="next action-button"  data-toggle="modal" data-target="#exampleModal5" data-dismiss="modal">
                              Next</button>
        <button type="button"  class="next action-button"  data-toggle="modal" data-target="#exampleModal3" data-dismiss="modal">
                              Back</button>
                            </fieldset>

         
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- register -->
    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"> <legend>Medical history</legend></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                              <fieldset>
                      
                       
     
                              <div class="form-group">
                                <label class="control-label">Do you have a valid dietary Restriction</label>
                            
                                  <select class="form-control" id="diet" name="diet">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>


                                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">If Yes Explain </label>
                           <input type="text"   class="form-control" placeholder=" " name="ydiet" >
                                
                        </div>  

                           <div class="form-group">
                                <label class="control-label">Do you have any medical restriction that may affect your work as a domestic worker</label>
                            
                                  <select class="form-control" id="medical" name="medical">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>
                                       <div class="form-group">
                            <label for="recipient-name" class="col-form-label">If Yes Explain </label>
                           <input type="text"   class="form-control" placeholder=" " name="ymedical" >
                                
                        </div>  

                         <div class="form-group">
                                <label class="control-label">Have you had or do you current have any psychological problems</label>
                            
                                  <select class="form-control" id="psychological" name="psychological">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>
                                       <div class="form-group">
                            <label for="recipient-name" class="col-form-label">If Yes Explain </label>
                            <input type="text"   class="form-control" placeholder=" " name="ypsychological" >
                                
                        </div> 

                        
                        <button type="button"   onClick='incr()' class="next action-button"  data-toggle="modal" data-target="#exampleModal6" data-dismiss="modal">
                              Next</button>
<button type="button"  class="next action-button"  data-toggle="modal" data-target="#exampleModal4" data-dismiss="modal">
                              Back</button>
                            </fieldset>

         
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- register -->
    <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"> <legend>Education</legend></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                              <fieldset>
                       
                       
     
                              <div class="form-group">
                                <label class="control-label">What is your highest level of education?</label>
                            
                                  <select class="form-control" id="education" name="education">
                                    <option value="">please select</option>
                                    <option value="school">School</option>
                                    <option value="college">College</option>
                                    <option value="university">University</option>
                                  
                                  </select>
                 
                              </div>


                              <div class="form-group">
                                <label class="control-label">Do you  have a first Aid/CPR Certification?</label>
                            
                                  <select class="form-control" id="firstaid" name="firstaid">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                            
                                  
                                  </select>
                 
                              </div>
                           <div class="form-group">
                            <label for="recipient-name" class="col-form-label">If Yes What level</label>
                            <input type="text" class="form-control" placeholder=" " name="firstaid_level" id="firstaid_level">
   </div>

                              <div class="form-group">
                                <label class="control-label">Have you taken  any additional course or training?</label>
                            
                                  <select class="form-control" id="course" name="course">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                            
                                  
                                  </select>
                 
                              </div>
                           <div class="form-group">
                            <label for="recipient-name" class="col-form-label">If Yes,List </label>
                            <input type="text" class="form-control" placeholder=" " name="course_list" id="course_list">
                        </div>  




                        <button type="button"   onClick='incr()' class="next action-button"  data-toggle="modal" data-target="#exampleModal7" data-dismiss="modal">
                              Next</button>
<button type="button"  class="next action-button"  data-toggle="modal" data-target="#exampleModal6" data-dismiss="modal">
                              Back</button>
                            </fieldset>
                             <div class="right-w3l">
                                        <input type="submit" class="form-control" name="update" value="update">
                                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- register -->
    <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"><legend>Interests</legend></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                              <fieldset>
                        
                         
                           <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Hobbies & Interests</label>
                            <input type="text" class="form-control" placeholder=" " name="hobbies" id="recipient-rname"
                                required="">
                        </div>  

                             <div class="form-group">
                                <label class="control-label">Do you like pets ?</label>
                            
                                  <select class="form-control" id="pets" name="pets">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>

                             <div class="form-group">
                            <label for="recipient-name" class="col-form-label">If Yes,Explain</label>
                            <input type="text" class="form-control" placeholder=" " name="ypets" id="ypets">
                             </div>
                                   <div class="form-group">
                                <label class="control-label">Do you do house keeping?
                                </label>
                            
                                  <select class="form-control" id="housekeeping" name="housekeeping">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>

                                              <div class="form-group">
                            <label for="recipient-name" class="col-form-label">If Yes, Explain</label>
                            <input type="text" class="form-control" placeholder=" " name="yhousekeeping" id="yhousekeeping">
                            </div>
                                <div class="form-group">
                                <label class="control-label">Do you cook ?
                                </label>
                            
                                  <select class="form-control" id="cook" name="cook">
                                    <option value="">please select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  
                                  </select>
                 
                              </div>

                                              <div class="form-group">
                            <label for="recipient-name" class="col-form-label">If Yes, Explain</label>
                            <input type="text" class="form-control" placeholder=" " name="ycook" id="ycook">
                            </div>

 
                        <button type="button"   onClick='incr()' class="next action-button"  data-toggle="modal" data-target="#exampleModal8" data-dismiss="modal">
                              Next</button>
<button type="button"  class="next action-button"  data-toggle="modal" data-target="#exampleModal7" data-dismiss="modal">
                              Back</button>
                                 <div class="right-w3l">
                                        <input type="submit" class="form-control" name="update" value="update">
                                    </div>
                    
                            </fieldset>
                  
                </div>
            </div>
        </div>
    </div>





     <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"><legend>Employment History</legend></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                              <fieldset>
                        
                         
                         

                             <div class="form-group">
                                <label class="control-label">Employer 1</label>
                            
                                <textarea  class="form-control" placeholder=" Date - Name of employer - Telephone No -Duties " name="emp1" id="emp1"></textarea>
                 
                              </div>

                               <div class="form-group">
                                <label class="control-label">Employer 2</label>
                            
                                <textarea  class="form-control" placeholder=" Date - Name of employer - Telephone No -Duties " name="emp2" id="emp2"></textarea>
                 
                              </div>

                           
 
                        <button type="button"   onClick='incr()' class="next action-button"  data-toggle="modal" data-target="#exampleModal9" data-dismiss="modal">
                              Next</button>
<button type="button"  class="next action-button"  data-toggle="modal" data-target="#exampleModal8" data-dismiss="modal">
                              Back</button>
                                  <div class="right-w3l">
                                        <input type="submit" class="form-control" name="update" value="update">
                                    </div>
                    
                            </fieldset>
                  
                </div>
            </div>
        </div>
    </div>
 <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1"><legend>Nanny Experience</legend></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                              <fieldset>
                        
                         
                         

                                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">What is your Previous Nanny Experience</label>
                        
                            
                                  <select class="form-control" id="nannyexp" name="nannyexp">
                                    <option value="">please select</option>
                                    <option value="Live-in-Nanny">Live-in Nanny</option>
                                    <option value="Live-out-Nanny">Live-out Nanny</option>
                                    <option value="Full-TimeHouse-Keeper">Full-Time House Keeper</option>
                                    <option value="Part-Time-House-Manager">Part Time House Manager</option>
                                    <option value="Domestic-Manager">Domestic Manager</option>
                              
                                  
                                  </select>
                 
                              </div>


                               <div class="form-group">
                                <label class="control-label">Describe your experience as a nanny/housekeeper/domestic manager</label>
                            
                                <textarea  class="form-control" placeholder=" " name="expnanny" id="expnanny"></textarea>
                 
                              </div>

                           
                                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">What is your Previous Experience Working with Children</label>
                        
                            
                                  <select class="form-control" id="childrenexp" name="childrenexp">
                                    <option value="">please select</option>
                                    <option value="child-care">Child Care</option>
                                    <option value="nanny">Nanny</option>
                                    <option value="house-keeper">House Keeper</option>
                                    <option value="raised">Raised my own children</option>
                                   
                              
                                  
                                  </select>
                 
                              </div>

                  
                                    <div class="right-w3l">
                                        <input type="submit" class="form-control" name="update" value="update">
                                    </div>
                    
                            </fieldset>
                         
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