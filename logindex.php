<!doctype html>
<head>
<title>Online Book Exchange</title>
</head>
<body background="https://hitfigure.com/wp-content/uploads/2012/03/login-background.jpg"  style="background-repeat:no-repeat; background-size:100%200%" >

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bookexchange";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['Login'])){
$user=$_POST['user'];
$pass = $_POST['pass'];
$usertype=$_POST['usertype'];
$query = "SELECT * FROM `multiuserlogin` WHERE username='".$user."' and password = '".$pass."' and usertype='".$usertype."'";
$result = mysqli_query($conn, $query);
if($result){
while($row=mysqli_fetch_array($result)){
echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['usertype'].'")</script>';

}
if($usertype=="admin"and$pass=="admin")
{
	
	
?>
<script type="text/javascript">
window.location.href="welcome1.html"</script>
<?php

}else{
?>
<script type="text/javascript">
window.location.href="welcome.html"</script>
<?php

}
}else{
echo 'no result';
}
}

?>
<html>
<head>
<meta charset="utf-8">
<title>Online Book Exchange</title>
</head>

<body>
<br><br><br><br><br><br>
<center><font size='6' face='georgia' color='black'>
<form method="post" >
<b>LOGIN HERE</b>
</font><br>
<br>
<br>
<font size='5' face='georgia' color='black'>
<table cellpadding="6" cellspacing="9" style="border:gray; border-width:4px; border-style:groove;">
<tr>
<td>Username:<input type="password" name="user" placeholder="enter your username"</td>
</tr>
<tr>
<td>Password:<input type="password" name="pass" placeholder="enter your password"</td>
</tr>
<tr>
<td>
Select user type: <select name="usertype">
<option value="admin">admin</option>
<option value="user">user</option>
</select>
</td>
</tr>
<tr>
<td><center><input type="submit" name="Login" value="Login" style="width:100px; height:30px; background-color:navy; color:silver;"><center></td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
</table></font></center>
</form>
</body>
</html>