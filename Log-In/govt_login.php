<!DOCTYPE html>
<?php
// $host="localhost";
// $user="root";
// $password="";
// $db="divulgo";

// mysqli_connect($host,$user,$password);
// $mysql_select_db($db);
  $con = mysqli_connect('localhost','root','');

  //Select database

  mysqli_select_db($con,'divulgo');


if(isset($_POST['username'])){
  $uname=$_POST['username'];
  $password=$_POST['password'];

  $sql="SELECT * FROM log_in_govt WHERE employee_id='".$uname."'AND password='".$password."'limit 1" ;

  $result=mysqli_query($con,$sql);

  if(mysqli_num_rows($result)==1){
   header("Location:http://divulgogovt/index.html");
    exit();
  }
//   else{
//     echo '<script type="text/javascript">
//           window.onload = function () { alert("Incorrect password"); }
// </script>';
//     exit();
//   }
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<title>User Login</title>
</head>

<body>
  

    <div class="imgcontainer">
      <img src="logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <form method="POST" action="#">
      <label ><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label ><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      </form>
    </div>
  

</body>
</html>
