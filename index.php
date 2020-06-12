<!doctype html5>
<html>
<head>
<title>Login Page</title>
<link href="sundhr3.css" rel="stylesheet" type="text/css">
<style>
#forgt{
	color:white;
	text-decoration:none;
	padding-left:60px;
	padding-top:6px;
}
#forgt:hover{
	color:blue;
	text-decoration:underline;
}
</style>

</head>
<body style='height:500px;'>
<div class="frnt">
<h1 style="color:white; text-align:center;padding-top:25px;">Student Attendance System</h1>
</div>
<div class='main'>
<div class="login-box">
<form method="POST">

<h1>Login</h1>
<div class="sign">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" name="uname" placeholder="Username">
</div>
<div class="sign">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" name="paswrd" placeholder="Password">
</div>
<input type="submit" value="Submit" name="login" class="btn">
<a href='forgetpassword.php' id='forgt'>Forgotten Password??</a>
</form>

</div>
</div>
<?php
include("connect.php");

if(isset($_POST['login'])){
	$username=$_POST['uname'];
    $password=$_POST['paswrd'];
	$qr="SELECT * FROM t WHERE username= '$username'";
	$result1=mysqli_query($con,$qr);
	$row=mysqli_num_rows($result1);
		if($row<1){
		?>
		<script>
		alert("please enter correct username");
		</script>
		<?php
	}
	else{
		$data=mysqli_fetch_assoc($result1);
		if(password_verify($password,$data['password']))
		{
		
		$id=$data['t_id'];
		session_start();
		$_SESSION['uid']=$id;
		    if($_SESSION['uid']==1){
				header('location:admin/adminpanel.php');
		    }
		    else{
				header('location:front_panel/home.php');
			}
}
        else{
	?>
	<script>
	alert("please enter correct password");
    </script>
<?php
         }
	}
}
?>
</body>
</html>
