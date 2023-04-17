<?php
   include_once("../header.php");

   $description = $_GET['describe'];
   $amount = intval($_GET['amount']);
   if(!intval($amount)){
    header("location: ../addRecord.php?status=amountError");
   }
   $date = date('Y-m-d');
   
   
   
   if(!$conn){
    echo "Error connection to database";
    die;
   }

   $query = "INSERT INTO spent (description,amount,date) VALUES ('$description','$amount','$date')";
   $result = mysqli_query($conn,$query);
   
   if(!$result){
    echo "Error adding new record!";
    echo mysqli_error($conn);
    die;
   }

   header("location:../index.php?status=recordAdded");

?>