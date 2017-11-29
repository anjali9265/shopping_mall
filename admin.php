<?php
include 'connection.php';
$uname=$_POST["uname"];
$pass=$_POST["pass"];
//$pass=md5($_POST["pass"]);
$sql="SELECT * FROM `admin` WHERE `uname` LIKE '$uname' AND `pass` LIKE '$pass'";
$result1=mysqli_query($connection, $sql);
if($result=mysqli_fetch_array($result1))
 { 
   echo "Successfull login";
   header("Location:adminhome.html");
   }
 else {
  echo "Invalid username or password";
 }


?>
