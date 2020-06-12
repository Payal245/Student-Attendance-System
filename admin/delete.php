<?php
session_start();
include('connect.php');
if(isset($_POST['delete'])){
	$table=$_SESSION['table'];
	if($table=='t')
	{
		$val=$_POST['delete'];
		$qry="DELETE  FROM t WHERE t_id=$val";
		$res=mysqli_query($con,$qry);
		header('location:teacher_update.php');
	}
	elseif($table=='department'){
		$val=$_POST['delete'];
		$qry="DELETE  FROM department WHERE d_id=$val";
		$res=mysqli_query($con,$qry);
		header('location:deparmnt_update.php');
    }
	elseif($table=='student_detail'){
        $val=$_POST['delete'];
		$qry="DELETE  FROM student_detail WHERE roll_no=$val";
		$res=mysqli_query($con,$qry);
		header('location:student_update.php');		

	}
	elseif($table=='sem_detail'){
        $val=$_POST['delete'];
		$qry="DELETE  FROM sem_detail WHERE sem=$val";
		$res=mysqli_query($con,$qry);
		header('location:sem_update.php');		

	}
	elseif($table=='section_detail'){
        $val=$_POST['delete'];
		$qry="DELETE  FROM section_detail WHERE sec_id=$val";
		$res=mysqli_query($con,$qry);
		header('location:section_update.php');		

	}
	elseif($table=='subject_detail'){
        $val=$_POST['delete'];
		$qry="DELETE  FROM subject_detail WHERE sub_id=$val";
		$res=mysqli_query($con,$qry);
		header('location:subject_update.php');		

	}
	elseif($table=='subject_alotted'){
        $val=$_POST['delete'];
		$qry="DELETE  FROM subject_alotted WHERE id=$val";
		$res=mysqli_query($con,$qry);
		header('location:subject_alot_update.php');		

	}
		
}
?>