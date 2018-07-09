<html>
<head>
	<title></title>
</head>
<body>
	<?php
	session_start();
	 if($_SESSION['accountType']=="teacher"){
			 include "../teacher/teacherdash.php";
	 	}else if($_SESSION['accountType']=="student"){
	 		 include "studentdash.php";
	 	}
	?>
<?php

	$conn=mysqli_connect("localhost","root","",'studentportal');
	$sql="SELECT * FROM files";
	$result=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($result);
?>
	<table border =1>
		<tr>Download</tr>
		<?php
			for($i=1;$i<=$rowcount;$i++){
				$row=mysqli_fetch_assoc($result4);
			
		?>
		<tr>
			<td>
				<a href="uploads/<?php echo $row["name"]?>"><?php echo $row["name"]?></a>
			</td>

		</tr>
		<?php
	}
	?>
	
	</table><!-- while($row=mysqli_fetch_array($result4)){
		$path=$row['path'];
		$id=$row['ID'];
		$filename=$row['filename'];
		echo $filename."<br>";
		echo '<img src="'.$path.'" width="200px" height="200px"/><br>';
		echo '<a href="download.php?id='.$id.'">download</a><br><hr>';
	} -->

</body>
</html>