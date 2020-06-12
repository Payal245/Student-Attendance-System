<!doctype html5>
<html>
<head>
<title>Department </title>
<link type="text/css" href='decor14.css' rel='stylesheet'>
<link href="css/bootstrap.css" rel="stylesheet">

</head>
<body>
<div class="header">
<h1 class="attend">Student Attendance System</h1>
</div>
<div class="st">
<div style="padding-top:11px;">
<label style="padding-left:940px;"><strong><a href="adminpanel.php" class="m1" >Home</a></strong></label>
<label style="padding-left:35px;"><strong><a href="profile.php" class="m1" >Profile</a><strong></label>
<label style="padding-left:35px; "><strong><a href="logout.php" class="m1" >Logout</a><strong></label>
</div>
</div>
<div  class="hom" >
<div class="back-screen_upd" >
<form method="POST">
<h1 class="text-center" style="padding-top:10px;">Update Profile</h1>
<div style="padding-top:5px;">
<label class="lab">Username</label>
<div class="group" >
<input type="text" name="tname" placeholder="   Username" style="width:310px;" >
</div>
</div>
<div  style="padding-top:5px;">
<label class="lab">Qualification</label>
<div class="group" >
<input type="text" name="qual" placeholder="  Qualification" style="width:310px;" >
</div>
</div>
<div  style="padding-top:5px;">
<label class="lab">Date Of Birth</label>
<div class="group" >
<input type="date" name="dob" style="width:310px;" >
</div>
</div>
<div  style="padding-top:5px;">
<label class="lab">Gender</label>
<div class="group" style="margin-top:-7px;">
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
</div>
</div>

<input class="btn btn-primary" type="submit" value="Update" name="upd" style="width:310px;margin-top:14px; margin-left:45">
</div>	
</div>

<?php
include("connect.php");
if(isset($_POST['upd'])){
	$tname=$_POST['tname'];
	$qual=$_POST['qual'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	if($tname=='' or $qual=='' or $dob=='' or $gender==''){
		?>
		<script>
		alert("Please fill all details");
		</script>
	<?php
	}
	else{
	session_start();
	$id=$_SESSION['uid'];
	
	$quer="UPDATE t SET username='$tname', qualification='$qual',dob='$dob', gender='$gender' WHERE t_id=$id";
	if(!mysqli_query($con,$quer)){
		?>
		<script>
		alert("Profile is not updated!!");
		</script>
<?php
	
}
else{
	header('location:profile.php');
}
	}
}

?>
</body>
</html>