<?php


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "fy";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$query="select * from stud";
$res=mysqli_query($conn,$query);
echo "<h1>Student Records";
echo "<table border=1>";
echo "<tr><th>Student Name</th>
<th>Email</th>
<th>Address</th>
<th>Mobile Number</th>
<th>Profile Pic</th></tr>";
while($row=mysqli_fetch_assoc($res))
{

    $n=$row['sname'];  //name
    $e=$row['email'];  //email
    $ad=$row['addr'];  //address
    $m=$row['phonenumber']; //mobile
    $img=$row['profile']; //profile
    
    
    echo "<tr><td>$n</td>
        <td>$e</td>
        <td>$ad</td>
        <td>$m</td>
        <td><img src='$img' width=100 height=100/></td></tr>";

    
}
echo "</table>";
?>