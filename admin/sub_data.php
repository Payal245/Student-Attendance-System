<?php
$val=$_GET['update'];
?>
<!doctype html5>
<html>
<head>
<title>Subject Alotted</title>
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
<div  class="hom_alot" >
<div class="back-screen_alot">
<form method="POST">
<h1 class="text-center" style="padding-top:15px;">Subject Alotted</h1>
<div style="padding-top:6px;">
<label class="lab-alot">Teacher name</label>
<div class="group-alot" >
<select name="t_name">
<option value="">Select</option>
<?php
include("connect.php");
$qr="SELECT t_id,username FROM t";
$result1=mysqli_query($con,$qr);
while($data1=mysqli_fetch_assoc($result1)){
	
echo "<option value={$data1[t_id]}>{$data1[username]}</option>";
}
?>
</select>
</div>
</div>
<div style="padding-top:8px;">
<label class="lab-alot">Department name</label>
<div class="group-alot" >
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
<label class="lab-alot">Semester name</label>
<div class="group-alot" >
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
<label class="lab-alot">Section name</label>
<div class="group-alot" >
<select name="sec">
<option value="">Select</option>
<?php
include("connect.php");
$qr="SELECT sec_id,section FROM section_detail";
$result1=mysqli_query($con,$qr);
while($data1=mysqli_fetch_assoc($result1)){
	
echo "<option value={$data1[sec_id]}>{$data1[section]}</option>";
}
?>
</select>
</div>
</div>
<div style="padding-top:8px;">
<label class="lab-alot">Subject name</label>
<div class="group-alot" >
<select name="sub">
<option value="">Select</option>
<?php
include("connect.php");
$qr="SELECT sub_id,sub_name FROM subject_detail";
$result1=mysqli_query($con,$qr);
while($data1=mysqli_fetch_assoc($result1)){
	
echo "<option value={$data1[sub_id]}>{$data1[sub_name]}</option>";
}
?>
</select>
</div>
</div>
<input class="btn btn-primary" type="submit" value="Subject Alotted" name="add" style="width:290px;margin-top:16px; margin-left:25">
</div>	
</div>

<?php
include("connect.php");
if(isset($_POST['add'])){
	$t_name=$_POST['t_name'];
	$dep_fk=$_POST['dep'];
	$sem_fk=$_POST['sem'];
	$sec_fk=$_POST['sec'];
	$sub_name=$_POST['sub'];
	if($t_name=='' or $dep_fk=='' or $sem_fk=='' or $sec_fk=='' or $sub_name==''){
		?>
		<script>
		alert("please fill All detail");
		</script>
		<?php
	}
	else{
	$quer="UPDATE subject_alotted SET tname_fk='$t_name',dname_fk='$dep_fk',sem_fk='$sem_fk',sec_fk='$sec_fk',subject_fk='$sub_name'WHERE id=$val";
	if(!mysqli_query($con,$quer)){
		?>
		<script>
		alert("Data is not updated");
		</script>
<?php
	}
	else{
		echo"data is updated";
	}
	}
}
?>
</body>
</html>