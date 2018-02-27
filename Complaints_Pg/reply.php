<?php
//connect with mysql 
$con = mysqli_connect('localhost','root','');
//select database
mysqli_select_db($con,'divulgo');
//update query= update tablename set columnname=value
$sql =  "UPDATE divulgotable SET Response='$_POST[reply]' WHERE complaint_id='$_POST[idp]'";
//execute query
//$records = mysqli_query($con,$sql);
if(mysqli_query($con,$sql))
header("refresh:1; url=submit.php");
else
	echo "not updated";

?>