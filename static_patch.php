  <?php

  include 'connect.php';

$httpreferer3 = $_SERVER['HTTP_REFERER'];

 if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['mob']) && isset($_POST['address']) && isset($_POST['imgname']) )
    {
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
              $query2 = "INSERT INTO `customer`(`fname`,`lname`,`email`,`password`,`mobile`,`address`,`imgname`) VALUES('$fname', '$lname' ,'$email' , '$password' ,'$mob' , '$address' , '$imgname')";
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
                     echo '<script type="text/javascript">alert("Signed up successfully!!");window.location="'.$httpreferer3.'";</script>';
      
                           }
                      }			
                }
                else
                {
                     echo '<script type="text/javascript">alert("Sorry,some error has occurred"); window.location="'.$httpreferer3.'";</script>';
                }
          }
        }
    }
}
                 
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="icon.png">
      <link rel="stylesheet" href="bootstrap.css">
      <link rel="stylesheet" type="text/css" href="signup.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
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

      </style>


    </head>
    <body>
      <div class="static_patch col-lg-12">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" style="color:#FFFFFF;size: 18px" href="index.php">TryBuy</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar" >
            <ul class="nav navbar-nav">

              <li class="dropdown" style="padding-left: 52px;margin-left: 50px">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #FFFFFF; background-color: #e40046;width: 200px;text-align: center; font-size: 18px">WOMEN <span class="caret"></span></a>
                <ul class="dropdown-menu" style="color: #FFFFFF ;background-color: #FFFFFF;margin-left: 35px">
                  <li><a href="grid_tops.php">TOPS</a></li>
                  <li><a href="grid_kurti.php">KURTIS</a></li>
                  <li><a href="grid_womenbtm.php">JEANS & PALAZZOS</a></li>
                </ul>
              </li>

              <li class="dropdown" style="margin-left: 60px;padding-left: 70px">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #FFFFFF ;background-color: #e40046;width: 200px;text-align: center; font-size: 18px">MEN<span class="caret"></span></a>
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
            <div class="modal-content" style="height:300px;width:500px;">
              <span class="close" style="font-family:BOLD">~x</span>
              <form action="loginolduser.php" method="POST">
                <table width="200px" height="200px">
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
                      <button type="submit" class="sign" style="font-size:20px">LOGIN</button>
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

              <form action="static_patch.php" method="POST">

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
                      <input type="text" name="mob"
                      placeholder="  Mobile" class="box" size="30px" style="font-size:20px;padding:5px" required>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <input type="text" name="address" class="box" placeholder="  Address" width="150px" size="30px" style="font-size:20px;padding:5px" required>
                    </td>
                  </tr>
                  <tr>


                  <tr>
                    <td>
                      <input type="text" name="imgname" placeholder="  Your image name" class="box"  width="150px" size="30px" style="font-size:20px;padding:5px" required>
                    </td>
                  </tr>
                
                  <tr>
                    <td>
                       <button type="submit" class="sign" style="font-size:20px;padding:5px">SIGN UP</button>
                    </td>
                  </tr>


                </table>
              </form>

            </div>

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
</body>
</html>