<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Registration</title>  
</head>   
<body>
  <body class="bg-light">

<div class="container">
  <div class="row">
    <div class="col-md-8 order-md-1">
      <h4 class="text-center">Register Your Account</h4>
      <form action="register.php" method="post" class="needs-validation was-validated" novalidate="">
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="email">User Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="abc@gmail.com" value="" required="">
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
          <input type="number" class="form-control" id="mobile" name="mobile" placeholder="" required="">
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
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Register</button>
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
<div class="container mt-5">
    <h4>after Registration</h4>
    <h4>click here for login</h4>
     <label for="text">Click here for login<span class="text-muted"></span></label>
    <a class="btn btn-primary btn-lg" href="login.php" name="login" type="submit">Login</a>
    <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2021-2022 Railways</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
  </div>
  </body>
  
</html>  
  
<?php  
  
include("database/db_conection.php");//make connection here  
if(isset($_POST['submit']))  
{  
    //here getting result from the post array after submitting the form.  
    $user_email=$_POST['email'];//same 
    $user_pass=$_POST['pass'];//same  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE U_EMAIL='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
} 
?>  