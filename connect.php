<html>
<body background="https://i.pinimg.com/564x/a3/f5/22/a3f5222598013eea25ee148376fd18b8.jpg"  style="background-repeat:no-repeat; background-size:100%100%" >
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{

$Name=$_POST['Name'];
$Profession=$_POST['Profession'];
$Address=$_POST['Address'];
$EmailAddress=$_POST['EmailAddress'];
$PhoneNumber=$_POST['PhoneNumber'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookexchange";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
die ("Connection failed: ". $conn->connect_error);
}

$sql ="INSERT INTO userinformation(Name,Profession,Address,EmailAddress,PhoneNumber)VALUES('$Name','$Profession','$Address','$EmailAddress','$PhoneNumber')";
if (mysqli_query($conn,$sql))
{
 
 echo '<script type="text/javascript">confirm("Your request is accepted")</script>';

} else {

 echo '<script type="text/javascript"> alert("Your request could not be accepted: ".mysqli_error ($conn)</script>';
 
}

mysqli_close($conn);

}
?>
</body>
</html>