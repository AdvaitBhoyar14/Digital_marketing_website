<?php

include('read-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD Operations</title>
<style>
    body{
        background-image: linear-gradient(#000, #2C195D);

    }
     table, td, th {  
      border: 1px solid #ddd;
      text-align: center;
    }
    
    table {
      border-collapse: collapse;
      max-width: 100%;
     width:90%;

    }
    .table-data{
      
      width:65%;
      float: right;
    }
    th, td {
      padding: 15px;
    }
body{
    overflow-x: hidden;
}

* {
  box-sizing: border-box;}
</style>
</head>
<body>


<div class="table-data">
        <div class="list-title">
 <h2>CRUD List</h2>
          
            </div>

    <table border="1">

        <tr>

            <th>S.N</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>


        </tr>
        
<?php

        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){
            
?> <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['fname']; ?></td>
<td><?php echo $data['femail'];?> </td>
<td><?php echo $data['fpass']; ?></td>
<td><a href="update-form.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
<td><a href="delete-script.php?delete=<?php echo $data['id']; ?>">Delete</a></td>
</tr> <?php

      $sn++; }

      }else{
            
?>

      <tr>
        <td colspan="7">No Data Found</td>
      </tr>
                
<?php

    }
?>
 
    </table>
    </div>

</body>
</html>