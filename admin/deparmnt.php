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
<div class="back-screen">
<form method="POST">
<h1 class="text-center" style="padding-top:10px;">ADD Department</h1>
<label class="lab">Department name</label>
<div class="group" >
<input type="text" class="fr" name="dname" placeholder="  Department name" style="width:310px;" >
</div>
<label class="lab">HOD name</label>
<div class="group">
<input type="text" class="fr" name="hod" placeholder="  HOD name" style="width:310px;">
</div>
<input class="btn btn-primary" type="submit" value="Add Department" name="add" style="width:310px;margin-top:14px; margin-left:45">
</div>	
</div>

<?php
include("connect.php");
if(isset($_POST['add'])){
	$dname=$_POST['dname'];
    $hod=$_POST['hod'];
	if($dname=='' or $hod==''){
		?>
		<script>
		alert("Please fill all details");
		</script>
	<?php
	}
	else{
	$quer="INSERT INTO department (d_name, hod_name) VALUES ('$dname','$hod')";
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