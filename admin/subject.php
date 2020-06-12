<?php
session_start();
if($_SESSION['uid']==1)
{
?>
<!doctype html5>
<html>
<head>
<title>Subject </title>
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
<div class="back-screen_sub">
<form method="POST">
<h1 class="text-center" style="padding-top:15px;">ADD Subject</h1>
<div style="padding-top:8px;">
<label class="lab_sem">Department name</label>
<div class="group_sem" >
<select name="dep">
<option value="">Select</option>
<?php
include("connect.php");
$qr="SELECT DISTINCT d_id,d_name FROM department";
$result1=mysqli_query($con,$qr);
while($data1=mysqli_fetch_assoc($result1)){
	
echo "<option value={$data1[d_id]}>{$data1[d_name]}</option>";
}
?>
</select>
</div>
</div>
<div style="padding-top:8px;">
<label class="lab_sem">Semester name</label>
<div class="group_sem" >
<select name="sem">
<option value="">Select</option>
<?php
include("connect.php");
$qr="SELECT sem_id,sem FROM sem_detail";
$result1=mysqli_query($con,$qr);
while($data1=mysqli_fetch_assoc($result1)){
	
echo "<option value={$data1[sem_id]}>{$data1[sem]}</option>";
}
?>
</select>
</div>
</div>
<div style="padding-top:8px;">
<label class="lab_sem">Subject name</label>
<div class="group_sem" >
<input type="text" name="sub_name" placeholder="  Subject name" style="width:300px;" >
</div>
</div>
<input class="btn btn-primary" type="submit" value="Add Subject" name="add" style="width:300px;margin-top:16px; margin-left:35">
</form>
</div>	
</div>

<?php
include("connect.php");
if(isset($_POST['add'])){
	$dep_fk=$_POST['dep'];
	$sem_fk=$_POST['sem'];
	$sub_name=$_POST['sub_name'];
	if($dep_fk=='' or $sem_fk=='' or $sub_name==''){
		?>
		<script>
		alert("please fill all details");
		</script>
		<?php
	}
	else{
	$quer="INSERT INTO subject_detail (dep_fk,sem_fk,sub_name) VALUES ('$dep_fk','$sem_fk','$sub_name')";
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