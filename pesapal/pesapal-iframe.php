<?php
include_once('OAuth.php');
include "connection.php";
//pesapal params

             if (isset($_POST["submit"]))
{

$amount = $_POST['amount'];
$amount = number_format($amount, 2);//format amount to 2 decimal places
$reference =random_string(10).date('s');//unique order id of the transaction, generated by merchant
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender_id'];
$phoneno= $_POST['phoneno'];//ONE of email or phonenumber is required
$password = md5($_POST["password"]);

$date_done=date('Y-m-d H:i:s');
$username='nanny';
$usertype='2';


     $insert_qry = "INSERT INTO nannies (first_name,last_name,phoneno,email,password,amount,reference,gender_id) 
      VALUES ('$first_name', '$last_name','$phoneno', '$email','$password','$amount','$reference',$gender)";


    if ($conn->query($insert_qry) === TRUE){
      
      echo "";
      // echo "successfull";
    }else{
      echo "Error in ". $insert_qry .' ON '. $conn->error;      
    }


  $insert_qry =  "INSERT INTO users2 (first_name,email,phoneno,username,password,usertype) VALUES ('$first_name', '$email',
      '$phoneno', '$username','$password','$usertype' )";
    if ($conn->query($insert_qry) === TRUE){
      echo "";
      // echo "successfull";
    }else{
      echo "Error in ". $insert_qry .' ON '. $conn->error;      
    }


  }


 
                if (isset($_POST["create"]))
{

//my variables

$amount = $_POST['amount'];
$amount = number_format($amount, 2);//format amount to 2 decimal places
$reference =random_string(10).date('s');//unique order id of the transaction, generated by merchant
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phoneno= $_POST['phoneno'];//ONE of email or phonenumber is required
$password = md5($_POST["password"]);
$username='parents';
$usertype='2';
$gender = $_POST['gender_id'];


$date_done=date('Y-m-d H:i:s');

      $insert_qry =  "INSERT INTO parents (first_name,last_name,phoneno,email,password,amount,reference,gender_id) 
      VALUES ('$first_name', '$last_name','$phoneno', '$email','$password','$amount','$reference',$gender)";
    if ($conn->query($insert_qry) === TRUE){
      
      echo "";
      // echo "successfull";
    }else{
      echo "Error in ". $insert_qry .' ON '. $conn->error;      
    }
  $insert_qry =  "INSERT INTO users2 (first_name,email,phoneno,username,password,usertype) VALUES ('$first_name', '$email',
      '$phoneno', '$username','$password','$usertype' )";
    if ($conn->query($insert_qry) === TRUE){
      echo "";
      // echo "successfull";
    }else{
      echo "Error in ". $insert_qry .' ON '. $conn->error;      
    }




  }
   
        
$token = $params = NULL;

/*
PesaPal Sandbox is at http://demo.pesapal.com. Use this to test your developement and 
when you are ready to go live change to https://www.pesapal.com.
*/
$consumer_key = 'KJ/0huot50KtLyNlvpDCDkaeOECh3D2W';//Register a merchant account on
                   //demo.pesapal.com and use the merchant key for testing.
                   //When you are ready to go live make sure you change the key to the live account
                   //registered on www.pesapal.com!
$consumer_secret = 'QA1vdAhsgCcZzm4lMhrrdDF/Gtk=';// Use the secret from your test
                   //account on demo.pesapal.com. When you are ready to go live make sure you 
                   //change the secret to the live account registered on www.pesapal.com!
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
$iframelink = 'https://www.pesapal.com/API/PostPesapalDirectOrderV4';//change to      
                   //https://www.pesapal.com/API/PostPesapalDirectOrderV4 when you are ready to go live!

//get form details
//generate Reference
function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('A', 'Z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}

$amount = $_POST['amount'];
$amount = number_format($amount, 2);//format amount to 2 decimal places
$desc ='Nanny 254';
$type ='MERCHANT'; //default value = MERCHANT
$reference =random_string(10).date('s');//unique order id of the transaction, generated by merchant
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phonenumber = $_POST['phoneno'];//ONE of email or phonenumber is required


//my variables
$status=0;
$ip=$_SERVER['REMOTE_ADDR'];


$date_done=date('Y-m-d H:i:s');

//Database insert



$callback_url = 'http://localhost/Nanny/index.php'; //redirect url, the page that will handle the response from pesapal.

$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" xmlns=\"http://www.pesapal.com\" />";
$post_xml = htmlentities($post_xml);

$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

//post transaction to pesapal
$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
$iframe_src->set_parameter("oauth_callback", $callback_url);
$iframe_src->set_parameter("pesapal_request_data", $post_xml);
$iframe_src->sign_request($signature_method, $consumer, $token);

//display pesapal - iframe and pass iframe_src
?>
<iframe src="<?php echo $iframe_src;?>" width="100%" height="700px"  scrolling="no" frameBorder="0">
	<p>Browser unable to load iFrame</p>
</iframe>