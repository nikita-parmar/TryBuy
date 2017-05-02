<?php
    include 'connect.php';
  

  if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['mob']) && isset($_POST['address']) && isset($_POST['imgname']) )
{
$httpreferer2 = $_SERVER['HTTP_REFERER'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email']; 
    $password = $_POST['password'];
    $mob = $_POST['mob'];
    $address = $_POST['address'];
  $imgname = $_POST['imgname'];


    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($mob) && !empty($address) && !empty($imgname)) 
    { 
        $query1 = "SELECT `fname` FROM  `customer` WHERE `email`='$email'";
        if($query_run = mysql_query($query1))
        {
          if(mysql_num_rows($query_run) == 1)
            echo '<script type="text/javascript">alert("This email id is already registered");</script>';
          else if(mysql_num_rows($query_run) == 0)
          {
              $query2 = "INSERT INTO `customer`(`fname`,`lname`,`email`,`password`,`mobile`,`address`,`imgname`) VALUES('$fname', '$lname' ,'$email' , '$password' ,'$mob','$address', '$imgname')";
                if($query_run = mysql_query($query2))
                {                   
                      $query3 = "SELECT `customer_id` FROM `customer` WHERE `email`='$email' ";
                      if($query_run = mysql_query($query3))
                      {         
                           if(mysql_num_rows($query_run) == 1)
                           {
          	                 session_start();
			         $cid = mysql_result($query_run, 0 ,'customer_id');
		                 $_SESSION['customer_id'] = $cid;


              echo '<script type="text/javascript">alert("Signed up successfully!!");window.location="'.$httpreferer2.'";</script>';          
            }
                      }			
                }
                else
                {
                     echo '<script type="text/javascript">alert("Sorry, some error has occurred"); window.location="'.$httpreferer2.'";</script>';
                }
          }
        }
    }
  }
?>

<html>
  <head>
    <title>Personalized E-shopping</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="icon.png">    
      <link rel="stylesheet" href="bootstrap.css">
      <link rel="stylesheet" href="glyphicon.css">
      
       <link rel="stylesheet" type="text/css" href="signup.css">
  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
       <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 40%;
      margin: auto;
  }

    .sign{
      text-align: center;
      height: 40px;
      width: 260px;
      font-family: "consolas";
      color: white;
      background-color: #e40046;
    }
    .box{
      font-family: "Helvetica Neue";
      border-color: #e40046;
      font-size: 15px;
      border-radius: 6px;
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .carousel_ads{
     width:100%;
     display:inline-block;
     position:relative;
     }

     .ads{
        width:32%;
        margin-top:-20px;
        padding-left:40px;
        padding-top:40px;
        text-align:right;
      }
  </style>

  </head>

  <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color:#FFFFFF;size: 18px">TryBuy</a>
    </div>
     <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">
        
        <li class="dropdown" style="padding-left: 52px;margin-left: 50px">
          <a class="dropdown-toggle" href="#"  data-toggle="dropdown" style="color: #FFFFFF; background-color: #e40046;width: 200px;text-align: center; font-size: 18px">WOMEN <span class="caret"></span></a>
          <ul class="dropdown-menu" style="color: #FFFFFF ;background-color: #FFFFFF;margin-left: 35px">
            <li><a href="grid_tops.php">TOPS</a></li>
            <li><a href="grid_kurti.php">KURTIS</a></li>
            <li><a href="grid_womenbtm.php">JEANS & PALAZZOS</a></li>
          </ul>
        </li>

        <li class="dropdown" style="margin-left: 60px;padding-left: 70px">
          <a class="dropdown-toggle" href="#" data-toggle="dropdown" style="color: #FFFFFF ;background-color: #e40046;width: 200px;text-align: center; font-size: 18px">MEN<span class="caret"></span></a>
          <ul class="dropdown-menu" style="color: #FFFFFF ;background-color: #FFFFFF;margin-left: 30px" >
            <li><a href="grid_tshirt.php">T-SHIRT</a></li>
            <li><a href="grid_shirt.php">SHIRT</a></li>
            <li><a href="grid_jeanst.php">JEANS & TROUSERS</a></li>
          </ul>

        </li>
        
        </ul>
  <ul>
      <!--Top sign in part-->
      <div class="signin">
            <ul class="list-inline" style="text-align:right;">
           <li><button" onclick="location.href='cartpage1.php';" style="color: #fff;font-size: 18px; background-color:#e40046 ;border-color: #e40046 ;border: none;cursor:pointer"/>My Cart</li>
           <li><button id="myBtn" style="color: #fff;font-size: 18px; background-color:#e40046 ;border-color: #e40046 ;border: none;">Sign in</button></li>
           <li><button id="myBtn1" style="color: #fff;font-size: 18px; background-color:#e40046 ;border-color: #e40046 ;border: none;">Sign up</button></li>
            </ul>
        </div>

      </ul>

      
</nav>
  
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content"  style="height:300px;width:500px;">
    <span class="close" style="font-family:BOLD">~x</span>

<form action="loginolduser.php" method="POST">

  <table width="200px" height="280px">
  <tr>
  <td>
    <input type="text" name="email" class="box" placeholder="  Email-id" width="30px" size="30px" style="font-size:18px" required>
  </td>
  </tr>
  <tr>
    <td>
      <input type="password" name="password" class="box" placeholder="  Password" width="30px" size="30px" style="font-size:18px" required>
    </td>
  </tr>
  <tr>
  <td>
    <button type="submit" class="sign" >LOGIN</button>
    </td>
  </tr>

</table>
</form>
</div>
</div>


<!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="height:550px;width:500px;font-size:16px">
    <span class="close">~x</span>
  <form action="index.php" method="POST">
  <table width="200px" height="500px">
    <tr>
      <td>
        <input type="text" name="fname" class="box" placeholder="  First Name" width="50px" size="30px" style="font-size:20px;padding:5px" required>
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" name="lname" class="box" placeholder="  Last Name" width="50px" size="30px" style="font-size:20px;padding:5px" required>
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" name="email" class="box" placeholder="  Email" width="100px" size="30px" style="font-size:20px;padding:5px" required>
      </td>
    </tr>
    <tr>
      <td>
        <input type="password" name="password" class="box" placeholder="  Password" size="30px" style="font-size:20px;padding:5px" required>
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" name="mob" placeholder="  Mobile" class="box" size="30px" style="font-size:20px;padding:5px" required>
      </td>
    </tr>       
   
     <tr>
        <td>
          <input type="text" name="address" class="box" placeholder="  Address" width="150px" size="30px" style="font-size:20px;padding:5px" required>
        </td>
    </tr>


     <tr>
        <td>
          <input type="text" name="imgname" class="box" placeholder="  Your image name" width="150px" size="30px" style="font-size:20px;padding:5px" required>
        </td>
    </tr>
       
    <tr>
    <td><button type="submit" class="sign" >SIGN UP</button>
    </td>
  </tr>

  </table>
</form>

  </div>

</div>


<script type="text/javascript">
  var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



// Get the modal
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1= document.getElementsByClassName("close")[1];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>


<div class="container onlyscroll" style="width:100%;margin-left:20px;">

<div class="carousel_ads">

 
  <div id="myCarousel" class="carousel slide col-lg-8" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <a href="genericpage.php?oid=<?php echo 'women1s4'?>">
        <?php
          $id="women1s4";
          $query = "SELECT `bimg` FROM `product` WHERE `pid`='$id' ";
          if($run_query=mysql_query($query))
          {
            while($row = mysql_fetch_assoc($run_query))
              echo '<img alt="img1" src="data:image/jpeg;base64,'.base64_encode( $row['bimg'] ).'"/>';     
          }       
        ?>
       </a>
      </div>

      <div class="item">
        <a href="genericpage.php?oid=<?php echo 'men2s9'?>">
        <?php
          $id="men2s9";
          $query = "SELECT `bimg` FROM `product` WHERE `pid`='$id' ";
          if($run_query=mysql_query($query))
          {
            while($row = mysql_fetch_assoc($run_query))
              echo '<img alt="img1" src="data:image/jpeg;base64,'.base64_encode( $row['bimg'] ).'"/>';     
          }       
        ?>
       </a>
      </div>
   
      <div class="item">
        <a href="genericpage.php?oid=<?php echo 'women2s7'?>">
        <?php
          $id="women2s7";
          $query = "SELECT `bimg` FROM `product` WHERE `pid`='$id' ";
          if($run_query=mysql_query($query))
          {
            while($row = mysql_fetch_assoc($run_query))
              echo '<img alt="img1" src="data:image/jpeg;base64,'.base64_encode( $row['bimg'] ).'"/>';     
          }       
        ?>
       </a>
      </div>

   <div class="item">
      <a href="genericpage.php?oid=<?php echo 'men1s1'?>">
      <?php
        $id="men1s1";
        $query = "SELECT `bimg` FROM `product` WHERE `pid`='$id' ";
        if($run_query=mysql_query($query))
        {
          while($row = mysql_fetch_assoc($run_query))
            echo '<img alt="img1" src="data:image/jpeg;base64,'.base64_encode( $row['bimg'] ).'"/>';     
        }       
      ?>
     </a>
    </div>
  </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <p><img src="chevron_left.jpg" style="margin-top:200px;">
            <span class="sr-only">Previous</span></p>
    </a>

    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <p><img src="chevron_right.jpg" style="margin-top:200px;">
             <span class="sr-only">Next</span></p>
    </a>
    
</div>

 <div class="ads col-lg-4">
     <img src="img1.jpg" alt="img1" width="400px" height="350px">
  </div>
 
</div>

<p style="font-family:bold; margin-top:40px; margin-bottom:25px; color:#e40046;font-size:24px">USER IMAGES BEFORE AND AFTER PERSONALIZAION:</p>
<!-- FLIP IMAGES -->
  
    <div class="row">
      <div class="col-sm-4" style="border: 1px solid black">
        <div style="margin-top:20px;">
     <a href="genericpage.php?oid=<?php echo 'women2s4'?>">
           
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <!-- front content -->
                <img src="k2.jpg" alt="image1">
              </div>
              <div class="back">
                <!-- back content -->
                <img src="kk2.jpg" alt="image2">        
              </div>
            </div>
          </div>
        </a>
        </div>
      </div>

      <div class="col-sm-4" style="border: 1px solid black">
        <div style="margin-top:20px;">
     <a href="genericpage.php?oid=<?php echo 'men2s1'?>">
    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <!-- front content -->
                <img src="shirt1.png" alt="image1">
              </div>
              
              <div class="back">
                <!-- back content -->
                <img src="kk4.jpg" alt="image2">

              </div>
            </div>
          </div>
</a>
        </div>
      </div>
      


      <div class="col-sm-4" style="border: 1px solid black">
        <div style="margin-top:20px;">
     <a href="genericpage.php?oid=<?php echo 'women1s2'?>">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <!-- front content -->
                <img src="k3.jpg" alt="Flower">
              </div>
              
              <div class="back">
                <!-- back content -->
                <img src="kk3.jpg" alt="Chania">
              </div>
            </div>
          </div>
</a>
        </div>
      </div>
      

      <div class="col-sm-4" style="border: 1px solid black">
       <div style="margin-top:20px;">
     <a href="genericpage.php?oid=<?php echo 'men1s3'?>">
     
     <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <!-- front content -->
                <img src="Tshirt1.png" alt="Flower">
              </div>
              <div class="back">
                <!-- back content -->
                <img src="kk5.jpg" alt="Chania">
              </div>
            </div>
          </div>
</a>
        </div>
      </div>

      </div>
    </div>
</div>

  </body>
</html>
