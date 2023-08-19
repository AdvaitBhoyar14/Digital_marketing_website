<?php

//index.php

?>
<!DOCTYPE html>
<html>
 <head>
  <title>AngularJS Live Data Search using PHP Mysql</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <style>
            body{
             background-image: linear-gradient(#000, #2C195D);
            height: 1000px;
            font-family: "Poppins", sans-serif;
            color: #ffffff;
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
    h1{
      text-decoration: underline;
      font-size:70px;
    }
  .form_style
  {
   width: 600px;
   margin: 0 auto;
  }
  </style>
 </head>
 <body>

  <div class="container" ng-app="live_search_app" ng-controller="live_search_controller" ng-init="fetchData()">
   <br />
   <h1 align="center">Dashboard</h1>
   <br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_query" ng-model="search_query" ng-keyup="fetchData()" placeholder="Search by User Details" class="form-control" />
    </div>
   </div>
   <br />
   <table class="table">
    <thead>
     <tr>
      <th>S.N</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Password</th>


     </tr>
    </thead>
    <tbody>
     <tr ng-repeat="data in searchData">
      <td>{{ data.id }}</td>
      <td>{{ data.fname }}</td>
      <td>{{ data.femail }}</td>
      <td>{{ data.fphone }}</td>
      <td>{{ data.fpass }}</td>
     </tr>
    </tbody>
   </table>
  </div>

 </body>
</html>

<script>
var app = angular.module('live_search_app', []);
app.controller('live_search_controller', function($scope, $http){
 $scope.fetchData = function(){
  $http({
   method:"POST",
   url:"fetch.php",
   data:{search_query:$scope.search_query}
  }).success(function(data){
   $scope.searchData = data;
  });
 };
});
</script>
