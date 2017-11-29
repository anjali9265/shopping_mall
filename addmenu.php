<?php
include "connection.php";
if(isset($_POST["submit"])){
$item=$_POST['item'];
$price=$_POST['price'];
$sq="SELECT * FROM menu";
$result1=mysqli_query($connection, $sq);
$count=mysqli_num_rows($result1);
$count++;
$sql="INSERT INTO `menu` VALUES ('$count','$item','$price')";
if(mysqli_query($connection,$sql)){
echo "<script>
alert('Successfully added item!');
window.location.href='adminhome.html';
</script>";
}
else {
 echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

}
else {
  echo'
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">
  <link rel="stylesheet" href="assets/style.css">

  <div class="container contactform center">
  <h2 class="text-center  wowload fadeInUp">ADD MENU</h2>
    <div class="row wowload fadeInLeftBig">
      <form method="POST" action="addmenu.php">
        <div class="col-sm-6 col-sm-offset-3 col-xs-12">
          <input type="text" name="item" placeholder="Item Name" required="">
          <input type="text" name="price" placeholder="Price" required="">
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
