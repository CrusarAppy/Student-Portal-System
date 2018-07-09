<html>
<head>
	<title></title>
</head>
<body>
<?php
	$conn=mysqli_connect("localhost","root","",'studentportal');
	$sql7="SELECT * FROM files";
	$result4=mysqli_query($conn, $sql7);
	while($row=mysqli_fetch_array($result4)){
		$path=$row['path'];
		$id=$row['ID'];
		echo '<img src="'.$path.'" width="100px" height="100px" />';

	}
?>
</body>
</html>