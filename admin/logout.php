<html>
<body>
<?php
session_start();
if($_SESSION['uid'])
{
	session_destroy();
    header('location: ../');
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
	