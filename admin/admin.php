<?php
	$conn=mysqli_connect("localhost","root","",'studentportal');

	session_start();

	$username=$_SESSION['username'];
	$sql= " SELECT * FROM `commoninfo` WHERE `Username`='$username'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	$name=$row['Name'];
	$username=$row['Username'];
	$email=$row['Email'];
	$accounttype=$row['AccountType'];
	//var_dump($row);
?>
 
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h2>Welcome <strong> <?php echo $name;  ?></strong></h2>
 		you are successfully logged in.
 	

 	<form action="../login/logout.php">
 	<button> logout</button>
    </form>
 
 </body>
 </html>


