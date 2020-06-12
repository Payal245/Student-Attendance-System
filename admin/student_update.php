<!doctype html5>
<html>
<head>
<title>Student Update</title>
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
<div style='height:40px;padding-left:940px;padding-top:10px;'>
<button class='btn btn-primary' name='clear' onclick='clearall()'>Clear All Student Attendance</button>
</div>
<div style='padding-top:20px;'>
<table class="table table-striped">
<thead>
<tr>
<th>Roll No</th>
<th>Student Name </th>
<th>Department</th>
<th>Sem</th>
<th>Section</th>
<th>Update</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
include('connect.php');
$qr="SELECT * FROM student_detail";
session_start();
$_SESSION['table']='student_detail';
$result=mysqli_query($con,$qr);
while($data=mysqli_fetch_array($result)){
	$dep=$data['dep_fk'];
	$qry="SELECT d_name FROM department WHERE d_id=$dep";
	$run=mysqli_query($con,$qry);
	$data1=mysqli_fetch_assoc($run);
	
	$sem=$data['sem_fk'];
	$qry1="SELECT sem FROM sem_detail WHERE sem_id=$sem";
	$run1=mysqli_query($con,$qry1);
	$data2=mysqli_fetch_assoc($run1);
	
	$sec=$data['sec_fk'];
	$qry2="SELECT section FROM section_detail WHERE sec_id=$sec";
	$run2=mysqli_query($con,$qry2);
	$data3=mysqli_fetch_assoc($run2);
	echo "<tr style='line-height:40px;'><td>".$data['roll_no']."</td><td>".$data['stud_name']."</td><td>".$data1['d_name']."</td><td>".$data2['sem']."</td><td>".$data3['section']."</td><td><form method='GET' action='student_up_data.php'><button name='update' class='btn btn-primary'  value={$data['roll_no']}>Update</button></form></td><td><form method='POST' action='delete.php'><button value={$data['roll_no']} name='delete'  class='btn btn-primary de'  style='background-color:red;border:1px solid red;'>Delete</button></form></td></tr>";
	
}
?>
</tbody>
</table>
</div>
<script>
function clearall(){
	if(confirm("Do u want clear all student attendance")){
		window.location.href='clearattend.php';
		return true;
	}
}
</script>
</body>

</html>