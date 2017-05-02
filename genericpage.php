<?php
session_start();
include 'connect.php';
include 'static_patch.php';

$id = $_GET['oid'];

if(isset($_SESSION['customer_id']))
{
//echo $_SESSION['customer_id'];
$customer_id=$_SESSION['customer_id'];
}
else
//echo "login";
?>

<!DOCTYPE html>
<html>
<head>
	  	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
  		<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
	<body>
	<div class="onlyscroll">
		
		<div class="picture">
			<?php
				$query = "SELECT `bimg` FROM `product` WHERE `pid`='$id' ";
				if($run_query=mysql_query($query))
				{
					while($row = mysql_fetch_assoc($run_query))
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['bimg'] ).'"/>';			
				}				
			?>

			<br>

		</div>
		
		<div class="info">
				<?php
					$query = "SELECT `pname` FROM `product` WHERE `pid`='$id' ";
				    if($run_query=mysql_query($query))
					{
						while($row = mysql_fetch_array($run_query))
							echo $row['pname'];					
					}				
				?>
					
			<div class="price">

				<?php
					$query = "SELECT `price` FROM `product` WHERE `pid`='$id' ";
					if($run_query=mysql_query($query))
					{
						while($row = mysql_fetch_array($run_query))
							echo '&#8377;'.$row['price'];					
					}				
				?>
			</div>
		
		<br>
		</div>
		
		<div class="sizes">
			<span>
			<?php
				
				$query = "SELECT `size` FROM `product` WHERE `pid`='$id' ";
				
				if($run_query=mysql_query($query))
				{
					while($row = mysql_fetch_array($run_query))	
						echo $row['size'];					
				}				
			?>
			</span>
		</div>
                <br>
		<div class="descr">
			Description:
			<?php				
				$query = "SELECT `description` FROM `product` WHERE `pid`='$id' ";
				if($run_query=mysql_query($query))
				{
					while($row = mysql_fetch_array($run_query))
						echo $row['description'];				
				}				
			?>
		</div>
                <br>
		<div>
			<div style="display:inline-block">
	                <button class="buttons" onclick="location.href='pers.php?id=<?php echo $id?>' ">PERSONALIZE</button>
		  		    <button class="buttons" onclick="location.href='cartadd.php?id=<?php echo $id?>'" >ADD TO CART</button>
 		
			</div>
			<br>
	                <button class="buttons"  style="margin-top:20px;padding:10px" onclick="location.href='buypage.php?id=<?php echo $id?>' ">BUY NOW</button>			
		</div>
             </div>
	</body>
</html>