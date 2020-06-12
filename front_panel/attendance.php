<?php
session_start();
if(isset($_SESSION['uid'])){
?>
<!doctype html5>
<html>
<head>
<title>Attendance Sheet</title>
<link type="text/css" href='design1.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="header">
<h1 class="attend">Student Attendance System</h1>
</div>
<div class="st">
<label style="padding-left:60px;padding-top:10px;"><strong><a href="home.php" class="m1">Home</a></strong></label>
<label style="padding-left:35px; "><strong><a href="t_profile.php" class="m1">Profile</a><strong></label>
<label style="padding-left:35px; "><strong><a href="logout.php" class="m1">Logout</a><strong></label>
</div>
<table class='table table-striped' >
<thead>
<?php
include("connect.php");
	$dep1=$_SESSION['dept'];
	$sem2=$_SESSION['sem'];
	$sec1=$_SESSION['sec'];
	$qu="SELECT roll_no,stud_name FROM student_detail WHERE dep_fk='$dep1' AND sem_fk='$sem2' AND sec_fk='$sec1'";
	$res=mysqli_query($con,$qu);
	echo "<th>  Roll No</th><th>Name</th><th>Present </th><th>Absent</th></thead>";
	while($row=mysqli_fetch_array($res)){
	echo "<tr><td> ".  $row['roll_no']."</td><td> ".$row['stud_name']."</td><td><form method='POST'><input type='radio' name='attend{$row['roll_no']}' value='{$row['roll_no']},Present'></td><td><input type='radio' name='attend{$row['roll_no']}' checked value='{$row['roll_no']},Absent' name='absent'></td></tr>";	
	}
	echo "<tr><td colspan='4' style='text-align:right;'><button class='btn btn-primary' name='click'>Submit</button></td></tr></form>";

?>
</table>
<?php
if(isset($_POST['click'])){
	$dep1=$_SESSION['dept'];
	$sem2=$_SESSION['sem'];
	$sec1=$_SESSION['sec'];
	$qu1="SELECT roll_no FROM student_detail WHERE dep_fk='$dep1' AND sem_fk='$sem2' AND sec_fk='$sec1'";
	$res1=mysqli_query($con,$qu1);
	while($row1=mysqli_fetch_array($res1)){
		$attend=explode(",",$_POST['attend'.$row1['roll_no']]);
		$attend_val=$attend[0];
		$attend_type=$attend[1];
		$qt="SELECT attend,total from student_detail WHERE roll_no=$attend_val";
		$res2=mysqli_query($con,$qt);
	    $data=mysqli_fetch_assoc($res2);
		if($attend_type=='Present'){
			$atnd=$data['attend']+1;
			}
		elseif($attend_type=='Absent'){
			$atnd=$data['attend'];
			}
	    $total=$data['total']+1;
		$quer="UPDATE student_detail SET attend='$atnd',total='$total' WHERE roll_no=$attend_val";
	    if($res=mysqli_query($con,$quer)){
			?>
			<script>
			alert("attendance perform Succesfuly");
			</script>
	<?php
    header('location:home.php');	
	}
	else{
		?>
		<script>alert("Attendance is failed");</script>
		<?php
	}
	}
}
?>
</body>
</html>
<?php
}
?>