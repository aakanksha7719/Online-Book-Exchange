<html>

<body background="https://i.pinimg.com/564x/a3/f5/22/a3f5222598013eea25ee148376fd18b8.jpg"  style="background-repeat:no-repeat; background-size:100%100%" >
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$uname=$_POST['username'];
$bname=$_POST['bookname'];
$author=$_POST['author'];
$edition=$_POST['bookedition'];
$type=$_POST['booktype'];
$language=$_POST['booklang'];
$requestedbook=$_POST['requestedbook'];


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

$query ="INSERT INTO bookinfo(uname,bname,author,edition,type,language,requestedbook)VALUES('$uname','$bname','$author','$edition','$type','$language','$requestedbook')";
if(mysqli_query($conn,$query))
{
 echo '<script type="text/javascript"> confirm("Book added successfully!!")</script>';
 header("add_book.html");
} 
else {
	echo '<script type="text/javascript"> alert("Book could not be added: ".mysqli_error($conn)</script>';
}
mysqli_close($conn);
}
?>
</body>
</html>