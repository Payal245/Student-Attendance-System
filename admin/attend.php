<?php
if(isset($_POST['sec'])){	
?>

<!doctype html5>
<html>
<head>
<title>Report </title>
<link type="text/css" href='decor12.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<style>
.clear:hover{
color:blue;
text-decoration:underline;
}
</style>
</head>
<body>
<div class="header">
<h1 class="attend">Student Attendance System</h1>
</div>
<div class="st" style='padding-left:780px;'>
<div>
<?php
include('connect.php');
session_start();
$dep=$_SESSION['d'];
$sem=$_SESSION['sem'];
$q="SELECT DISTINCT sec_fk FROM student_detail WHERE dep_fk='$dep' and sem_fk='$sem'";
$res1=mysqli_query($con,$q);
while($dat=mysqli_fetch_assoc($res1)){
	$sec=$dat['sec_fk'];
	$q1="SELECT sec_id,section FROM section_detail WHERE sec_id=$sec";
	$res2=mysqli_query($con,$q1);
	$data2=mysqli_fetch_assoc($res2);
	echo "<label style='padding-left:30px;padding-top:10px;'><form method='POST' action='attend.php'><button style='border:none;outline:none;background:none;' name='sec' class='clear' value='".$data2['sec_id']."'><strong>".$data2['section']."</strong></button></form></label>";
}
?>
<label style="padding-left:35px;"><strong><a href="adminpanel.php" class="m1">Home</a></strong></label>
<label style="padding-left:35px;"><strong><a href="profile.php" class="m1">Profile</a></strong></label>
<label style="padding-left:35px;"><strong><a href="logout.php" class="m1">Logout</a></strong></label>
</div>
</div>
<header>
<table class='table table-striped'>
<thead>
<tr>
<th>Roll No.</th>
<th>Student Name </th>
<th>Total</th>
<th>Attend</th>
<th>Percentage</th>
</tr>
</thead>
<tbody>
<?php
$s=$_POST['sec'];
$de=$_SESSION['d'];
$sem1=$_SESSION['sem'];
$quer="SELECT roll_no,stud_name,attend,total FROM student_detail WHERE sec_fk='$s' and sem_fk ='$sem1' and dep_fk='$de'";
$res3= mysqli_query($con,$quer);
while($data3=mysqli_fetch_array($res3)){
	$attend=$data3['attend'];
	$total=$data3['total'];
	if ($total==0){
		$percnt=0;
	}
	else{
	$percnt=($attend/$total)*100;
	}
	echo "<tr><td>".$data3['roll_no']."</td><td>".$data3['stud_name']."</td><td>".$data3['total']."</td><td>".$data3['attend']."</td><td>".round($percnt,2)."% </td></tr>";
}

?>
</tbody>
</table>
</header>

</body>
</html>
<?php
}
?>