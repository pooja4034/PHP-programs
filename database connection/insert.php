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
        Date of Birth:<input type="date" name="dob"><br>
        Gender: 
        <input type="radio" name="gen" value="male">Male 
        <input type="radio" name="gen" value="female">Female <br>
        Select hobbies:
        <input type="checkbox" name="hob[]" value="reading">Reading 
              <input type="checkbox" name="hob[]" value="singing">Singinging 
             <input type="checkbox" name="hob[]" value="dancing">Dancing <br>
        
        Select Subject:
                   <select name = "subject[]" size = "4" multiple>
                     <option value = "Android">Android</option>
                     <option value = "Java">Java</option>
                     <option value = "C#">C#</option>
                     <option value = "Data Base">Data Base</option>
                     <option value = "Hadoop">Hadoop</option>
                     <option value = "VB script">VB script</option>
                  </select><br>
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
$checkbox1=$_POST['hob'];  
$xyz=implode(",",$checkbox1);

 $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
 $s="insert into stud(sname,email,phonenumber,hobby) values('$n','$e','$p','$xyz')";
 if(mysqli_query($conn,$s))
 {
    echo "record is inserted";
 }
 else
 echo "error";
 mysqli_close($conn);
 ?>
 
 
