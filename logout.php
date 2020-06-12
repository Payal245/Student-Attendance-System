<html>
<body>
<?php
session_start();
if($_SESSION['uid'])
{
	session_destroy();
?>
<script>
alert("Logout successfully");
</script>
<?php
header('location:login.php');
}
else{
?>
	<script>
	alert("login Firstly");
	</script>
<?php
}
?>
</body>
</html>
	