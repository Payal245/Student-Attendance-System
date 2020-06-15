<?php
session_start();
if(isset($_SESSION['uid'])){
?>
<!doctype html5>
<html>
<head>
<title>Admin </title>
<link type="text/css" href='decor16.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<style>
.dep{
color:white;
font-size:16px;

}
.dep:hover{
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
<label  class="bar" ><strong><span class="material-icons" style="font-size:28px;padding-left:17px;color:black;padding-top:3px;" >menu</span><strong></label>
<div style="margin-top:-30px;">
<label style="padding-left:830px;"><strong><a href="adminpanel.php" class="m1">Home</a></strong></label>
<label style="padding-left:35px;" class='rp'><strong>Report</strong></label>
<label style="padding-left:35px; "><strong><a href="profile.php" class="m1">Profile</a><strong></label>
<label style="padding-left:35px; "><strong><a href="logout.php" class="m1">Logout</a><strong></label>
</div>
</div>
<div>
<div class="side_nav" style='position:absolute;z-index:1;'>
<ul>
<div class="side1">
<li class="nav_menu" ><a href="#" class="nav d1" style="margin-top:10px;"><span class="material-icons " >
school
</span><label>Department</label></a>
<ul>
<div class="side_click1">
<li><a href="deparmnt.php"><label style="padding-left:20px;padding-right:20px;">Add</label></a></li>
<li><a href="deparmnt_update.php"><label style="padding-left:20px;padding-right:20px;">View</label></a></li>
</div>
</ul>
</li>
</div>
<div class="side2">
<li class="nav_menu"><a href="#" class="nav t1" ><span class="material-icons">
person
</span><label>Teacher</label></a>
<ul>
<div class="side_click2">
<li><a href="teacher.php"><label style="padding-left:20px;padding-right:20px;">Add</label></a></li>
<li><a href="teacher_update.php"><label style="padding-left:20px;padding-right:20px;">View</label></a></li>
</div></ul></li>
</div>
<div class="side3">
<li class="nav_menu"><a href="#" class="nav s1"><span class="material-icons">
layers
</span><label >Semester</label></a>
<ul>
<div class="side_click3 ">
<li><a href="sem.php"><label style="padding-left:20px;padding-right:20px;">Add</label></a></li>
<li><a href="sem_update.php"><label style="padding-left:20px;padding-right:20px;">View</label></a></li>
</div>
</ul></li></div>
<div class="side4">
<li class="nav_menu"><a href="#" class="nav s2"><span class="material-icons">
list
</span><label class="opt">Section</label></a>
<ul>
<div class="side_click4">
<li><a href="section.php"><label style="padding-left:20px;padding-right:20px;">Add</label></a></li>
<li><a href="section_update.php"><label style="padding-left:20px;padding-right:20px;">View</label></a></li>
</div>
</ul>
</li></div>
<div class="side5">
<li class="nav_menu"><a href="#" class="nav s3"><span class="material-icons">
subject
</span><label class="opt">Subject</label></a>
<ul>
<div class="side_click5">
<li><a href="subject.php"><label style="padding-left:20px;padding-right:20px;">Add</label></a></li>
<li><a href="subject_update.php"><label style="padding-left:20px;padding-right:20px;">View</label></a></li>
</div></ul></li>
</div>
<div class="side6">
<li class="nav_menu"><a href="#" class="nav s4"><span class="material-icons">
person
</span><label class="opt" >Student</label></a>
<ul>
<div class="side_click6">
<li><a href="student.php"><label style="padding-left:20px;padding-right:20px;">Add</label></a></li>
<li><a href="student_update.php"><label style="padding-left:20px;padding-right:20px;">View</label></a></li>
</div>
</ul></li>
</div>
<div class="side7">
<li class="nav_menu"><a href="#" class="nav s5"><span class="material-icons">
subject
</span><label>Subject Alotted</label></a>
<ul>
<div class="side_click7">
<li><a href="subject_alotted.php"><label style="padding-left:20px;padding-right:20px;">Add</label></a></li>
<li><a href="subject_alot_update.php"><label style="padding-left:20px;padding-right:20px;">View</label></a></li>
</div>
</ul></li></div>
</ul>
</div>
</div>
<nav>
<div class='rp_nav' style='position:absolute;z-index:1;'>
<?php
include('connect.php');
$qur="SELECT DISTINCT dep_fk FROM student_detail";
echo "<ul style='padding:0px 0px 0px 0px;'>";
$res=mysqli_query($con,$qur);
echo "<form method='POST' action='report.php'>";
while($data=mysqli_fetch_array($res)){
	$id=$data['dep_fk'];
	$q="SELECT d_id,d_name FROM department WHERE d_id=$id";
	$res1=mysqli_query($con,$q);
	$data1=mysqli_fetch_assoc($res1);
	echo "<li style='padding-top:10px;'><button style='border:none;outline:none;background:none;' name='reprt' value='{$data1['d_id']}' class='dep'><strong>{$data1['d_name']}</strong></button></li>";	
}
echo "</ul>";
echo "</form>";
?>
</div>
</nav>
<script src="jquery-3.4.1.min.js"></script>
<script>
	$(document).ready(function(){
		$('.bar').click(function(){
			$('.side_nav').fadeToggle();
		});
	});
	$(document).ready(function(){
		$('.rp').click(function(){
			$('.rp_nav').fadeToggle();
		});
	});
	
</script>
</body>
</html>
<?php
}
else{
	echo"Login Firstly";
}
?>


