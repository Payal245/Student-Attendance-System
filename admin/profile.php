<?php
session_start();
if(isset($_SESSION['uid'])){
?>
<!doctype html5>
<html>
<head>
<title>Admin profile </title>
<link type="text/css" href='decor16.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<style>
.wrapper{
	width:400px;
	margin:15px 350px;
	color:white;
	position:absolute;
height:600px;
}
th{
color:white;width:150px;}
td{
color:white;width:150px;}
table{
	margin-left:56px;
	margin-top:30px;
}	
</style>
</head>
<body>
<div class="header">
<h1 class="attend">Student Attendance System</h1>
</div>
<div class="st">
<label style="padding-left:940px;padding-top:10px;"><strong><a href="adminpanel.php" class="m1">Home</a></strong></label>
<label style="padding-left:35px; "><strong><a href="profile.php" class="m1">Profile</a><strong></label>
<label style="padding-left:35px; "><strong><a href="logout.php" class="m1">Logout</a><strong></label>
</div>
<div style="background-color:#004524; height:100%;width:100%;position:relative;">
<div class="container">

<div class="wrapper">
<h3 style="text-align:center;">My Profile</h3>
<span class="material-icons" style="font-size:100px;background-color:black;border-radius:50%;margin-left:150px;">
person
</span><a href="upadate.php" style="margin-left:230px;text-decoration:none;color:white;margin-top:-10px;font-size:13px;" name="submit1">Edit</a>
<table border="2px" cellspacing="0" cellpadding="10" style="border-color:white;">
<?php
include('connect.php');
$id=$_SESSION['uid'];
$qr="SELECT * FROM t WHERE t_id = '$id'";
$result1=mysqli_query($con,$qr);
$data=mysqli_fetch_assoc($result1);
$user=$data['username'];
$gender=$data['gender'];
$qualification=$data['qualification'];
$dob=$data['dob'];
$current_year=date('Y');
$new=strtotime($current_year);
$old=strtotime($dob);
$differ=$new-$old;
$age=floor($differ/(60*60*24*365));
echo "<tr><th>Username</th><td>".$user."</td></tr><tr><th>Age</th><td>".$age."</td></tr><tr><th>Date OF Birth</th><td>".$dob."</td></tr><th>Gender</th><td>".$gender."</td></tr><tr><th>Qualification</th><td>".$qualification."</td></tr>";
}
?>
</table>
</div>
</div>
</body>
<html>