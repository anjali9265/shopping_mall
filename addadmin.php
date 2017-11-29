<?php
include 'connection.php';
if(isset($_POST["submit"])){

$uname=$_POST['name'];
$pass1=$_POST['pass'];
$sq="SELECT * FROM admin";
$result1=mysqli_query($connection, $sq);
$count=mysqli_num_rows($result1);
$count++;
$q1="INSERT INTO `admin` (`id`,`uname`, `pass`) VALUES ('$count','$uname', '$pass1')";
if (mysqli_query($connection, $q1)) {
  echo "<SCRIPT>
    alert('New admin created!')
    window.location.href='adminhome.html';
    </SCRIPT>";
}
 else {
 echo "Error: " . $q1 . "<br>" . mysqli_error($connection);
}
}
else {
echo '
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">
<link rel="stylesheet" href="assets/style.css">

<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">ADD ADMIN</h2>
  <div class="row wowload fadeInLeftBig">
    <form method="POST" action="addadmin.php">
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
        <input type="text" name="name" placeholder="Username" required="">
        <input type="password" name="pass" placeholder="Password" required="">

        <input type="submit" name="submit" class="btn btn-primary">
        <br></br>
        <br></br>
        <br></br>


      </div>
    </form>
  </div>



</div>
';

}
?>
