<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	 include "studentdash.php";
		session_start();
		$conn=mysqli_connect("localhost","root","","studentportal");
		 $sql="SELECT * FROM commoninfo as c inner join studentdetailinfo as s on c.id=s.id where c.Username='$_SESSION[username]'";
		 $result=mysqli_query($conn,$sql);
		 $row=mysqli_fetch_assoc($result);
	 ?>				 	
		 
		 <form  method="post" action="../teacher/update.php">
		 	<table border = 1>
		 	<tr>
		 		<td>name</td>
		 		<td><?php echo $row['Name'];?></td>
		 		<td><input type ="text" name="name" value=<?php echo $row['Name'];?>></td>
		 	</tr>
	    	<tr>
	    		<td>Username</td
	    		><td><?php echo $row['Username'];?></td>
	    		<td>can't be changed</td>
	    	</tr>
	    	<tr>
		 		<td>Email</td>
		 		<td><?php echo $row['Email'];?></td>
		 		<td><input type ="text" name="email" value=<?php echo $row['Email'];?>></td>
		 	</tr>
		 	<tr>
		 		<td>semester</td>
		 		<td><?php Echo $row['Semester'];?></td>
		 		<td><input type ="text" name="semester"  value="<?php echo $row['Semester'];?>"></td>
		 	</tr>
			<tr>
			 	<td>PU registration numnber</td>
			 	<td><?php echo $row['PuRegis'];?></td>
			 	<td>can't be changed</td>
			</tr>
			 <tr>
			 	<td>College Registration Number</td>
			 	<td><?php echo $row['ClzRegis'];?></td>
			 	<td>can't be changed</td>
			 </tr>
		 </table>		
			<input type="submit"  name="submit" value="SAVE CHANGE" style="width:150px;">
		
    	</form>

</body>
</html>
<?php
	// if(isset(['submit']){
	// 	$name=$_POST['name'];
	// 	$email=$_POST['email'];
	// 	$semester=$_POST['semester'];
	// 	$sql2="UPDATE commoninfo set Name='$name',Email ='$email' where Username='$_SESSION[username]'";
	// 	mysqli_query($conn,$sql2);
	// 	$sql3="UPDATE studentdetailinfo set Semester='$semester' where id in( select id from commoninfo where Username='$_SESSION[username]')";
	// 	mysqli_query($conn,$sql3);
	// 	echo "changes are made sucessfully";

	
?>