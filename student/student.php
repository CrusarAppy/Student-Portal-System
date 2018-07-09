<?php
$conn=mysqli_connect("localhost","root","","studentportal");
session_start();
$name=$_SESSION['username'];
//$sql= "	SELECT 	courses.Subject,courses.Semester FROM  ((courses INNER JOIN studentdetailinfo ON courses.Semester=studentdetailinfo.Semester) inner join commoninfo  on  commoninfo.id = studentdetailinfo.id)";
$sql="SELECT Subject from courses where Semester in ( Select Semester from commoninfo,studentdetailinfo where commoninfo.id=studentdetailinfo.id and commoninfo.username='$name')";
$result=mysqli_query($conn, $sql);


?>
<html>
<left
	<title></title>
	<style type="text/css">
	.center{
		text-align: center;
		color:green;
		font-size: 30px;

	}

	</style>
</head>
<body>
	<?php include "studentdash.php" ;?>
	<div class="center">
	Welcome <?php echo $_SESSION['name'] . "<br>"; ?> </div>
	<div class = "subject-name">
 		<?php
 			while($row=mysqli_fetch_assoc($result)){
 			$subject =urlencode($row['Subject']);			
 			echo "<a href=viewMarks.php?subject=$subject>$row[Subject]</a>. <br>"; 
 		} ?>
 	</div>
</body>
</html>
</form>
