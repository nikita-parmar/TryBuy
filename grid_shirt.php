<?php
	include 'static_patch.php';
	include 'connect.php';
?>

<html>
	<head>
  <title>Men's Shirts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="text/css" href="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

  <style type="text/css">
  	.right-heart{
  		text-align: right;
  	}

	p.dress_name{
		color: #0000ff;
	}
  </style>

</head>

<body>
		<div class="onlyscroll">
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<div class="thumbnail">

					<?php
						$query = "SELECT `simg` FROM `product` WHERE `pid`='men2s1' ";
						if($run_query=mysql_query($query))
						{
							while($row = mysql_fetch_assoc($run_query))
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';					
						}				
					?>
					
					<p class="dress_name"> 
						<?php
							$query = "SELECT `pname` FROM `product` WHERE `pid`='men2s1' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo $row['pname'];					
							}				
						?>
					</p>
					
					<p style="font-weight:bold">
						<?php
							$query = "SELECT `price` FROM `product` WHERE `pid`='men2s1' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo '&#8377;'.$row['price'];						
							}				
						?>
					</p>

					<p><a href="genericpage.php?oid=<?php echo 'men2s1'?>"  class="btn btn-success" role="button">Quick View</a></p>	 
				</div>
			</div>


			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<div class="thumbnail">

					<?php
						$query = "SELECT `simg` FROM `product` WHERE `pid`='men2s2' ";
						if($run_query=mysql_query($query))
						{
							while($row = mysql_fetch_assoc($run_query))
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';					
						}				
					?>
					
					<p class="dress_name"> 
						<?php
							$query = "SELECT `pname` FROM `product` WHERE `pid`='men2s2' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo $row['pname'];					
							}				
						?>
					</p>
					
					<p style="font-weight:bold">
						<?php
							$query = "SELECT `price` FROM `product` WHERE `pid`='men2s2' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
										echo '&#8377;'.$row['price'];			
							}				
						?>
					</p>
					<p><a href="genericpage.php?oid=<?php echo 'men2s2'?>"  class="btn btn-success" role="button">Quick View</a></p>	 
				</div>
			</div>



			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<div class="thumbnail">

					<?php
						$query = "SELECT `simg` FROM `product` WHERE `pid`='men2s3' ";
						if($run_query=mysql_query($query))
						{
							while($row = mysql_fetch_assoc($run_query))
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';					
						}				
					?>
					
					<p class="dress_name"> 
						<?php
							$query = "SELECT `pname` FROM `product` WHERE `pid`='men2s3' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo $row['pname'];					
							}				
						?>
					</p>
					
					<p style="font-weight:bold">
						<?php
							$query = "SELECT `price` FROM `product` WHERE `pid`='men2s3' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
										echo '&#8377;'.$row['price'];			
							}				
						?>
					</p>
					<p><a href="genericpage.php?oid=<?php echo 'men2s3'?>"  class="btn btn-success" role="button">Quick View</a></p>	 
				</div>
			</div>


			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<div class="thumbnail">

					<?php
						$query = "SELECT `simg` FROM `product` WHERE `pid`='men2s4' ";
						if($run_query=mysql_query($query))
						{
							while($row = mysql_fetch_assoc($run_query))
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';					
						}				
					?>
					
					<p class="dress_name"> 
						<?php
							$query = "SELECT `pname` FROM `product` WHERE `pid`='men2s4' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo $row['pname'];					
							}				
						?>
					</p>
					
					<p style="font-weight:bold">
						<?php
							$query = "SELECT `price` FROM `product` WHERE `pid`='men2s4' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo '&#8377;'.$row['price'];							
							}				
						?>
					</p>
					<p><a href="genericpage.php?oid=<?php echo 'men2s4'?>"  class="btn btn-success" role="button">Quick View</a></p>	 
				</div>
			</div>

		<div classs="clearfix visible-lg"></div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<div class="thumbnail">

					<?php
						$query = "SELECT `simg` FROM `product` WHERE `pid`='men2s5' ";
						if($run_query=mysql_query($query))
						{
							while($row = mysql_fetch_assoc($run_query))
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';					
						}				
					?>
					
					<p class="dress_name"> 
						<?php
							$query = "SELECT `pname` FROM `product` WHERE `pid`='men2s5' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo $row['pname'];					
							}				
						?>
					</p>
					
					<p style="font-weight:bold">
						<?php
							$query = "SELECT `price` FROM `product` WHERE `pid`='men2s5' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
										echo '&#8377;'.$row['price'];			
							}				
						?>
					</p>

					<p><a href="genericpage.php?oid=<?php echo 'men2s5'?>"  class="btn btn-success" role="button">Quick View</a></p>	 
				</div>
			</div>


			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<div class="thumbnail">

					<?php
						$query = "SELECT `simg` FROM `product` WHERE `pid`='men2s6' ";
						if($run_query=mysql_query($query))
						{
							while($row = mysql_fetch_assoc($run_query))
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';					
						}				
					?>
					
					<p class="dress_name"> 
						<?php
							$query = "SELECT `pname` FROM `product` WHERE `pid`='men2s6' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo $row['pname'];					
							}				
						?>
					</p>
					
					<p style="font-weight:bold">
						<?php
							$query = "SELECT `price` FROM `product` WHERE `pid`='men2s6' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo '&#8377;'.$row['price'];								
							}				
						?>
					</p>
					<p><a href="genericpage.php?oid=<?php echo 'men2s6'?>"  class="btn btn-success" role="button">Quick View</a></p>	 
				</div>
			</div>



			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<div class="thumbnail">

					<?php
						$query = "SELECT `simg` FROM `product` WHERE `pid`='men2s7' ";
						if($run_query=mysql_query($query))
						{
							while($row = mysql_fetch_assoc($run_query))
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';					
						}				
					?>
					
					<p class="dress_name"> 
						<?php
							$query = "SELECT `pname` FROM `product` WHERE `pid`='men2s7' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
											echo $row['pname'];			
							}				
						?>
					</p>
					
					<p style="font-weight:bold">
						<?php
							$query = "SELECT `price` FROM `product` WHERE `pid`='men2s7' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo '&#8377;'.$row['price'];			
							}				
						?>
					</p>
					<p><a href="genericpage.php?oid=<?php echo 'men2s7'?>"  class="btn btn-success" role="button">Quick View</a></p>	 
				</div>
			</div>


			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<div class="thumbnail">

					<?php
						$query = "SELECT `simg` FROM `product` WHERE `pid`='men2s8' ";
						if($run_query=mysql_query($query))
						{
							while($row = mysql_fetch_assoc($run_query))
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';					
						}				
					?>
					
					<p class="dress_name"> 
						<?php
							$query = "SELECT `pname` FROM `product` WHERE `pid`='men2s8' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo $row['pname'];					
							}				
						?>
					</p>
					
					<p style="font-weight:bold">
						<?php
							$query = "SELECT `price` FROM `product` WHERE `pid`='men2s8' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo '&#8377;'.$row['price'];								
							}				
						?>
					</p>
					<p><a href="genericpage.php?oid=<?php echo 'men2s8'?>"  class="btn btn-success" role="button">Quick View</a></p>	 
				</div>
			</div>

		<div classs="clearfix visible-lg"></div>



			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<div class="thumbnail">

					<?php
						$query = "SELECT `simg` FROM `product` WHERE `pid`='men2s9' ";
						if($run_query=mysql_query($query))
						{
							while($row = mysql_fetch_assoc($run_query))
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';					
						}				
					?>
					
					<p class="dress_name"> 
						<?php
							$query = "SELECT `pname` FROM `product` WHERE `pid`='men2s9' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo $row['pname'];					
							}				
						?>
					</p>
					
					<p style="font-weight:bold">
						<?php
							$query = "SELECT `price` FROM `product` WHERE `pid`='men2s9' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo '&#8377;'.$row['price'];								
							}				
						?>
					</p>

					<p><a href="genericpage.php?oid=<?php echo 'men2s9'?>"  class="btn btn-success" role="button">Quick View</a></p>	 
				</div>
			</div>


			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<div class="thumbnail">

					<?php
						$query = "SELECT `simg` FROM `product` WHERE `pid`='men2s10' ";
						if($run_query=mysql_query($query))
						{
							while($row = mysql_fetch_assoc($run_query))
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';					
						}				
					?>
					
					<p class="dress_name"> 
						<?php
							$query = "SELECT `pname` FROM `product` WHERE `pid`='men2s10' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo $row['pname'];					
							}				
						?>
					</p>
					
					<p style="font-weight:bold">
						<?php
							$query = "SELECT `price` FROM `product` WHERE `pid`='men2s10' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo '&#8377;'.$row['price'];								
							}				
						?>
					</p>
					<p><a href="genericpage.php?oid=<?php echo 'men2s10'?>"  class="btn btn-success" role="button">Quick View</a></p>	 
				</div>
			</div>



			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<div class="thumbnail">

					<?php
						$query = "SELECT `simg` FROM `product` WHERE `pid`='men2s11' ";
						if($run_query=mysql_query($query))
						{
							while($row = mysql_fetch_assoc($run_query))
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';					
						}				
					?>
					
					<p class="dress_name"> 
						<?php
							$query = "SELECT `pname` FROM `product` WHERE `pid`='men2s11' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo $row['pname'];								
							}				
						?>
					</p>
					
					<p style="font-weight:bold">
						<?php
							$query = "SELECT `price` FROM `product` WHERE `pid`='men2s11' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo '&#8377;'.$row['price'];								
							}				
						?>
					</p>
					<p><a href="genericpage.php?oid=<?php echo 'men2s11'?>"  class="btn btn-success" role="button">Quick View</a></p>	 
				</div>
			</div>


			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<div class="thumbnail">

					<?php
						$query = "SELECT `simg` FROM `product` WHERE `pid`='men2s12' ";
						if($run_query=mysql_query($query))
						{
							while($row = mysql_fetch_assoc($run_query))
								echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['simg'] ).'"/>';					
						}				
					?>
					
					<p class="dress_name"> 
						<?php
							$query = "SELECT `pname` FROM `product` WHERE `pid`='men2s12' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo $row['pname'];								
							}				
						?>
					</p>
					
					<p style="font-weight:bold">
						<?php
							$query = "SELECT `price` FROM `product` WHERE `pid`='men2s12' ";				
							if($run_query=mysql_query($query))
							{
								while($row = mysql_fetch_assoc($run_query))
									echo '&#8377;'.$row['price'];								
							}				
						?>
					</p>
					<p><a href="genericpage.php?oid=<?php echo 'men2s12'?>"  class="btn btn-success" role="button">Quick View</a></p>	 
				</div>
			</div>

		</div> <!-- End of onlyscroll-->
	</body>
</html>