<?php
include "connection.php";
$sql="SELECT * FROM shop";
if(mysqli_connect($connection,$sql)){

}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
?>
