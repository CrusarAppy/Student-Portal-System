<?php
session_start();
$user_id = $_SESSION['username'];
$password1 = $_POST['password1'];
$password2 = $_REQUEST['password2'];

$conn=mysqli_connect("localhost","root","",'studentportal');
$sql = mysqli_query($conn, "SELECT Password,salt
                                  FROM commoninfo WHERE id ='".$user_id."'");
while($row = mysqli_fetch_array($sql)){ 
	$salt = $row['salt'];
	$password = $password1;
	$hash = md5($salt . $password);

mysqli_query($conn, "UPDATE commoninfo SET Password = '".$hash."' WHERE username='".$user_id."'");
}
?><html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="functions.php">
		Password: <input type="password" name="password1" id="password1" /><br>
		Confirm Password: <input type="password" name="password2" id="password2" /><br>
        <input type="submit" value="Change Password" />
	</form>
</body>
</html>
