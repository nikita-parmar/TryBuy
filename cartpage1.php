<?php
	session_start();
  include 'connect.php';  
  include 'static_patch.php';
	include 'loginolduser.php';

//	$id= $_GET['id'];

 	if(isset($_SESSION['customer_id']))
	{
		$customer_id=$_SESSION['customer_id'];
  }                                        
	else
   {
           echo '<script type="text/javascript">alert("Please Login to see the contents of your Cart");</script>';
   }             
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
  		<link rel="stylesheet" type="text/css" href="bootstrap.css">
  		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<style>
table.carttable {
    border-collapse: collapse;
     width: 100%;
     font-weight:20px;
     font-size:18px;
}

td.ct, th.ct {
    text-align: center;
    padding: 8px;
    border-style:solid;
    border-width:2px;
    border-color:#e40046;
}
</style>
</head>
<body>
<div class="container onlyscroll" style="margin-top:60px">
<p style="font-size:22px;padding:20px">YOUR CART CONTAINS:</p>

			  <?php
                          	 $query="SELECT `pid`,`pname`,`description`,`price` FROM `cart` WHERE `customer_id`='$customer_id'";
                                   
		if($run_query=mysql_query($query))
				{
					while($row = mysql_fetch_array($run_query))
				                               {
                                                   			
                                                            echo "<center>";
                                                            echo "<table class='carttable' CELLPADDING=40 border=3>";
                                                            echo "<tr class='ct'>";
                                                            $pid = $row['pid'];
                                                            echo "<td class='ct' width='400px'>".$row['description']."</a></td>";
                                                            echo "<td class='ct' width='200px'>".$row['pname']."</td>";
                                                            echo "<td class='ct' width='150px'>".$row['price']."</td>";
                                              echo "<td  class='ct' width='100px'><a href='genericpage.php?oid=$pid' class='btn btn-success' role='button'>Quick View</a></td>";
                                                            echo "</tr>";
												
                                                           echo "</table>";
                                 
                                                                  
                                                         }

                       }
                                   else 
                                       echo "CART EMPTY"; 
  ?>
			
	
</div>
</body>
</html>	