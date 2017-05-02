<?php
session_start();

include 'connect.php';
include 'static_patch.php';
include 'loginolduser.php';
$httpreferer2 = $_SERVER['HTTP_REFERER'];

if(isset($_SESSION['customer_id']))
{
$customer_id=$_SESSION['customer_id'];
echo $_SESSION['customer_id'];
$pid=$_GET['id'];

}
else
    echo "Login First";

                            $query = "SELECT `pname` FROM `product` WHERE `pid`='$pid' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									$I= $row['pname'];					
							}
                                          $query = "SELECT `description` FROM `product` WHERE `pid`='$pid' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									$J= $row['description'];					
							}
                                          $query = "SELECT `price` FROM `product` WHERE `pid`='$pid' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									$K= $row['price'];					
							}

$query2 = "INSERT INTO `cart`(`customer_id`,`pid`,`pname`,`description`,`price`) VALUES('$customer_id', '$pid','$I','$J','$K')";
                if($query_run = mysql_query($query2) && $customer_id!=0)
                {
                  echo '<script type="text/javascript">alert("Successfully added to Cart"); window.location="cartpage1.php" </script>';
                }
                else
                {
                	 echo '<script type="text/javascript">alert("Please Login First"); window.location="index.php" </script>';
                }
?>
		