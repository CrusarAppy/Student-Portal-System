<?php 

	session_start();
	$username=$_POST["username"];
	$password=$_POST["password"];
	//$name=$_POST["name"];
	//$semester=$_POST["semester"];
	//$teacherId=$_POST["teacherId"];
	//$course=$_POST["subject"];
	//$id=$_POST["id"];
	//$email=$_POST["email"];
	$accountType=$_POST["accountType"];

	$conn=mysqli_connect("localhost","root","",'studentportal');
	$sql="SELECT * FROM `commoninfo` WHERE `Username`= '$username' AND `Password` ='$password' ";
	
	//$sql= "SELECT commoninfo.id,commoninfo.name,teacherdetailinfo.TeacherId,subjectteach.Subject,courses.Semester FROM commoninfo INNER JOIN teacherdetailinfo ON commoninfo.id = teacherdetailinfo.id INNER JOIN subjectteach ON teacherdetailinfo.`Teacher Id`=subjectteach.`Teacher Id` INNER JOIN courses ON courses.Subject=subjectteach.Subject ";
	//$sql="SELECT commoninfo.id,commoninfo.name,commoninfo.username,commoninfo.Password,teacherdetailinfo.`Teacher Id`,subjectteach.Subject,courses.Semester FROM commoninfo INNER JOIN teacherdetailinfo ON commoninfo.id = teacherdetailinfo.id INNER JOIN subjectteach ON teacherdetailinfo.`Teacher Id`=subjectteach.`Teacher Id` INNER JOIN courses ON courses.Subject=subjectteach.Subject ";
	$result=mysqli_query($conn, $sql);
	$num_row = mysqli_num_rows($result);
	//var_dump($row);

	if($num_row==1){
		
		$row=mysqli_fetch_assoc($result);
		$_SESSION['id']=$row["id"];
		$_SESSION['username']=$row["Username"];
		$_SESSION['name']=$row['Name'];
		//$_SESSION['email']=$row['Email'];
		$_SESSION['accountType']=$row['AccountType'];
		$_SESSION['email']=$row['Email'];
		//$_SESSION['subject']=$row['Subject'];
		//$_SESSION['semester']=$row['Semester'];
		if($row['AccountType']=="teacher"){
			header('location: ../teacher/hometeacher.php');
		}elseif($row['AccountType']=="admin"){
			header('location: ../admin/admin.php');
		}
		else{
			header('location: ../student/homestudent.php');
		}
	}

	else{
		$_SESSION['error']="INCORRECT USERNAME OR PASSWORD!";
		header("location: ../index.php");
	}
		
 ?>