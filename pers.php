
<?php
session_start();
$customer_id=$_SESSION['customer_id'];
include 'connect.php';
//echo 'here in php ';
$id=$_GET['id'];
    //$query1="SELECT `pid` FROM `product` WHERE `pname`='kurti1' ";
$filename1="";
$filename2="";

$query = "SELECT `pid` FROM `eshop`.`product` WHERE `pid`='$id' ";
           

    if($run_query = mysql_query($query))
    {

       // echo "fail";
      while($row = mysql_fetch_array($run_query))
      {
      //  echo $row['pid'];
        $f1 = $row['pid'];
        $filename1 ="'".$f1.".png'";
     //   echo $filename1;
      }

       }
       else
        echo "fail2";

$query = "SELECT `imgname` FROM `eshop`.`customer` WHERE `customer_id`='$customer_id' ";

    if($query_run=mysql_query($query))
    {
 //     echo 'hi';
  while($row=mysql_fetch_array($query_run))
      {
        //echo $row['customer_id'];
           $f2 = $row['imgname'];
        $filename2 ="'".$f2.".png'";
   //   echo $filename2;
      }
 }

       // echo "bye";
    $inputDir  = "C:\Program Files\MATLAB\R2013a\bin";
    $outputDir = "C:\Users\HP\Desktop\matlab";
    $command = "matlab -sd ".$inputDir." -r phpcreatefile(myfunct($filename1,$filename2))";
    exec($command);
    echo "Your personalized image will be displayed shortly!!";
 
?>
