<?php
include('connect.php');
$quer="UPDATE student_detail SET total = 0, attend = 0";
if($res=mysqli_query($con,$quer)){
	header('location:student_update.php');
	}
else{
	?>
		<script>alert("data is not updated");</script>
	<?php
	}
?>