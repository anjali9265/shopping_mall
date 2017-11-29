<?php
include "connection.php";
$name=$_POST["name"];
$uname=$_POST["uname"];
$mail=$_POST["mail"];
$pass=$_POST["pass"];
$cpass=$_POST["cpass"];
$sq="SELECT * FROM customer";
$result1=mysqli_query($connection, $sq);
$count=mysqli_num_rows($result1);

if($cpass==$pass)
{
$count++;
$sql="INSERT INTO `customer` VALUES ('$count','$name','$mail','$uname','$pass')";
if(mysqli_query($connection,$sql)){
echo "<script>
alert('Successfully registered!');
window.location.href='menu.php';
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
