<?php


   require_once "connection.php";

   require_once "checklogin.php";



function nannies()
{

   global $conn;
  $sql="SELECT count(id) from nannies";

 if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;
}


function verification(){

  global $conn;
  $sql="SELECT count(id) from nannies where vetting = 'Verified'";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;

   }
function pending(){
  
  global $conn;
  $sql="SELECT count(id) from nannies where vetting = 'Pending'";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;
  }

function parents(){

  global $conn;
  $sql="SELECT count(id) from parents";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;

 }

 
function application(){


  global $conn;
  $sql="SELECT count(id) from application";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;
	
 }
 

 function active_parents(){


   global $conn;
  $sql="SELECT count(id) from parents";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;
	
 }


function employed(){


  global $conn;
  $sql="SELECT count(id) from nannies where status = 'employed'";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;
	
 

}



function unemployed(){


  global $conn;
  $sql="SELECT count(id) from nannies where status = 'unemployed'";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;
	
 

}



function nhif(){


  global $conn;
  $sql="SELECT count(id) from nannies where nhif > 0";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }

    $count=number_format($rowcount ,2);
    return $count;
	
 

}


function nonhif(){


  global $conn;
  $sql="SELECT count(id) from nannies where nhif <= 0";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
  $count=number_format($rowcount,2);
    return $count;
	
 

}


function primary(){


  global $conn;
  $sql="SELECT count(id) from nannies where education = 'primary_school'";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
  $count=number_format($rowcount,2);
    return $count;
	
 

}

function secondary(){


  global $conn;
  $sql="SELECT count(id) from nannies where education = 'secondary_school'";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
  $count=number_format($rowcount,2);
    return $count;
	
 

}


function college(){


  global $conn;
  $sql="SELECT count(id) from nannies where education = 'college'";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
  $count=number_format($rowcount,2);
    return $count;
	
 

}
function university(){


  global $conn;
  $sql="SELECT count(id) from nannies where education = 'university'";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
  $count=number_format($rowcount,2);
    return $count;
	
 

}



function male_nannie(){


  global $conn;
  $sql="SELECT count(id) from nannies where gender_id = 'Male'";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
  $count=number_format($rowcount,2);
    return $count;
	
 

}
function female_nannie(){


  global $conn;
  $sql="SELECT count(id) from nannies where gender_id = 'Female'";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
  $count=number_format($rowcount,2);
    return $count;
	
 

}


function male_parents(){


  global $conn;
  $sql="SELECT count(id) from parents where gender_id = 'Male'";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
  $count=number_format($rowcount,2);
    return $count;
	
 

}
function female_parents(){


  global $conn;
  $sql="SELECT count(id) from parents where gender_id = 'Female'";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
  $count=number_format($rowcount,2);
    return $count;
	
 

}
function revenue(){


  global $conn;
  $sql="SELECT sum(amount) from parents";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }

  $sql1="SELECT sum(amount) from nannies";
   if ($result1=mysqli_query($conn, $sql1)){
        $row1= mysqli_fetch_array($result1);
        $rowcount1 = $row1[0];
        mysqli_free_result($result1);
    }

$total=$rowcount + $rowcount1;


    return $total;
	
 }




 function users(){


  global $conn;
  $sql="SELECT count(id) from parents";
   if ($result=mysqli_query($conn, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }

  $sql1="SELECT count(id) from nannies";
   if ($result1=mysqli_query($conn, $sql1)){
        $row1= mysqli_fetch_array($result1);
        $rowcount1 = $row1[0];
        mysqli_free_result($result1);
    }

$total=$rowcount + $rowcount1;


    return $total;
	
 }









?>