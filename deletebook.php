<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['ID'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM bookinfo WHERE ID=$ID");

//redirecting to the display page (index.php in our case)
header("Location:indexbook.php");
?>

