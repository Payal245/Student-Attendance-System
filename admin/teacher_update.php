<!doctype html5>
<html>
<head>
<title>Teacher Update</title>
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
<th>Teacher Name </th>
<th>Qualification</th>
<th>DOB</th>
<th>Gender</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
include('connect.php');
$qr="SELECT * FROM t";
session_start();
$_SESSION['table']='t';
$result=mysqli_query($con,$qr);
while($data=mysqli_fetch_array($result)){
	if($data['t_id']>1){
	echo "<tr><td>".$data['t_id']."</td><td>".$data['username']."</td><td>".$data['qualification']."</td><td>".$data['dob']."</td><td>".$data['gender']."</td><td><form method='POST' action='delete.php'><button value={$data['t_id']} name='delete' class='btn btn-primary' style='background-color:red;border:1px solid red;'>Delete</button></form></td></tr>";
	}
}
?>
</tbody>
</table>
</body>
</html>