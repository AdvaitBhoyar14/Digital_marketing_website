<?php

include('read-script.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,100;1,200;1,300&display=swap');

      body{
        height:1000px;
             background-image: linear-gradient(#000, #2C195D);
            overflow-x: hidden;
            font-family: "Poppins", sans-serif;
            color: #ffffff;
     }
     p{
       font-size: 70px;
       text-align:center;
       text-decoration: underline;
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
    input[type="submit"] {
          width: 200px;
            font-size:20px;
            height: 40px;
            background: #ffffff;
            border-radius: 10px;
            color: #000;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #000;
            color:#fff;
        }
    </style>
  </head>
  <body>
    <p>Dashboard</p>
    <center><a href="table1.php"><input type="submit" value="Search"></center></a>
    <br>
    <table align="center" width="100%">

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

  </body>
</html>
