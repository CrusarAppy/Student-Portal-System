//20\d{2}-\d{1}-\d{2}-\d{4}
//1000-1-12-2014
//\d{4}-\d{1}-\d{2}-\d{4}

<?php
	$conn=mysqli_connect("localhost","root","",'studentportal');

	session_start();

	$username=$_POST["username"];
	$password=$_POST["password"];
	$email=$_POST["email"];
	$accountType=$_POST["accountType"];
	$spec=$_POST["speciality"];
	$enrollYear=$_POST["enroll"];
	$experience=$_POST["experience"];
	$teacherId=$_POST["teacherId"];

	$conn=mysqli_connect("localhost","root","",'studentportal');
	$sql="SELECT * FROM commoninfo as C , teacherdetailinfo as T WHERE C.id = T.id ";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);

?>
<html>
<head>
	<title></title>
</head>
<body>
	Welcome <?php  ?>

</body>
</html>