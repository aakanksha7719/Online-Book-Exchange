<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
		$uname = mysqli_real_escape_string($mysqli, $_POST['uname']);
	$bname = mysqli_real_escape_string($mysqli, $_POST['bname']);
	$author = mysqli_real_escape_string($mysqli, $_POST['author']);
	$edition = mysqli_real_escape_string($mysqli, $_POST['edition']);
	$type = mysqli_real_escape_string($mysqli, $_POST['type']);
	$language = mysqli_real_escape_string($mysqli, $_POST['language']);	
	$requestedbook = mysqli_real_escape_string($mysqli, $_POST['requestedbook']);
	// checking empty fields
	if(empty($uname) ||empty($bname) || empty($author) || empty($edition) || empty($type) || empty($language) || empty($requestedbook)) {	
		
			if(empty($uname)) {
			echo "<font color='red'>User Name field is empty.</font><br/>";
		}
		
		if(empty($bname)) {
			echo "<font color='red'>Book Name field is empty.</font><br/>";
		}
		
		if(empty($author)) {
			echo "<font color='red'>Author field is empty.</font><br/>";
		}
		
		if(empty($edition)) {
			echo "<font color='red'>Edition field is empty.</font><br/>";
		}		
		if(empty($type)) {
			echo "<font color='red'>Type field is empty.</font><br/>";
		}
		
		if(empty($language)) {
			echo "<font color='red'>Language field is empty.</font><br/>";
		}
		
		if(empty($requestedbook)) {
			echo "<font color='red'>Requested book field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE bookinfo SET uname='$uname',bname='$bname',author='$author',edition='$edition',type='$type',language='$language',requestedbook='$requestedbook' WHERE ID=$ID");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: indexbook.php");
	}
}
?>
<?php
//getting id from url
$ID = $_GET['ID'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM bookinfo WHERE ID=$ID");

while($res = mysqli_fetch_array($result))
{
	$uname = $res['uname'];
	$bname = $res['bname'];
	$author = $res['author'];
	$edition = $res['edition'];
	$type = $res['type'];
	$language = $res['language'];
	$requestedbook = $res['requestedbook'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="indexbook.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editbook.php">
		<table border="0">
		
			<tr> 
				<td>User Name</td>
				<td><input type="text" name="uname" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Book Name</td>
				<td><input type="text" name="bname" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Author</td>
				<td><input type="text" name="author" value="<?php echo $author;?>"></td>
			</tr>
			<tr> 
				<td>Edition</td>
				<td><input type="text" name="edition" value="<?php echo $edition;?>"></td>
			</tr>
			<tr> 
				<td>Type</td>
				<td><input type="text" name="type" value="<?php echo $type;?>"></td>
			</tr>
			value<tr> 
				<td>Language</td>
				<td><input type="text" name="language" value="<?php echo $language;?>"></td>
			</tr>
			<tr> 
				<td>Requested Book</td>
				<td><input type="text" name="requestedbook" value="<?php echo $requestedbook;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="ID" value=<?php echo $_GET['ID'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
