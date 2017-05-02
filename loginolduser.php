<?php
session_start();      
include 'connect.php';
$httpreferer = $_SERVER['HTTP_REFERER'];

if(isset($_POST['email']) && isset($_POST['password']) )
{
    $email = $_POST['email']; 
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)) 
    { 
        $query = "SELECT `fname`, `customer_id` FROM `customer` WHERE `email`='$email' AND `password`='$password' ";
        if($query_run = mysql_query($query))
        {
          if(mysql_num_rows($query_run) == 1)
          {
      $cid = mysql_result($query_run, 0 ,'customer_id');
			
      $_SESSION['customer_id'] = $cid;
		       echo '<script type="text/javascript">alert("Successfully Signed In");window.location="'.$httpreferer.'";</script>';
          } 
          else if(mysql_num_rows($query_run) == 0)
          {
    	   		echo '<script type="text/javascript">alert("Invalid username and password");window.location="'.$httpreferer.'";</script>';
          }
        }
    }
}
?>