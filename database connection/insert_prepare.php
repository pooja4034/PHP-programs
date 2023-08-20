<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Enter name:<input type="text" name="n"><br>
        Enter email:<input type="email" name="e"><br>
        Enter phone number:<input type="text" name="p"><br>
        <input type="submit">
</form>
</body>
</html>

<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "fy";
 // Create connection 
$n=$_POST['n'];
$e=$_POST['e'];
$p=$_POST['p'];

 $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
 if($conn->connect_errno!=0)
 {
    echo mysqli->connect_error;
    exit();
 }
 $SQL=$conn->prepare("insert into stud(sname,email,phonenumber) values(?,?,?)");
 $SQL->bind_param('sss', $n, $e, $p);
 $SQL->execute();
  
 mysqli_close($conn);
 ?>
 
 
