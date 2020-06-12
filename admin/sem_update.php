<!doctype html5>
<html>
<head>
<title>Semester Update</title>
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
<table class="table table-striped" style="padding-left:10px;">
<thead>
<tr>
<th>Id</th>
<th>Semester </th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
include('connect.php');
$qr="SELECT * FROM sem_detail";
session_start();
$_SESSION['table']='sem_detail';
$result=mysqli_query($con,$qr);
while($data=mysqli_fetch_array($result)){
	echo "<tr><td>".    $data['sem_id']."</td><td>".$data['sem']."</td><td><form method='POST' action='delete.php'><button value={$data['sem_id']} name='delete' class='btn btn-primay' style='background-color:red;border:1px solid red;color:white;'>Delete</button></form><td></tr>";
	}
?>
</tbody>
</table>
</body>
</html>