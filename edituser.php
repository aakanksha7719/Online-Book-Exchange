<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['updateuser']))
{	

	$id1 = mysqli_real_escape_string($mysqli, $_POST['id1']);
	
	$Name = mysqli_real_escape_string($mysqli, $_POST['Name']);
	$Profession = mysqli_real_escape_string($mysqli, $_POST['Profession']);
	$Address = mysqli_real_escape_string($mysqli, $_POST['Address']);	
	$EmailAddress = mysqli_real_escape_string($mysqli, $_POST['EmailAddress']);
	$PhoneNumber = mysqli_real_escape_string($mysqli, $_POST['PhoneNumber']);	
	// checking empty fields
	if(empty($Name) || empty($Profession) || empty($Address) || empty($EmailAddress) || empty($PhoneNumber)) {	
			
		if(empty($Name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($Profession)) {
			echo "<font color='red'>Profession field is empty.</font><br/>";
		}
		
		if(empty($Address)) {
			echo "<font color='red'>Address field is empty.</font><br/>";
		}	
if(empty($EmailAddress)) {
			echo "<font color='red'>EmailAddress field is empty.</font><br/>";
		}
		
		if(empty($PhoneNumber)) {
			echo "<font color='red'>PhoneNumber field is empty.</font><br/>";
		}			
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE userinformation SET Name='$Name',Profession='$Profession',Address='$Address',EmailAddress='$EmailAddress',PhoneNumber='$PhoneNumber' WHERE '$id1'=$id1");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: indexuser.php");
	}
}
?>
<?php
//getting id from url
$id1 = $_GET['id1'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM userinformation WHERE id1=$id1");



while($res = mysqli_fetch_array($result,MYSQLI_BOTH))
{
	$Name = $res['Name'];
	$Profession = $res['Profession'];
	$Address = $res['Address'];
	$EmailAddress = $res['EmailAddress'];
	$PhoneNumber = $res['PhoneNumber'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="indexuser.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edituser.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="Name" value="<?php echo $Name;?>"></td>
			</tr>
			<tr> 
				<td>Profession</td>
				<td><input type="text" name="Profession" value="<?php echo $Profession;?>"></td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="Address" value="<?php echo $Address;?>"></td>
			</tr>
			<tr> 
				<td>EmailAddress</td>
				<td><input type="text" name="EmailAddress" value="<?php echo $EmailAddress;?>"></td>
			</tr>
			<tr> 
				<td>PhoneNumber</td>
				<td><input type="text" name="PhoneNumber" value="<?php echo $PhoneNumber;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id1" value=<?php echo $_GET['id1'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>