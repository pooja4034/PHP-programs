<html>
<head>
<title>PHP MySQL Read/Select example</title>
</head>
<body>
<form method="post">
Enter Student Number : <input type="text" name="id"><br/>
<input type="submit" value="SELECT" name="Submit1"> <br/>
</form>
</html>

<?php
if(isset($_POST['Submit1']))
{ 
    $n=$_POST['id'];

$con = mysqli_connect("localhost", "root"," ", "fy"); //Creating a connection

$query = "select * from stud"; //Executing the multi query 

$res = mysqli_query($con, $query); //Retrieving the records

echo "<table border=1>";
      echo "<tr>";
       echo "<th>Sno</th>";
       echo "<th>Sname</th>";
       echo "<th>email</th>";
       echo "<th>phonenumber</th>";

while($row=mysqli_fetch_array($res))
   {   
       echo "</tr>";
       echo "<tr>";
       echo "<td>$row[0]</td>";
       echo "<td>$row[1]</td>";
       echo "<td>$row[2]</td>";
       echo "<td>$row[3]</td>";
       echo "</tr>";       
   }   
   echo "</table>";
    mysqli_close($con); //Closing the connection
}
?>






