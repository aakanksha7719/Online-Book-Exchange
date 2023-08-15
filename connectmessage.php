<html>

<body background="https://i.pinimg.com/564x/a3/f5/22/a3f5222598013eea25ee148376fd18b8.jpg"  style="background-repeat:no-repeat; background-size:100%100%" >
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{

$name=$_POST['bookname'];
$msg=$_POST['review'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookexchange";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(!$conn)
{
die ("Connection failed: ". $conn->connect_error);
}

$query ="INSERT INTO message(name,msg)VALUES('$name','$msg')";
if(mysqli_query($conn,$query))
{
 echo '<script type="text/javascript"> alert("Message send successfully!!")</script>';
} 
else {
	echo '<script type="text/javascript"> alert("Message could not be send: ".mysqli_error($conn)</script>';
}
mysqli_close($conn);
}
?>
</body>
</html>