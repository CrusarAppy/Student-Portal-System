 <?php
	$conn=mysqli_connect("localhost","root","",'studentportal');

	session_start();

	$username=$_SESSION['username'];
	// $sql= "SELECT commoninfo.id,commoninfo.name,commoninfo.username,commoninfo.Password,teacherdetailinfo.TeacherId,subjectteach.Subject,courses.Semester FROM commoninfo INNER JOIN teacherdetailinfo ON commoninfo.id = teacherdetailinfo.id INNER JOIN subjectteach ON teacherdetailinfo.TeacherId=subjectteach.TeacherId INNER JOIN courses ON courses.Subject=subjectteach.Subject";
	$sql="SELECT Subject from subjectteach where TeacherId in ( Select TeacherId from commoninfo,teacherdetailinfo where commoninfo.id=teacherdetailinfo.id and commoninfo.username='$username')";
 	$result=mysqli_query($conn, $sql);
	//$row=mysqli_fetch_assoc($result);
	//$name=$row['name'];
	//$sybject=$row['Subject'];
	//$id=$row['TeacherId'];
     
   	//var_dump($row);
?>

 
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php include "teacherdash.php" ;?>
 	   Welcome <?php echo $_SESSION['name'] . "<br>"; ?>
 		<?php
 			while($row=mysqli_fetch_assoc($result)){ 	

 			$subject = urlencode($row['Subject'])	;	
 			echo "<a href=inserttest.php?subject=$subject>$row[Subject]</a><br>"; 
 			

 		} ?>
 		<!-- <form action="" method="POST">
 			Upload file:
 			<input type="file" name="fileToUpload" id="fileToUpload">
 		</form> -->
  	
 
 </body>
 </html>


