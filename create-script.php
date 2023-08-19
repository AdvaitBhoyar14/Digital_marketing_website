<?php

include('database.php');

if(isset($_POST['create'])){
   
      $msg=insert_data($connection);
      
}

// insert query
function insert_data($connection){
   
      $fname= legal_input($_POST['fname']);
      $femail= legal_input($_POST['femail']);
      $fphone = legal_input($_POST['fphone']);
      $fpass = legal_input($_POST['fpass']);
      $fcpass = legal_input($_POST['fcpass']);

      $query="INSERT INTO signup (fname,femail,fphone,fpass,fcpass) VALUES ('$fname','$femail','$fphone','$fpass','$fcpass')";
      $exec= mysqli_query($connection,$query);
      if($exec){
        header("location:login.php");
      }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>