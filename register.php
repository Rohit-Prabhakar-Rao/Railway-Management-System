<?php
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$email=$_POST['email'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$password=$_POST['pw'];

$sql = "INSERT INTO users(USER_EMAIL,USER_NAME,USER_MOBILE,USER_ADDRESS,USER_PASSWORD) VALUES ('$email','$name', '$mobile', '$address','$password');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register Account</title>
  </head>
  <body>
    <?php
      include("header.php");
    ?>
  <body class="bg-light">

<div class="container">
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="text-center">Register Your Account</h4>
      <form action="register.php" method="post" class="needs-validation was-validated" novalidate="">
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="email">User Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="abc@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="" required="">
            <div class="invalid-feedback">
              Valid email is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="name">User Name <span class="text-muted">(Required)</span></label>
          <input type="name" class="form-control" id="name" name="name" placeholder="" required="">
          <div class="invalid-feedback">
            Please enter a valid name.
          </div>
        </div>

        <div class="mb-3">
          <label for="mobile">Mobile</label>
          <input type="number" class="form-control" id="mobile"  maxlength="10" pattern="[0-9]{10}" name="mobile" placeholder="XXXXXXXXXX" required="">
          <div class="invalid-feedback">
            Please enter your mobile number.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address<span class="text-muted"></span></label>
          <input type="address" class="form-control" id="address" name="address" placeholder="" required="">
          <div class="invalid-feedback">
            please enter your Address.
          </div>
        </div>
        <div class="mb-3">
          <label for="password">Password<span class="text-muted"></span></label>
          <input type="password" class="form-control" id="pw" name="pw" placeholder="" required="">
          <div class="invalid-feedback">
            please enter your password.
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-block" name="submit" type="submit">Register</button>
      </form>
    </div>
  </div>
</div>
<div class="container mt-5">
    <h4>Already have an Account?</h4>
    <a class="btn btn-primary" href="login.php" name="login" type="submit">Login</a>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2021-2022 Railways</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>

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


</body>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
