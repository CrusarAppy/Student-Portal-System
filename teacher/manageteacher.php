<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	 include "teacherdash.php";
		session_start();
		$conn=mysqli_connect("localhost","root","","studentportal");
		$sql="SELECT c.Name,c.Username,c.Email,t.Speciality,t.Experience,t.EnrollYear from commoninfo as c inner join teacherdetailinfo as t on c.id=t.id inner join subjectteach as s on t.TeacherId=s.TeacherId where c.Username='$_SESSION[username]'";
		 $result=mysqli_query($conn,$sql);
		 $row=mysqli_fetch_assoc($result);
	 ?>				 	
		 
		 <form  method="post" action="update.php">
		 	<table border =1>
					 	<tr>
					 		<td>name</td>
					 		<td><?php echo $row['Name'];?></td>
					 		<td><input type ="text" name="name" value=<?php echo $row['Name'];?>></td>
					 	</tr>
			   			<tr>
					    	<td>Username</td>
					    	<td><?php echo $row['Username'];?></td>
					    	<td>can't be changed</td>
					    </tr>
					    <tr>
					 		<td>Email</td>
					 		<td><?php echo $row['Email'];?></td>
					 		<td><input type ="text" name="email" value=<?php echo $row['Email'];?>></td>
					 	</tr>
					 	<tr>
					 		<td>Speciality</td>
					 		<td><?php echo $row['Speciality'];?></td>
					 		<td><input type ="text" name="speciality" value=<?php echo $row['Speciality'];?>></td>
					 	</tr>
					 	<tr>
					 		<td>Enroll Year</td>
					 		<td><?php echo $row['EnrollYear'];?></td>
					 		<td><input type ="text" name="enrollyear" value=<?php echo $row['EnrollYear'];?>></td>
					 	</tr>
					 	<tr>
					 		<td>Experience</td>
					 		<td><?php echo $row['Experience'];?></td>
					 		<td><input type ="text" name="experience" value=<?php echo $row['Experience'];?>></td>
					 	</tr>
					 </table>		
			<input type="submit"  name="submit" value="SAVE CHANGE" style="width:150px;">
		
    	</form>
    	
    	<?php
    	//if(isset(['submit']){
   //  		$name=$_POST['name'];
			// $email=$_POST['email'];
			// $speciality=$_POST['speciality'];
			// $enrollyear=$_POST['enrollyear'];
			// $experience=$_POST['experience'];
			// $sql="UPDATE commoninfo set Name='$name',Email ='$email' where Username='$_SESSION[username]'";
			// $row=mysqli_query($conn,$sql);
			// $sql1="UPDATE teacherdetailinfo set Speciality='$speciality',Experience ='$experience',EnrollYear='$enrollyear' where id in( select id from commoninfo where Username='$_SESSION[username]')";
			// mysqli_query($conn,$sql1);
			// echo "changes are made sucessfully";

   //  	}
    	?>

</body>
</html>