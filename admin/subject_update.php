<!doctype html5>
<html>
<head>
<title>Subject Update</title>
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
<table class="table table-striped">
<thead>
<tr>
<th>Id</th>
<th>Subject </th>
<th>Department</th>
<th>Sem</th>
<th>Update</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
include('connect.php');
$qr="SELECT * FROM subject_detail";
session_start();
$_SESSION['table']='subject_detail';
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
	echo "<tr><td>".$data['sub_id']."</td><td>".$data['sub_name']."</td><td>".$data1['d_name']."</td><td>".$data2['sem']."</td><td><form method='GET' action='subject_up_data.php'><button name='update' value={$data['sub_id']} class='btn btn-primary'>Update</button></form></td><td><form method='POST' action='delete.php'><button value={$data['sub_id']} name='delete' class='btn btn-primary' style='background-color:red;border:1px solid red;'>Delete</button></form</td></tr>";
	
}
?>
</tbody>
</table>
</body>
</html>