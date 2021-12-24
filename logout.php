<?php
    session_start();
    session_destroy();
    echo "<script type='text/javascript'>alert('You have Logged out successfully');</script>";
    header("location:index.php");
    
?>
