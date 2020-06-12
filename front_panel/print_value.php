<?php
include('connect.php');
if(isset($_POST['present'])){
	$id=$_POST['present'];
	$q="SELECT attend,total from student_detail WHERE roll_no=$id";
	$res=mysqli_query($con,$q);
	$data=mysqli_fetch_assoc($res);
	$attend=$data['attend']+1;
	$total=$data['total']+1;
	$quer="UPDATE student_detail SET attend='$attend', total='$total' WHERE roll_no=$id";
	if($res=mysqli_query($con,$quer)){
		header('location:attendance.php');
	}
	else{
		?>
		<script>alert("Plz again try");</script>
		<?php
	}
	}
elseif(isset($_POST['absent'])){
	$id=$_POST['absent'];
	$q="SELECT total from student_detail WHERE roll_no=$id";
	$res=mysqli_query($con,$q);
	$data=mysqli_fetch_assoc($res);
	$total=$data['total']+1;
	$quer="UPDATE student_detail SET  total='$total' WHERE roll_no=$id";
	if($res=mysqli_query($con,$quer)){
		header('location:attendance.php');
	}
	else{
		?>
		<script>alert("Plz again try");</script>
		<?php
	}
	}
	
else{
	echo "hello";
}
?>