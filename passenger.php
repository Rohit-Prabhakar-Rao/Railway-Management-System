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
if (isset($_POST['submit']))
{
$name=$_POST['name'];
$pnr=rand(10000000,99999999);
$age=$_POST['age'];
$gender=$_POST['gender'];
$class=$_POST['class'];
$coach=$_POST['coach'];
$fare=rand(500,1000);
$trnum=$_POST['trnum'];
$sql = "INSERT INTO passenger(P_NAME,PNR,GENDER,AGE,CLASS,COACH,FARE,TR_NUM) VALUES ('$name', '$pnr', '$gender', '$age', '$class', '$coach', '$fare','$trnum');";
	if(mysqli_query($conn, $sql) && $_SESSION['user_info'])
{  
	$message = "You have successfully booked your ticket";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{  
	$message = "Could not insert record"; 
  echo "<script type='text/javascript'>alert('$message');</script>";
  
}
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

    <title>Booking</title>
    
  </head>
<body class="bg-light">
  <?php
      include("header.php");
  ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1">
                <h4 class="text-center">Book A Ticket</h4>
      <form action="passenger.php" method="post" class="needs-validation was-validated" novalidate="">
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="firstName">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="eg. John" value="" required="">
            <div class="invalid-feedback">
              Valid Name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="gender">Gender</label>
          <input type="text" class="form-control" id="gender" name="gender" placeholder="M/F" required="">
          <div class="invalid-feedback">
          please enter your gender.
          </div>
        </div>

        <div class="mb-3">
          <label for="age">Age</label>
          <input type="number" class="form-control" id="age" name="age" placeholder="eg. 20" required="">
          <div class="invalid-feedback">
            Please enter your Age.
          </div>
        </div>

        <!-- <div class="mb-3">
          <label for="fare">Fare<span class="text-muted"></span></label>
          <input type="number" class="form-control" id="fare" name="fare" placeholder="" required="">
          <div class="invalid-feedback">
            please enter your fare.
          </div>
        </div> -->

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="coach">Coach</label>
            <select class="custom-select d-block w-100" name="coach" id="coach" required="">
              <option value="">Choose...</option>
              <option>A1</option>
              <option>A2</option>
              <option>B1</option>
              <option>B2</option>
              <option>C1</option>
              <option>C2</option>
              <option>D1</option>
              <option>D2</option>

            </select>
            <div class="invalid-feedback">
              Please select a valid Coach.
            </div>
          </div>

          <div class="row">
          <div class="col-md-6 mb-3">
            <label for="train number">Train Name</label>
            <select class="custom-select d-block w-100" name="trnum" id="trnum" required="">
              <option value="">Choose...</option>
              <option value="101">Chennai Express</option>
              <option value="102">Rajdhani Express</option>
              <option value="103">Shatabdi Express</option>
              <option value="104">Duronto Express</option>
              <option value="105">Yuva Express</option>

            </select>
            <div class="invalid-feedback">
              Please select a valid Train Number.
            </div>
          </div>


          <div class="col-md-6 mb-4">
            <label for="class">Class</label>
            <select class="custom-select d-block w-100" name="class" id="class" required="">
              <option value="">Choose...</option>
              <option value="AC">AC 1-TIER</option>
              <option value="AC">AC 2-TIER</option>
              <option value="AC">AC 3-TIER</option>
              <option>SLEEPER</option>
              <option>GENERAL</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid Class.
            </div>
          </div> 
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address" required="">
          <label class="custom-control-label" for="same-address">Agree all the Terms & Conditions.</label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" id="submit" name="submit" type="submit">Book Ticket</button>
      </form>
    </div>
  </div>
  


  <!-- <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2021-2022 Railways</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer> -->
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';

    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');

      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>


    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <footer class="my-3 py-3 text-muted text-center text-small">
    <p class="mb-1">© 2021-2022 Railways</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
  </body>
</html>