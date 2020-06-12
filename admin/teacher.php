<?php
session_start();
if($_SESSION['uid']==1)
{
?>
<!doctype html5>
<html>
<head>
<title>Department </title>
<link type="text/css" href='decor16.css' rel='stylesheet'>
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
<div class="back-screen_teach">
<form method="POST">
<h1 class="text-center" style="padding-top:10px;">ADD Teacher</h1>
<div style="padding-top:5px;">
<label class="lab">Teacher name</label>
<div class="group" >
<input type="text" name="tname" placeholder="  Teacher name" style="width:310px;" >
</div>
</div>
<div  style="padding-top:5px;">
<label class="lab">Password</label>
<div class="group">
<input type="password" class="fr" name="pass" placeholder="  Password" style="width:310px;">
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

<input class="btn btn-primary" type="submit" value="Add Teacher" name="add" style="width:310px;margin-top:14px; margin-left:45">
</div>	
</div>

<?php
include("connect.php");
if(isset($_POST['add'])){
	$tname=$_POST['tname'];
    $pass=$_POST['pass'];
	$encryptpass=password_hash($pass,PASSWORD_DEFAULT);
	$qual=$_POST['qual'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	if($tname=='' or $pass=='' or $qual=='' or $dob=='' or $gender==''){
		?>
		<script>
		alert("Please fill all details");
		</script>
		<?php
	}
	else{
	$quer="INSERT INTO t (username, qualification, password, dob, gender) VALUES ('$tname','$qual','$encryptpass','$dob','$gender')";
	if(!mysqli_query($con,$quer)){
		?>
		<script>
		alert("Data is not inserted");
		</script>
<?php
	}
	else{
		echo"data is inserted";
	}
	}
}
}
else{
	echo"Login firstly";
}
?>
</body>
</html>