<!doctype html5>
<html>
<head>
<title>Attendance Portal </title>
<link type="text/css" href='design4.css' rel='stylesheet'>
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
include('connect.php');
session_start();
if(isset($_POST['dep'])){
	$d_id=$_POST['dep'];
	$id=$_SESSION['uid'];
	$_SESSION['dept']=$d_id;
$qry="SELECT DISTINCT sem_fk FROM subject_alotted WHERE dname_fk= '$d_id' AND tname_fk='$id'";
$result=mysqli_query($con,$qry);
while($data2=mysqli_fetch_assoc($result))
{	$name= $data2['sem_fk'];
$qery="SELECT sem_id,sem FROM sem_detail WHERE sem_id= '$name'";
$run=mysqli_query($con,$qery);
$data=mysqli_fetch_assoc($run);
echo "<label style='padding-left:40px;padding-top:7px;display:inline-block;'><form method='POST'><button name='sem' style='border:none;outline:none;background-color:rgba(220,220,220,0.1)' class='d' value=".$data['sem_id']."><strong>".$data['sem']."</strong></button></form></label>";
}
}
if(isset($_POST['sem'])){
	$d=$_SESSION['dept'];
	$id1=$_SESSION['uid'];
	$sem=$_POST['sem'];
	$_SESSION['sem']=$sem;
	$qr="SELECT sec_fk FROM subject_alotted WHERE dname_fk= '$d' AND tname_fk='$id1' AND sem_fk='$sem'";
	$output=mysqli_query($con,$qr);
	while($data3=mysqli_fetch_assoc($output))
	{
		$sec=$data3['sec_fk'];
		$qr1="SELECT sec_id,section FROM section_detail WHERE sec_id='$sec'";
	    $output1=mysqli_query($con,$qr1);
	    $data4=mysqli_fetch_assoc($output1);
	   echo "<label style='padding-left:40px;padding-top:7px;display:inline-block;'><form method='POST'><button name='sec' style='border:none;outline:none;background-color:rgba(220,220,220,0.1)' class='d' value=".$data4['sec_id']."><strong>".$data4['section']."</strong></button></form></label>";

	}
}
if(isset($_POST['sec'])){
	$d1=$_SESSION['dept'];
	$id2=$_SESSION['uid'];
	$sem1=$_SESSION['sem'];
	$sec=$_POST['sec'];
	$_SESSION['sec']=$sec;
	$qry="SELECT subject_fk FROM subject_alotted WHERE dname_fk= '$d1' AND tname_fk='$id2' AND sem_fk='$sem1' AND sec_fk='$sec'";
	$out=mysqli_query($con,$qry);
	while($data5=mysqli_fetch_assoc($out)){
		$subject=$data5['subject_fk'];
		$qr2="SELECT sub_id, sub_name FROM subject_detail where sub_id='$subject'";
		$exec=mysqli_query($con,$qr2);
		$data6=mysqli_fetch_assoc($exec);
	    echo "<label style='padding-left:40px;padding-top:7px;display:inline-block;'><form method='POST' action='attendance.php'><button name='sub' style='border:none;outline:none;background-color:rgba(220,220,220,0.1)' class='d' value=".$data6['sub_id']."><strong>".$data6['sub_name']."</strong></button></form></label>";
		
}}
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
      <img src="img/Quiet_Room.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/college-students.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/unamed.jpg" alt="New York" width="1100" height="500">
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


