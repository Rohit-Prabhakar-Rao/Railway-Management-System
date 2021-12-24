<HTML>
<HEAD>
<TITLE>Indian Railways</TITLE>
</HEAD>
<BODY>
<?php 
session_start();
include("header.php"); ?>
<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/wallpaper1.jpg" alt="First slide">
<div class="carousel-caption d-none d-md-block">
    <h2>Welcome to Indian Railway</h2>
    <p>travel with safety</p>
    <a class="btn btn-warning" href="login.php" role="button" >Login</a>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bg3.jpg" alt="Second slide">
<div class="carousel-caption d-none d-md-block">
    <h2>Book Ticket Online</h2>
	<a class="btn btn-warning" href="passenger.php" role="button" >Book a Ticket</a>
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bg2.jpg" alt="Third slide">
<div class="carousel-caption d-none d-md-block">
    <h2>Check PNR Status</h2>
    <a class="btn btn-warning" href="pnrstatus.php" role="button" >Check PNR</a>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<footer class="my-3 py-3 text-muted text-center text-small">
    <p class="mb-1">© 2021-2022 Railways</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</BODY>
</HTML>