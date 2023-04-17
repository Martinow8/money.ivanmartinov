<?php
include_once("header.php");

if(!isset($_SESSION['logged'])){
	header("location: login.php");
	die;
}

$conn = mysqli_connect("164.92.165.156","spent","123123","spent");
   
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
  }

   if(!$conn){
    echo "Error connection to daaaaatabase";
	$error = mysqli_error($conn);
	echo "Error" . $error;
    die;
   }
