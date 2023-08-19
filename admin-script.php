<?php

include('database.php');

if(isset($_POST['Username'])){

    $Username=$_POST['Username'];
    $Password=$_POST['Password'];

    $query="SELECT * from admin_login where Username='".$Username."' AND Password='".$Password."'limit 1";

    $result=mysqli_query($connection, $query);

    if(mysqli_num_rows($result)==1)
    {
        header("Location: table.php");
    }
    else{
        echo "You Have Entered Incorrect Password";
        exit();
    }

}
?>
