<html>
<head>
<title>PHP MySQL Delete example</title>
</head>
<body>
<form method="post">
Enter Student Name : <input type="text" name="n"><br/>
<input type="submit" value="Delete" name="Submit1"> <br/>
</form>
</html>

<?php

$host = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "fy";

if(isset($_POST['Submit1']))
{ 
    $n=$_POST['n'];  //html rollno 
       
$con= new mysqli($host, $dbusername, $dbpass, $dbname); //Creating a connection

$sql = "delete from stud where sname='$n'";
if(mysqli_query($con,$sql))
{
    echo "record deleted";   
}

$query = "select * from stud where sname='$n'"; //Executing the multi query 
$res = mysqli_query($con, $query); //Retrieving the recordsaq
echo "<table border=1>";
      echo "<tr>";
       echo "<th>Sname</th>";
       echo "<th>email</th>";
       echo "<th>phonenumber</th>";
       echo "<th>hobby</th>";
       if($row=mysqli_fetch_array($res))
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
