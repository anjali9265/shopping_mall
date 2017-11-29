<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>GALAXY MALL</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="images/logo.png" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->

            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">

                 <li class="active"><a href="logout.php">Logout</a></li>

              </ul>
            </div>

            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<?php
echo"<body background='http://localhost/recipe_book/photos/bg.jpg'>";
include "connection.php";

$item=$_POST["checkbox"];
$count=0;
$total=0;
echo "<link rel='stylesheet' href='assets/style.css'>
<form  ><br><br><br><br><br><br><br><br><br><center>


                                           <table border = '1'>
                                             <tr>
                                             <th>Sl No:</th>
                                             <th>Item</th>
                                             <th>Price</th>
                                             </tr>
";
foreach ($item as $item1)
{
$sql="SELECT * FROM `menu` WHERE id='$item1'";
if($result1=mysqli_query($connection, $sql)) {
 foreach ($result1 as $r)
 {
  $total=$total+$r["price"];
  $count++;
echo"                                              <tr>
                                              <td>".$count."</td>
                                              <td>".$r['item']."</td>
                                              <td>".$r['price']."</td>
                                             </tr>";
                                           }

  }

  else {
  echo "Error: " . $qu . "<br>" . mysqli_error($connection);
}
}echo"
</table></center><br><br>

</div><center>
<table border = '1'>
  <tr>
  <th colspan='3'>Total : ".$total."</th>
  </tr></table><br>
  <button ><a href='index.html'>OK</a></button></center>";
?>
