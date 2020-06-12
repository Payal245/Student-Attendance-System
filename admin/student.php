<?php
session_start();
if($_SESSION['uid']==1)
{
?>
<!doctype html5>
<html>
<head>
<title>Student </title>
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
<div class="back-screen_stud">
<form method="POST">
<h1 class="text-center" style="padding-top:15px;">ADD Student</h1>
<div style="padding-top:4px;">
<label class="lab">Roll No</label>
<div class="group" >
<input type="number_format" name="roll_no" placeholder="  Roll No. " style="width:300px;" >
</div>
</div>
<div style="padding-top:8px;">
<label class="lab">Student name</label>
<div class="group" >
<input type="text" name="stud_name" placeholder="  Student name" style="width:300px;" >
</div>
</div>
<div style="padding-top:8px;">
<label class="lab">Department</label>
<div class="group" >
<select name="dept">
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
<label class="lab">Semester name</label>
<div class="group" >
<select name="sem">
<option value="">Select</option>
<?php
include("connect.php");
$qr1="SELECT sem_id,sem FROM sem_detail";
$result2=mysqli_query($con,$qr1);
while($data2=mysqli_fetch_assoc($result2)){
	
echo "<option value={$data2[sem_id]}>{$data2[sem]}</option>";
}
?>
</select>
</div>
</div>
<div style="padding-top:8px;">
<label class="lab">Section name</label>
<div class="group" >
<select name="sec">
<option value="">Select</option>
<?php
include("connect.php");
$qr2="SELECT sec_id,section FROM section_detail";
$result3=mysqli_query($con,$qr2);
while($data3=mysqli_fetch_assoc($result3)){
	
echo "<option value={$data3[sec_id]}>{$data3[section]}</option>";
}
?>
</select>
</div>
</div>
<input class="btn btn-primary" type="submit" value="Add Student" name="add" style="width:300px;margin-top:16px; margin-left:45">
</form>
</div>	
</div>

<?php
if(isset($_POST['add'])){
	$roll_no=$_POST['roll_no'];
	$stud_name=$_POST['stud_name'];
	$dept=$_POST['dept'];
	$sem=$_POST['sem'];
	$sec_fk=$_POST['sec'];
	if($roll_no=='' or $stud_name=='' or $dept=='' or $sem=='' or $sec_fk==''){
		?>
		<script>
		alert("Please fill all detail");
		</script>
		<?php
	}
	else{
	$quer="INSERT INTO student_detail (roll_no, stud_name, dep_fk, sem_fk, sec_fk, attend, total) VALUES ('$roll_no','$stud_name', '$dept', '$sem', '$sec_fk', 0, 0)";
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