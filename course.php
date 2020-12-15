<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
<link rel="stylesheet" href="dist/css/bootstrap.css">
<script src="jquery-3.1.1.js"></script>
    <script src="dist/js/bootstrap.js"></script>
   
<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<style>
li{
list-style-type:none;

}
</style>
    <title>Document</title>
</head>
<body>
 
<nav class="navbar navbar-expand navbar-dark bg-success fixed-top">

<a class="navbar-brand mr-1 btn btn-success" href="indexmain.php"> BGCTUB</a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars"></i>
</button>

<!-- Navbar Search -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
  
</form>

<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">
  <!--<li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-bell fa-fw"></i>
      <span class="badge badge-danger">9+</span>
    </a>
   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </li>
  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-envelope fa-fw"></i>
      <span class="badge badge-danger">7</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </li>-->
 
</ul>
<li class="nav-item">
    <a class="nav-link  btn btn-success" href="admin.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="">Admin</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link  btn btn-success" href="Teacherlogin.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="">Teacher Login</span></a>
  </li>
<li class="nav-item">
    <a class="nav-link btn btn-success button-group" href="department.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style=";">Admission</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link btn btn-success" href="studentlogform.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="text-shadow: 0px 1px 5px black;">Student Login</span></a>
  </li>
<li class="nav-item">
    <a class="nav-link btn btn-success" href="department.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="text-shadow: 0px 1px 5px black;">Department</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link  btn btn-success" href="course.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="text-shadow: 0px 1px 5px black;">Courses</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link  btn btn-success" href="ebook.php">
      <i class="fas fa-fw fa-user  "></i>
      <span style="text-shadow: 0px 1px 5px black;">EBOOK</span></a>
  </li>

  
</nav>


<h1 class="text-center">All Course</h1>
<div class="container">
<div class="row mt-4">
<?php

include "connection.php";
$sql="SELECT * from skill";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
$course_id=$row['id'];
echo '
<div class="col-sm-4 mb-4">

<a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align:left;padding:0px;margin:0px">
<div class="card">
<img src="../'.$row['picture'].'" class="card-img-top" height="300px" width="300px">
<div class="card-body">
<h5 class="text-center">'.$row['course_name'].'</h5>
<p class="card-text">'.$row['course_desc'].'</p>
</div>
<div class="card-footer">
<p class="card-text d-inline"><span class="font-weight-bolder">'.$row['Price'].'<span> </p>
<a href="coursedetails.php?course_id='.$course_id.'"  class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>

</div>
</div>

</a>
</div>

';

}

?>

</div>
</div>
</body>
</html>