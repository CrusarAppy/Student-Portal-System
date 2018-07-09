<html>
<head>
	<title></title>
	<meta charset="UTF-8">
  
  <title>Teacher Welcome</title>
  
</head>
<body>
  <?php include "teacherdash.php" ;?>
<!-- 	<header>
    <h1> Gandaki College of Engineering and Science<br>
     <span id="lamachour"> Lamachaur,Pokhara </span></h1> -->
    <?php
	$conn=mysqli_connect("localhost","root","",'studentportal');

	session_start();

	$username=$_SESSION['username'];
	$sql= " SELECT * FROM `commoninfo` WHERE `Username`='$username'";
	$sql= "SELECT commoninfo.id,commoninfo.name,commoninfo.username,commoninfo.Password,teacherdetailinfo.TeacherId,subjectteach.Subject,courses.Semester FROM commoninfo INNER JOIN teacherdetailinfo ON commoninfo.id = teacherdetailinfo.id INNER JOIN subjectteach ON teacherdetailinfo.TeacherId=subjectteach.TeacherId INNER JOIN courses ON courses.Subject=subjectteach.Subject";
	
 	$result=mysqli_query($conn, $sql);
	//$row=mysqli_fetch_assoc($result);
	//$name=$row['name'];
	//$sybject=$row['Subject'];
	//$id=$row['TeacherId'];
     
   	//var_dump($row);
?>
 <p> Welcome <?php echo $_SESSION['name'] .  "!" ."<br>"; ?> </p>
</body>
</html>