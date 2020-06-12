<!doctype html5>
<html>
<head>
<title>Department Update</title>
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
<th>Department Name </th>
<th>HOD Name</th>
<th>Update</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
include('connect.php');
$qr="SELECT * FROM department";
session_start();
$_SESSION['table']='department';
$result=mysqli_query($con,$qr);
while($data=mysqli_fetch_array($result)){
	echo "<tr><td>".$data['d_id']."</td><td>".$data['d_name']."</td><td>".$data['hod_name']."</td><td><form method='GET' action='dep_up_data.php'><button value={$data['d_id']} name='update' class='btn btn-primary'>Update</button></form></td><td><form method='POST' action='delete.php'><button value={$data['d_id']} name='delete' class='btn btn-primary' style='background-color:red;border:1px solid red;'>Delete</button></form></td></tr>";
	}
?>
</tbody>
</table>
</body>
</html>