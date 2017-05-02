<?php
	session_start();
	include 'static_patch.php';
	include 'connect.php';
	include 'loginolduser.php';
	$customer_id= $_SESSION['customer_id'];
	$id= $_GET['id'];

 	if(isset($_SESSION['customer_id']))
	{
        $customer_id=$_SESSION['customer_id'];       
	
        $query = "INSERT INTO `billing`(`p_id`,`cid`) VALUES('$id','$customer_id')";
		if($query_run = mysql_query($query))
        {
         //   echo '<script type="text/javascript">alert("Successfully inserted");</script>';
        }
        else
        {
               echo '<script type="text/javascript">alert("Sorry some error has occurred");</script>';
        }
 	}
 ?>

<!DOCTYPE html>
<html>
<head>
                <title>Order Summary</title>
	  	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
  		<link rel="stylesheet" type="text/css" href="bootstrap.css">
  		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <style>
                        .side{
                           display:inline-block;
                           padding:30px;
                           font-size:18px;
                        }
                </style>

               <script>
                     function giveconfirmation()
                     {
                           alert("Your Order has been successfully booked! You will get the delivery in 2 days. Cash on delivery.")
                     }

               </script>

</head>
	<body>
	<div class="onlyscroll">
	<div style="padding:10px;font-size:20px;font-weight:bold;">ORDER SUMMARY:
            <br>
        </div>	
		<div class="side" style="padding-top:-20px">
			<?php
				$id= $_GET['id']; 		
				$query = "SELECT `simg` FROM `product` WHERE `pid`='$id' ";
				if($run_query=mysql_query($query))
				{
					while($row = mysql_fetch_assoc($run_query))
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';			
				}				
			?>
			
		</div>
		
		
		<div class="side">
                <div>
			Bill number:
			<?php				
				$id= $_GET['id']; 		

				$query = "SELECT `bill_no` FROM `billing`,`product`,`customer` WHERE `pid`=`p_id` AND `cid`=`customer_id` AND `pid`='$id'";
				if($run_query=mysql_query($query))
				{
					while($row = mysql_fetch_array($run_query))
						echo $row['bill_no'];				
				}				
			?>
		</div>
        
		
		<div>
	         <?php
				$id= $_GET['id']; 		

					$query = "SELECT `pname` FROM `product` WHERE `pid`='$id' ";
				    if($run_query=mysql_query($query))
					{
						while($row = mysql_fetch_array($run_query))
							echo $row['pname'];					
					}				

				?>			
                        </div>
			<div>

                        Price:
				<?php
				$id= $_GET['id']; 		

					$query = "SELECT `price` FROM `product` WHERE `pid`='$id' ";
					if($run_query=mysql_query($query))
					{
						while($row = mysql_fetch_array($run_query))
							echo '&#8377;'.$row['price'];					
					}				
				?>
			</div>
		
		
		<div>
		Size:
             	<?php
				$id= $_GET['id']; 		

				$query = "SELECT `size` FROM `product` WHERE `pid`='$id' ";
				if($run_query=mysql_query($query))
				{
					while($row = mysql_fetch_array($run_query))	
						echo $row['size'];					
				}				
			?>
		</div>
        <br>
		


			<div>
                        Address:
				<?php
				$id= $_GET['id']; 		

					$query = "SELECT `address` FROM `customer` WHERE `customer_id`='$customer_id' ";
					if($run_query=mysql_query($query))
					{
						while($row = mysql_fetch_array($run_query))
							echo $row['address'];					
					}				
				?>
			</div>
		<button class="buttons" style="margin-top:40px;padding:10px" onclick="giveconfirmation()">Confirm Order</button>
       </div>
</div>
	</body>
</html>