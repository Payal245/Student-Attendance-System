<?php
session_start();
if($_SESSION['uid']==1)
{
?>
<!doctype html5>
<html>
<head>
<title>Section </title>
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
<div class="back-screen_sec">
<form method="POST">
<h1 class="text-center" style="padding-top:15px;">ADD Sections</h1>
<div style="padding-top:6px;">
<label class="lab">Section name</label>
<div class="group" >
<input type="text" name="sec_name" placeholder="  Section name" style="width:300px;" >
</div>
</div>
<input class="btn btn-primary" type="submit" value="Add Section" name="add" style="width:300px;margin-top:16px; margin-left:45">
</div>	
</div>

<?php
include("connect.php");
if(isset($_POST['add'])){
	$sec_name=$_POST['sec_name'];
	if($sec_name==''){
		?>
		<script>
		alert("please enter section name");
		</script>
	<?php
	}
	else{
	$quer="INSERT INTO section_detail (section) VALUES ('$sec_name')";
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