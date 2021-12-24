<?php
session_start();
if (isset($_POST['submit']))
{
	$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
$email=$_POST['email'];
$pw=$_POST['pw'];
$sql = "SELECT * FROM login WHERE U_EMAIL = '$email' AND U_PASSWORD = '$pw';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
		$user = mysqli_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user['U_EMAIL'];
			$message='Logged in successfully';
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else{
			$message = 'Wrong email or password.';
		}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
if(isset($_SESSION['user_info'])){
 	header("location: index.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php include("header.php") ?>
	<form action="login.php" method="post">
		<div class="container col-6">
			<h3 class="text-center">Login</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="pw" name="pw" placeholder="Password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <div class="container col-5">
    <h4 class="text-center">Don't have an Account?</h4>
    <a class="btn btn-primary btn-sm btn-block" href="register.php" name="login" type="submit">register</a>
  </div>
</form>
</div>
</body>
</html>
