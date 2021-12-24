<?php 
session_start();
if(empty($_SESSION['user_info'])){
  echo "<script type='text/javascript'>alert('Please login before proceeding further!');</script>";
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PNR Status</title>
	<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	<style type="text/css">
		#pnr	{
			font-size: 20px;
			background-color: white;
			width: 500px;
			height: 300px;
			margin: auto;
			border-radius: 25px;
			border: 2px solid blue; 
			margin: auto;
  			position: absolute;
  			left: 0; 
  			right: 0;
  			padding-top: 40px;
  			padding-bottom:20px;
  			margin-top: 130px;
 
		}
		html { 
		  background: url(img/bg7.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#pnrtext	{
			padding-top: 20px;
		}
	</style>
</head>
<body>
<?php
include("header.php"); ?>
<center>
	<div id="pnr">Check your PNR status here:<br/><br/>
	<form method="post" name="pnrstatus" action="pnrstatus.php">
	<div id="pnrtext"><input type="text" name="pnr" size="20" maxlength="10" placeholder="Enter PNR here"></div>
	<br/><br/>
	<input type="submit" name="submit" value="Check here!" class="button" id="submit"><br/><br/>
	<?php  
		if(isset($_SESSION['user_info'])){
			echo '<form action="pnrstatus.php" method="post"><input type="submit" class="button" value="Cancel your ticket!" name="cancel" id="cancel"/></form>';
        }
		else
		    echo "<script type='text/javascript'>alert('Login first!!');</script>";	
			//echo '<A HREF="login.php">Login/Register</A>';
		?>
		<footer class="my-3 py-3 text-muted text-center text-small">
    <p class="mb-1">© 2021-2022 Railways</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
	</form>
	</div>
</center>
</body>
</html>
<?php 
// session_start();
// if(empty($_SESSION['user_info'])){
//   echo "<script type='text/javascript'>alert('Please login before proceeding further!');</script>";
//   header("location: login.php");
// }
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$pnr=$_POST['pnr'];
$sql = "SELECT * FROM passenger WHERE PNR= '$pnr'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
	if($row==NULL)	echo "<script type='text/javascript'>alert('PNR not found');</script>";
	else{ 
		echo "<script type='text/javascript'>alert('Your status for PNR ' +'$row[PNR] is : ');</script>";	
		echo "<script type='text/javascript'>alert('Your Train Number is ' +'$row[TR_NUM]');</script>";	
		echo "<script type='text/javascript'>alert('Your coach is ' +'$row[COACH]');</script>";
		echo "<script type='text/javascript'>alert('The seat booked is of class ' +'$row[CLASS]');</script>";	
		echo "<script type='text/javascript'>alert('the total fare paid :' +'$row[FARE]');</script>";		
	}
}
if (isset($_POST['cancel']))
{
$pnr=$_POST['pnr'];
$sql = "DELETE FROM passenger WHERE PNR='$pnr';";
if(mysqli_query($conn, $sql))
	echo "<script type='text/javascript'>alert('Your ticket has been cancelled');</script>";
	else echo "<script type='text/javascript'>alert('Cancellation failed');</script>";	
}
?>