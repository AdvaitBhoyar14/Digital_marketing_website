<?php

//fetch.php


$connect = new PDO("mysql:host=localhost;dbname=kmdb", "root", "");

$form_data = json_decode(file_get_contents("php://input"));

$query = '';
$data = array();

if(isset($form_data->search_query))
{
 $search_query = $form_data->search_query;
 $query = "
 SELECT * FROM signup 
 WHERE (id LIKE '%$search_query%' 
 OR fname LIKE '%$search_query%' 
 OR fphone LIKE '%$search_query%' 
 OR fpass LIKE '%$search_query%') 
 ";
}
else
{
 $query = "SELECT * FROM signup ORDER BY fname ASC";
}

$statement = $connect->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

?>