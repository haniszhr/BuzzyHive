<?php

session_start();
if (isset($_SESSION['email']))
{
    //Destroy
    $_SESSION = array();
    session_destroy();
    header("Location: index.html");}
else
 echo "<script>alert('Failed to logout')</script>";
?>
