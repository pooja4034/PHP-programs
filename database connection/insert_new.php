<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Form</title>
<style>
input,textarea
{
    width:200px
}
input[type=radio],input[type=checkbox]
{
    width:10px
}
input[type=submit],input[type=reset]
{
    width:100px
}
</style>
</head>

<body>
<form method="post" action="insert_new.php" enctype="multipart/form-data">
<h1> Student Registration</h1>
<table width="393" border="1">

  <tr>
    <td width="159">Enter your Name</td>
    <td width="218">
	<input type="text" placeholder="your first name"  name="n" pattern="[a-z A-Z]*" required /></td>
  </tr>
  <tr>
    <td>Enter your Email</td>
    <td><input type="email" name="e"/></td>
  </tr>
  <tr>
    <td>Enter your Password</td>
    <td><input type="password" name="p"/></td>
  </tr>
  <tr>
    <td>Enter your Address</td>
    <td><textarea name="add"></textarea></td>
  </tr>
  <tr>
    <td>Enter your Mobile</td>
    <td><input type="text" pattern="[0-9]*" name="m" /></td>
  </tr>
  <tr>
    <td height="23">Select your Gender</td>
    <td>
	Male<input type="radio" name="g" value="male"/>
	Female<input type="radio" name="g" value="female"/>
	</td>
  </tr>
  <tr>
    <td>Choose your Hobbies</td>
    <td>
		Cricket<input type="checkbox" value="cricket" name="hobb[]"/>
		Singing<input type="checkbox" value="singing" name="hobb[]"/>
		Dancing<input type="checkbox" value="dancing" name="hobb[]"/>
	</td>
  </tr>
  <tr>
    <td>Choose your Profile Pic </td>
    <td><input type="file" name="myfile"> </td>
  </tr>
  
  <tr>
    <td>Select your DOB</td>
    <td>
		<input type="date" name="dob">
	</td>
  </tr>
  <tr>
    <td>Select Subject:</td>
    <td>
    <select name = "subject[]" size = "4" multiple>
                     <option value = "Android">Android</option>
                     <option value = "Java">Java</option>
                     <option value = "C#">C#</option>
                     <option value = "Data Base">Data Base</option>
                     <option value = "Hadoop">Hadoop</option>
                     <option value = "VB script">VB script</option>
                  </select>
	</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <button type="submit" name="save" value="Register Me">Register Me</button>
	<input type="reset" value="Reset"/>
	</td>
  </tr>
</table>
</form>
</body>
</html>

<?php


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "fy";
 // Create connection 
 
    $n=$_POST['n'];  //name
    $e=$_POST['e'];  //email
    $p=$_POST['p'];   //password
    $ad=$_POST['add'];  //address
    $m=$_POST['m']; //mobile
    $g=$_POST['g']; //gender
    
    $h=$_POST['hobb'];  //hobbies
    $hob=implode(",",$h);

    $img=$_FILES["myfile"]["name"];
    echo "<img src=".$img." height=200 width=300 />";

    $dob=$_POST['dob'];

    $s=$_POST['subject'];  //subjects
    $sub=implode(",",$s);
    
    //echo "$n<br>$e<br>$p<br>$ad<br>$m<br>$g<br>$hob<br>$r<br>$dob<br>$sub";


 $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$query="insert into stud values(' ','$n','$e','$p','$ad','$m','$g','$hob','$img','$dob','$sub',now())";
if(mysqli_query($conn,$query))
{
    $msg= "<font color='blue'>Record is Inserted</font>";

}

mysqli_close($conn);
header("location:display_new.php");

 ?>
