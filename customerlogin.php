<?php
include 'connection.php';
$uname=$_POST["uname"];
$pass=md5($_POST["pass"]);
$sql="SELECT * FROM `admin` WHERE `uname` LIKE '$u' AND `password` LIKE '$p'";
$result1=mysqli_query($connection, $sql);
if($result=mysqli_fetch_array($result1))
 { session_start();
  $_SESSION["login_user"]="$uname";
   echo "Successfull login";
  // header("Location:adminhome.php");
   }
 else {
  echo "Invalid username or password";
 }

?>
