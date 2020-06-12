<?php 
session_start();
if(isset($_SESSION['uid'])){
?>
<!doctype html5>
<html>
<head>
<title>Attendance Portal </title>
<link type="text/css" href='design3.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <script src="jquery-3.4.1.min.js"></script>
  
  <script src="js/bootstrap.min.js"></script>
  <style>
  .carousel-inner img {
    width: 100%;
    height: 500px;
  }
.d:hover{
color:blue;
text-decoration:underline;
}
  </style>
</head>
<body>
<div class="header">
<h1 class="attend">Student Attendance System</h1>
</div>
<div class="st">
<label style="padding-left:25px;"></label>
<?php

include("connect.php");
$id=$_SESSION['uid'];
$qr="SELECT DISTINCT dname_fk FROM subject_alotted WHERE tname_fk= '$id'";
$result1=mysqli_query($con,$qr);
while($data=mysqli_fetch_assoc($result1)){
$name= $data['dname_fk'];
$qry0="SELECT d_id,d_name FROM department WHERE d_id= '$name'";
$result0=mysqli_query($con,$qry0);
$data1=mysqli_fetch_assoc($result0);
echo "<label style='padding-left:40px;padding-top:7px;display:inline-block;'><form method='POST' action='home_section.php'><button name='dep' style='border:none;outline:none;background-color:rgba(220,220,220,0.1)' class='d' value=".$data1['d_id']."><strong>".$data1['d_name']."</strong></button></form></label>";
}
?>
<label style="padding-left:38px;padding-top:7px;"><strong><a href="home.php" class="m1">Home</a></strong></label>
<label style="padding-left:38px; "><strong><a href="t_profile.php" class="m1">Profile</a><strong></label>
<label style="padding-left:38px; "><a href="logout.php" class="m1">Logout</a></label>


</div>
<div id="demo" class="carousel slide" data-ride="carousel" data-interval='2000'>

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/college-students.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/unamed.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/Quiet_Room.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



</body>
</html>
<?php
}
?>
