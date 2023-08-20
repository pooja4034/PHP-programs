<html>
<head>
<title>PHP MySQL connection example</title>
</head>
<body>
<form method="post">
Enter Record ID : <input type="text" name="id"><br/>
<input type="submit" value="Display" name="Submit1"> <br/>
</form>
</html>

<?php
if(isset($_POST['Submit1']))
{ 
    $n=$_POST['id'];
        
    $conn = new mysqli ("localhost", "root", "", "fy");
    if($conn->connect_errno!=0)
    {
       echo mysqli->connect_error;
       exit();
    }

$sql = $conn->prepare("SELECT * FROM stud WHERE sno=?");
	$sql->bind_param("i",$n);			
	$sql->execute();
	$result = $sql->get_result();

	if ($result->num_rows > 0) {		
		$row = $result->fetch_assoc();
        echo $row['sname'];
	}
mysqli_close($conn); //Closing the connection
}
?>
