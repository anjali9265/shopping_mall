<?php
include "connection.php";
$stype=$_POST['stype'];
$sname=$_POST['sname'];
$sql="SELECT * FROM `shop` WHERE `shoptype` LIKE '$stype' AND `shopname` LIKE '$sname'";
$result=mysqli_query($connection, $sql);
$row=mysqli_fetch_array($result);
echo "<link rel='stylesheet' href='assets/style.css'>
<form  ><br><br><br><center>


                                            <table border = '1'>
                                              <tr>
                                              <td>Shop Type</td>
                                              <td>".$row['shoptype']."</td>
                                              </tr>
                                              <tr>
                                              <td>Shop Name</td>
                                              <td>".$row['shopname']."</td>
                                              </tr>
                                              <tr>
                                              <td>Floor</td>
                                              <td>".$row['floor']."</td>
                                              </tr>
                                              <tr>
                                              <td>Details</td>
                                              <td>".$row['details']."</td>
                                              </tr>
                                              </table></center><br><br>

                                        </div>
                                         <br><br>";
                                         echo '<center>
<button ><a href="index.html"><i class="fa fa-paper-plane"></i> Back</a></button>
</center>';

?>
