<?php
include "connection.php";
$sql="SELECT * FROM `shop`";
$result1=mysqli_query($connection, $sql);
if($row=mysqli_fetch_array($result1))
 {
echo "<link rel='stylesheet' href='assets/style.css'>
<form  ><br><br><br><center>


                                            <table border = '1'>
                                              <tr>
                                              <th>Id</th>
                                              <th>Name</th>
                                              <th>Age</th>
                                              <th>Date of Birth</th>
                                              <th>Gender</th>
                                              <th colspan='3' ><center>Address</center></th>
                                              <th>Shop Type</th>
                                              <th>Shop Name</th>
                                              <th>Floor</th>
                                              <th>Details</th>
                                              <th>License date</th>
                                              <th>Expiry Date</th>
                                              <th>Contact</th>
                                               </tr>
                                               <tr>
                                               <td>".$row['id']."</td>
                                               <td>".$row['name']."</td>
                                              <td>".$row['age']."</td>
                                              <td>".$row['dob']."<br><br>
                                              <td>".$row['gender']."</td>
                                              <td colspan='3' rowspan='2'>".$row['address']."</td>
                                              <td>".$row['shoptype']."</td>
                                              <td>".$row['shopname']."</td>
                                              <td>".$row['floor']."</td>
                                              <td>".$row['details']."</td>
                                              <td>".$row['lstrtdate']."</td>
                                              <td>".$row['lexpdate']."</td>
                                              <td>".$row['contact']."</td>
                                              </tr>
                                            </table></center><br><br>

                                        </div>
                                         <br><br>";
                                         echo '<center>
<button ><a href="adminhome.html"><i class="fa fa-paper-plane"></i> Back</a></button>
</center>';
}
                                     else {
                                      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                                     }
?>
