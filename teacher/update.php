<?php
session_start();
$conn=mysqli_connect("localhost","root","","studentportal");
if($_SESSION['accountType']=="teacher"){
	 $name=$_POST['name'];
	$email=$_POST['email'];
	$speciality=$_POST['speciality'];
	$enrollyear=$_POST['enrollyear'];
	$experience=$_POST['experience'];
	 $sql="UPDATE commoninfo set Name='$name',Email ='$email' where Username='$_SESSION[username]'";
	 $row=mysqli_query($conn,$sql);
	 $sql1="UPDATE teacherdetailinfo set Speciality='$speciality',Experience ='$experience',EnrollYear='$enrollyear' where id in( select id from commoninfo where Username='$_SESSION[username]')";
	 mysqli_query($conn,$sql1);
}else if($_SESSION['accountType']=="student"){
		 $name=$_POST['name'];
		$email=$_POST['email'];
		$semester=$_POST['semester'];
		 $sql2="UPDATE commoninfo set Name='$name',Email ='$email' where Username='$_SESSION[username]'";
		mysqli_query($conn,$sql2);
		
	 $sql3="UPDATE studentdetailinfo set Semester='$semester' where id in( select id from commoninfo where Username='$_SESSION[username]')";
	 mysqli_query($conn,$sql3);
	}	
echo "changes are done sucessfully";
?>
