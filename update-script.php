<?php

include('database.php');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($connection, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($connection,$id);


}
function edit_data($connection, $id)
{
 $query= "SELECT * FROM signup WHERE id= $id";
 $exec = mysqli_query($connection, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($connection, $id){

    $fname= legal_input($_POST['fname']);
      $femail= legal_input($_POST['femail']);
      $fphone = legal_input($_POST['fphone']);
      $fpass = legal_input($_POST['fpass']);
      $fcpass = legal_input($_POST['fcpass']);

      $query="UPDATE signup
            SET fname='$fname',
                femail='$femail',
                fphone= '$fphone',
                fpass='$fpass',
                fcpass='$fcpass' WHERE id=$id";

      $exec= mysqli_query($connection,$query);

      if($exec){
         header('location:table.php');

      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
         echo $msg;
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
