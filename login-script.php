<?php

include('database.php');

if(isset($_POST['femail'])){

    $femail=$_POST['femail'];
    $fpass=$_POST['fpass'];

    $query="SELECT * from signup where femail='".$femail."' AND fpass='".$fpass."'limit 1";

    $result=mysqli_query($connection, $query);

    if(mysqli_num_rows($result)==1)
    {
        header("Location:index2.html");
    }
    else{
        echo "You Have Entered Incorrect Password";
        exit();
    }

}
?>
