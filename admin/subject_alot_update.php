<!doctype html5>
<html>
<head>
<title>Subject_Alotted Update</title>
<link type="text/css" href='decor10.css' rel='stylesheet'>
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
<th>Teacher Name </th>
<th>Department</th>
<th>Sem</th>
<th>Section</th>
<th>Subject</th>
<th>Update</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
include('connect.php');
$qr="SELECT * FROM subject_alotted";
session_start();
$_SESSION['table']='subject_alotted';
$result=mysqli_query($con,$qr);
while($data=mysqli_fetch_array($result)){
	$dep=$data['dname_fk'];
	$qry="SELECT d_name FROM department WHERE d_id=$dep";
	$run=mysqli_query($con,$qry);
	$data1=mysqli_fetch_assoc($run);
	
	$tnme=$data['tname_fk'];
	$qry1="SELECT username FROM t WHERE t_id=$tnme";
	$run1=mysqli_query($con,$qry1);
	$data2=mysqli_fetch_assoc($run1);
	
	$sem=$data['sem_fk'];
	$qry2="SELECT sem FROM sem_detail WHERE sem_id=$sem";
	$run2=mysqli_query($con,$qry2);
	$data3=mysqli_fetch_assoc($run2);
	
	$sec=$data['sec_fk'];
	$qry3="SELECT section FROM section_detail WHERE sec_id=$sec";
	$run3=mysqli_query($con,$qry3);
	$data4=mysqli_fetch_assoc($run3);
	
	$sub=$data['subject_fk'];
	$qry4="SELECT sub_name FROM subject_detail WHERE sub_id=$sub";
	$run4=mysqli_query($con,$qry4);
	$data5=mysqli_fetch_assoc($run4);
	echo "<tr><td>".$data['id']."</td><td>".$data2['username']."</td><td>".$data1['d_name']."</td><td>".$data3['sem']."</td><td>".$data4['section']."</td><td>".$data5['sub_name']."</td><td><form method='GET' action='sub_data.php'><button name='update' value={$data['id']}  class='btn btn-primary'>Update</button></form></td><td><form method='POST' action='delete.php'><button value={$data['id']} name='delete' class='btn btn-primary' style='background-color:red;border:1px solid red;'>Delete</button></form></td></tr>";
	
}
?>
</tbody>
</table>
</body>
</html>