<?php
if(isset($_POST['semester'])){
	
?>
<!doctype html5>
<html>
<head>
<title>Report </title>
<link type="text/css" href='decor16.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<style>
.clear:hover{
color:blue;
text-decoration:underline;
}
</style>
</head>
<body>
<div class="header">
<h1 class="attend">Student Attendance System</h1>
</div>
<div class="st" style='padding-left:780px;'>
<div>
<?php
include('connect.php');
session_start();
$dep=$_SESSION['d'];
$sem=$_POST['semester'];
$_SESSION['sem']=$sem;
$q="SELECT DISTINCT sec_fk FROM student_detail WHERE dep_fk='$dep' and sem_fk='$sem'";
$res1=mysqli_query($con,$q);
while($dat=mysqli_fetch_assoc($res1)){
	$sec=$dat['sec_fk'];
	$q1="SELECT sec_id,section FROM section_detail WHERE sec_id=$sec";
	$res2=mysqli_query($con,$q1);
	$data2=mysqli_fetch_assoc($res2);
	echo "<label style='padding-left:30px;padding-top:10px;'><form method='POST' action='attend.php'><button style='border:none;outline:none;background:none;' name='sec' class='clear' value='".$data2['sec_id']."'><strong>".$data2['section']."</strong></button></form></label>";
}
?>
<label style="padding-left:35px;"><strong><a href="adminpanel.php" class="m1">Home</a></strong></label>
<label style="padding-left:35px;"><strong><a href="profile.php" class="m1">Profile</a><strong></label>
<label style="padding-left:35px;"><strong><a href="logout.php" class="m1">Logout</a><strong></label>
</div>
</div>
</body>
</html>
<?php
}
?>