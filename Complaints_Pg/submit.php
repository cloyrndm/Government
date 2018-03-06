<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Divulgo</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Divulgo</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<div id="sidebar">
<h1>Divulgo</h1>
<h2>Addressing Concerns, Tearing Down Predicaments</h2>

<div id="menu">
<a  href="index.html">About Us</a>
<a class="active" href="submit.php">Complaints</a> 
 
</div>
</div>


<table border=1 cellpadding=1 cellspacing=1  style="margin-left:240px;" width="30%">
	
<tr>
	
	<th>Name</th>
	<th>Email</th>
	<th>Complaint</th>
	<th>Reply</th>
</tr>

<?php
//create connection with sql database
//$con important to manipulate the database, $con -> connection parameter
$con = mysqli_connect('localhost','root','');

//select database, getdata=database name
if(!mysqli_select_db($con,'divulgo'))
{
echo "Database not selected";
}
//select query
//data = table name
$sql = "SELECT * FROM divulgotable";

//execute query
$records = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($records)){
	echo "<tr><form action =reply.php method = post>";
	echo "<input type=hidden name=idp value='".$row['complaint_id']."'>";
	echo "<td>".$row['complainantName']."</td>";
	echo "<td>".$row['complainantEmail']."</td>";
	echo "<td>".$row['complainantComplain']."</td>";

	echo "<td><input type=text name=reply></td>";

		echo "<td><input type=submit>";
	echo "</form><tr>";


	// echo "<tr>";
	// echo "<td>".$row['complainantComplain']."</td>";
	// echo "<td>".$row['Response']."</td>";
	// echo "<td>".$row['comments']."</td>";

}

// while($row = mysqli_fetch_array($records)){
// 	echo "<tr>";
// 	echo "<td>".$row['complainantComplain']."</td>";
// 	echo "<td>".$row['Response']."</td>";
// 	// echo "<td>".$row['comments']."</td>";
// }
?>

</table>

<!-- <?php
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


?> -->

<script src="my_script.js" type="text/javascript"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
</body>
</html>
