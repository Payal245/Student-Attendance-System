<!doctype html5>
<html>
<head>
<title>Login Page</title>
<link href="sundhr3.css" rel="stylesheet" type="text/css">
</head>
<body style='height:500px;'>
<div class="frnt">
<h1 style="color:white; text-align:center;padding-top:25px;">Student Attendance System</h1>
</div>
<div class='main'>
<div class='forget-box'>
<form method="POST">

<h1>Forgot Password</h1>
<div class='forget'>
<input type="text" name="uname" placeholder="Username">
</div>
<div class='forget'>
<input type="date" name="dob" placeholder="Date Of Birth">
</div>
<div class='forget' >
<input type="password" name="new_pass" placeholder="New Password" id='new'>
</div>
<div class='forget'>
<input type="password" name="con_pass" placeholder="Confirm Password" id='con'>
</div>
<input type="submit" value="Reset Password" name="login" class="btn">
</form>

</div>
</div>
<?php
include("connect.php");

if(isset($_POST['login'])){
	$username=$_POST['uname'];
    $dob=$_POST['dob'];
	$new_pass=$_POST['new_pass'];
	$con_pass=$_POST['con_pass'];
	if($username=='' or $dob=='' or $new_pass=='' or $con_pass=='')
	{
		?>
		<script>
		alert("Please Fill All Details");
		</script>
	<?php
	}
	elseif(strlen($new_pass)!=strlen($con_pass)){
		?>
		<script>
		alert("Again enter password");
        </script>		
		<?php
	}
	elseif($new_pass!=$con_pass)
	{
	?>
		<script>
		alert("Reagain enter password");
        </script>
	<?php
	}
	elseif(strlen($new_pass)<6){
		?>
		<script>
		alert("Please enter password of length more than 6 letter");
        </script>
	<?php
	}
	else{
	$encryptpass=password_hash($new_pass,PASSWORD_DEFAULT);
	$quer="UPDATE t SET password='$encryptpass' WHERE username='$username' and dob='$dob'";
	$result1=mysqli_query($con,$quer);
		if($result1){
			header('location:index.php');
		}
		else{
		?>
		<script>
		alert("please enter correct username or date of birth");
		</script>
		<?php
		}
    }
}
?>

</body>
</html>
