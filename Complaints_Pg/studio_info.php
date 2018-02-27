<?php
include_once('db.php');

$date = $_POST['date'];
$s_time = $_POST['s_time'];
$e_time = $_POST['e_time'];


$conn = mysqli_connect('localhost','root', '', 'admin');

if(mysqli_query($conn, "INSERT INTO studio_info VALUES('$date','$s_time','$e_time')"))
echo "success";
else
echo "failed";
?>