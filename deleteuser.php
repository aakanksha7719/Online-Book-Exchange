<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id1 = $_GET['id1'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM userinformation WHERE id1=$id1");

//redirecting to the display page (index.php in our case)
header("Location:indexuser.php");
?>
