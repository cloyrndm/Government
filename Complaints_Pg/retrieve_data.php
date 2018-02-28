
<html>
<head>
	<title>Display</title>
</head>
<body>
<table border=1 cellpadding=1 cellspacing=1>
	
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Comments</th>
</tr>

<?php
//create connection with sql database
//$con important to manipulate the database, $con -> connection parameter
$con = mysqli_connect('localhost','root','');

//select database, getdata=database name
if(!mysqli_select_db($con,'getdata'))
{
echo "Database not selected";
}
//select query
//data = table name
$sql = "SELECT * FROM data";

//execute query
$records = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($records)){
	echo "<tr>";
	echo "<td>".$row['complainantComplain']."</td>";
	echo "<td>".$row['Response']."</td>";
	// echo "<td>".$row['comments']."</td>";
}
?>

</table>
</body>
</html>