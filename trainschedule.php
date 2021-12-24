<?php
session_start();
if(empty($_SESSION['user_info'])){
  echo "<script type='text/javascript'>alert('Please login before proceeding further!');</script>";
  header("location: login.php");
}
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Train Schedule</title>
  </head>
  <body>
  <?php
include("header.php"); ?>
  <table class="table table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Train Name</th>
      <th scope="col">Arrival Time</th>
      <th scope="col">Departure Time</th>
      <th scope="col">Source Station</th>
      <th scope="col">Destination Station</th>
      <th scope="col">Route Name</th>
      <th scope="col">Station Code</th>
      <th scope="col">Platform</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chennai Express</th>
      <td>6pm</td>
      <td>6.30pm</td>
      <td>Chennai</td>
      <td>Hyderabad</td>
      <td>Bangalore</td>
      <td>1</td>
      <td>1</td>
    </tr>
    <tr>
      <th scope="row">Rajdhani Express</th>
      <td>7pm</td>
      <td>7.10pm</td>
      <td>Yeswantpur</td>
      <td>Bidar</td>
      <td>Mandya</td>
      <td>2</td>
      <td>1</td>
    </tr>
    <tr>
      <th scope="row">Shatabdi Express</th>
      <td>5pm</td>
      <td>5.15pm</td>
      <td>Hyderabad</td>
      <td>Kalaburagi</td>
      <td>Shahabad</td>
      <td>3</td>
      <td>2</td>
    </tr>
    <tr>
      <th scope="row">Duronto Express</th>
      <td>8am</td>
      <td>8.20am</td>
      <td>nayandahalli</td>
      <td>Mysore</td>
      <td>Coorg</td>
      <td>4</td>
      <td>3</td>
    </tr>
    <tr>
      <th scope="row">Yuva Express</th>
      <td>6am</td>
      <td>6.20am</td>
      <td>Chennai</td>
      <td>Belgaum</td>
      <td>Bangalore</td>
      <td>1</td>
      <td>2</td>
    </tr>
  </tbody>
</table>
<a href="passenger.php" class="btn btn-info" role="button">Book Ticket</a>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>