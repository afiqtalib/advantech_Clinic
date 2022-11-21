<?php
session_start();

if(!isset($_SESSION['doctorSession']))
{
 header("Location: staffdashboard.php");
}
else if(isset($_SESSION['staffSession'])!="")
{
 header("Location: ../index.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['staffSession']);
 header("Location: ../index.php");
}
?>