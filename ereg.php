<?php
include "connection.php";
$name=$_POST["name"];
$age=$_POST["age"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$add=$_POST["add"];
$stype=$_POST["stype"];
$sname=$_POST["sname"];
$details=$_POST["details"];
$contact=$_POST["contact"];
$uname=$_POST["uname"];
$sdate=$_POST["sdate"];
$edate=$_POST["edate"];
$mail=$_POST["mail"];
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];
$sq="SELECT * FROM shop";
$result1=mysqli_query($connection, $sq);
$count=mysqli_num_rows($result1);

if($cpass==$pass)
{
$count++;
$sql="INSERT INTO `shop` VALUES ('$count','$name','$age','$dob','$gender','$add','$stype','$sname', '$details','$sdate','$edate','$contact','$uname','$pass')";
if(mysqli_query($connection,$sql)){
echo "<script>
alert('Successfully registered!');
window.location.href='index.html';
</script>";
}
else {
 echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
}
else {
  echo "<script>
  alert('Your passwords doesn't match!');
  </script>";
}
?>
