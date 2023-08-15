<html>
<head>
	<title>Online Book Exchange</title>
	</head>
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
<!-- <li>  
<a href="http://localhost/project/msg_to_user1.html"> |  Msg to Admin  |</a>  
</li>  -->
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
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM bookinfo ORDER BY ID DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>

<br><br><br><br>
<h2><b><u>BOOK MESSAGES</u></b><br>
<br><br>
<div style="float:left;">
<a href="http://localhost/project/add_book.html">+Add New Data</a><br/><br/>
 </div><br><br>
 <center>

	<table width='80%' border=1>

	<tr bgcolor='#CCCCCC'>
	<td>User Name</td>
		<td>Book Name</td>
		<td>Author</td>
		<td>Edition</td>
		<td>Type</td>
		<td>Language</td>
		<td>Requested book</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['uname']."</td>";
		echo "<td>".$res['bname']."</td>";
		echo "<td>".$res['author']."</td>";
		echo "<td>".$res['edition']."</td>";
		echo "<td>".$res['type']."</td>";
		echo "<td>".$res['language']."</td>";
		echo "<td>".$res['requestedbook']."</td>";		
		echo "<td><a href=\"deletebook.php?ID=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table></center>
</body>
</html>
