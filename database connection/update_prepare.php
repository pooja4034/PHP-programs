<html>
<head>
<title>PHP MySQL connection example</title>
</head>
<body>
<form method="post">
Enter Record ID : <input type="text" name="id"><br/>
Enter Record Phone no : <input type="text" name="pno"><br/>
<input type="submit" value="Update" name="Submit1"> <br/>
</form>
</html>

<?php
if(isset($_POST['Submit1']))
{ 
    $n=$_POST['id'];
    $pn=$_POST['pno'];
    
    $conn = new mysqli ("localhost", "root", "", "fy");
    if($conn->connect_errno!=0)
    {
       echo mysqli->connect_error;
       exit();
    }
$stmt=$conn->prepare("update stud set phonenumber=? where sno=?");
$stmt->bind_param('ii', $pn, $n);
$stmt->execute();
mysqli_close($conn); //Closing the connection
}
?>
