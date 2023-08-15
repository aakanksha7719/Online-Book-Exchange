<html>
<head>
<body background="https://i.pinimg.com/564x/a3/f5/22/a3f5222598013eea25ee148376fd18b8.jpg"  style="background-repeat:no-repeat; background-size:100%200%" >
<style type=text/css> 
  
 
header {  

background-color: navy;  
position: fixed;  
left: 0;  
right: 0;  
top: 5px;  
height: 50px;  
display: flex;  
align-items: center;  
box-shadow: 0 0 25px 0 black;
 font-family: georgia;
 font-size:20px;
 
}  

header * {  
display: inline;  
}  
header li {  
margin: 20px;  
}  
header li a {  
color: silver;  
text-decoration: none; 

}
  
</style>   
</Head>  
<Body>   
<header> 
 <nav>  
<ul>  
<li>  
<a href="http://localhost/project/Home1.html"> |  Home  | </a>  
</li>  
<li>  
<a href="http://localhost/project/about_us1.html">|  About |</a>  
</li>  
<li>  
<a href="http://localhost/project/catalog1.html">|  Catalog  |</a>  
</li>  
<li> <a href="http://localhost/project/FAQ1.html"> | FAQ   |</a>  
</li>   
<li>  
<a href="http://localhost/project/msg_to_user1.html"> |  Msg to Admin  |</a>  
</li> 
<li>  
<a href="http://localhost/project/indexmsg.php"> | User Messages |</a>  
</li> 
<li>  
<a href="http://localhost/project/indexuser.php"> | User Information |</a>  
</li> 
<li>  
<a href="http://localhost/project/indexbook.php"> | Book Request |</a>  
</li> 
<li>  
<a href="http://localhost/project/logindex.php"> |  Logout  |</a>  
</li> 
</ul>  
</nav> 

</header>  

</style> 

<style type=text/css> 
  
body   
{  
height: 80vh;  
margin-top:20
padding: 40px;  
background-size: cover;  
font-family: georgia;  
}  

</style>  
<style type="text/css">	
body{
background-color:pink;
	
	}
.form{
	margin-top: 90px;
	margin-left: 470px;
	margin-right: 450px;
	line-height: 40px; 
	font-size: 25px;
	font-family: helvetica;
	/*border-style: groove;
	background-color: blue;
	background: transparent;

	outline-style: outset;
	outline-color: yellow;		
	border-width: medium;*/
	padding: 50px;


}

/* Form Text edited here */
#maintxt{
	text-align: center;
	font-family: Arial;
	margin-top: 1px;
	text-decoration: underline; 
}
#an
{
	text-align: left;
}
#bp
{
text-align: left;
}
#bn
{
text-align: left;
}
#bt
{
text-align: left;
}
#bl
{
text-align: left;
}
#bl1
{
text-align: left;
}
#bp1
{
text-align: left; 	
}
span{
	
	background-color: pink;
word-spacing: 5px;
padding-left: 100%;

	color: white;
	} 
</style> 
</Head>  


<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$msg = mysqli_real_escape_string($mysqli, $_POST['msg']);
	
	// checking empty fields
	if(empty($name) || empty($msg)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($msg)) {
			echo "<font color='red'>Message field is empty.</font><br/>";
		}
		
		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE message SET name='$name',msg='$msg' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: indexmsg.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM message WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$msg = $res['msg'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
<br><br><br><br><br>
	<br/><br/><center>
	<font size='7' face='georgia' color='black'>
	<form name="form1" method="post" action="editmsg.php">
		<table cellpadding="6" cellspacing="9" style="border:gray; border-width:4px; border-style:groove;">
			
			<tr><td></td></tr>
			<tr><center>
			<td>
			<font size='6' face='georgia' color='black'>Update details
			</font></td>
			</center></</tr>
			<tr><td></td></tr>
			<tr> 
				<td><font size='5' face='georgia' color='black'>Name</font></td>
				<td><font size='5' face='georgia' color='black'>
				<input type="text" name="name" value="<?php echo $name;?>"></font></td>
			</tr>
			<tr> 
				<td><font size='5' face='georgia' color='black'>Message</font></td>
				<td><font size='5' face='georgia' color='black'>
				<input type="text" name="msg" value="<?php echo $msg;?>"></font></td>
			</tr>
			<tr>
				<td><font size='5' face='georgia' color='black'>
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>></font></td>
				<td><font size='6' face='georgia' color='black'>
				<center><input type="submit" name="update" value="Update"
				style="width:170px; height:30px; background-color:navy; color:silver;"></center><font></td>
			</tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
		</table>
	</form>
	</font></center>
</body>
</html>
