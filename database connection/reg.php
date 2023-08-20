<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
       Name:<input type="text" name="nm">
       pass:<input type="password" name="ps">
        <input type="submit">
    </form>
</body>
</html>
<?php$host="localhost";
$user="root";
$pass="";
$dbname="demo";

if(isset($_POST['submit']))
{
    $name=$_POST['nm'];
    $password=$_POST['ps'];
$conn=new mysqli($host,$user,$pass,$dbname);
$sc="update fr set Name='$name' where Password='$password'";

if(mysqli_query($conn,$sc))
{
    echo "data updated";
}
else{
    echo "error";
}
}
mysqli_close()
?>
