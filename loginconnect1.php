<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$Username=$_POST['user'];
$Password=$_POST['pass'];

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

$query ="INSERT INTO login(Username,Password)VALUES('$Username','$Password')";
if(mysqli_query($conn,$query))
{
 echo '<script type="text/javascript"> alert("Login successfully!!")</script>';
} 
else {
	echo '<script type="text/javascript"> alert("Book could not be added: ".mysqli_error($conn)</script>';
}
mysqli_close($conn);
}
?>