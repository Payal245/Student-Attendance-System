<?php
session_start();
if(isset($_POST['reprt'])){

?>
<!doctype html5>
<html>
<head>
<title>Report </title>
<link type="text/css" href='decor16.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<style>
.look{
padding-left:100px;
}
.clear:hover{
color:blue;
text-decoration:underline;
}
.look:hover{
color:blue;
text-decoration:underline;
}
</style>
</head>
<body>
<div class="header">
<h1 class="attend">Student Attendance System</h1>
</div>
<div class="st" style='padding-left:740px;'>
<div>
<?php
include('connect.php');
$id=$_POST['reprt'];
$_SESSION['d']=$id;
$q="SELECT DISTINCT sem_fk FROM student_detail WHERE dep_fk='$id'";
$res1=mysqli_query($con,$q);

while($dat=mysqli_fetch_assoc($res1)){
	$sem=$dat['sem_fk'];
	$q1="SELECT sem_id,sem FROM sem_detail WHERE sem=$sem";
	$res2=mysqli_query($con,$q1);
	$data2=mysqli_fetch_assoc($res2);
	echo "<label style='padding-left:30px;padding-top:10px;'><form method='POST' action='report1.php'><button style='border:none;outline:none;background:none;' name='semester' class='clear' value='".$data2['sem_id']."'><strong>".$data2['sem']."</strong></button></form></label>";
}
?>
<label style="padding-left:35px;"><strong><a href="adminpanel.php" class="m1">Home</a></strong></label>
<label style="padding-left:35px;"><strong><a href="profile.php" class="m1">Profile</a><strong></label>
<label style="padding-left:35px;"><strong><a href="logout.php" class="m1">Logout</a><strong></label>
</div>
</div>
<script src="jquery-3.4.1.min.js"></script>
<script>

	$(document).ready(function(){
		$('.rp').click(function(){
			$('.rp_nav').fadeToggle();
		});
	});
	$(document).ready(function(){
		$('.clear').click(function(){
			$('.section').toggle();
		});
	});
	
</script>
</body>
</html>
<?php
}

?>