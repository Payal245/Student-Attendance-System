<?php
session_start();
if($_SESSION['uid']==1)
{
?>
<!doctype html5>
<html>
<head>
<title>Sem </title>
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
<div class="back-screen_sem">
<form method="POST">
<h1 class="text-center" style="padding-top:6px;">ADD Sem</h1>
<div style="padding-top:6px;">
<label class="lab_sem">Sem name</label>
<div class="group_sem" >
<input type="text" name="sem_name" placeholder="  Sem name" style="width:300px;" >
</div>
</div>
<input class="btn btn-primary" type="submit" value="Add Sem" name="add" style="width:300px;margin-top:16px; margin-left:30">
</form>
</div>	
</div>

<?php
include("connect.php");
if(isset($_POST['add'])){
	$sem_name=$_POST['sem_name'];
	if($sem_name==''){
		?>
		<script>
		alert('Please enter sem name');
		</script>
		<?php
	}
	else{
	$quer="INSERT INTO sem_detail (sem) VALUES ('$sem_name')";
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