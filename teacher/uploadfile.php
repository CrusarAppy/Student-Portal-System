
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="uploadfile.css">
	
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
	
	<form action="" method='post' name="form1" enctype="multipart/form-data">
  		 <br>
		<input type="file" name="f" placeholder="file"/><br><br>
		<input type="text" name="filename" value="Add description of file" placeholer="file name"/><br>
		<input type="submit" name="submit1" value="Upload"/>
	</form> 
</body>
</html>
<?php
	if(isset($_POST['submit1'])){
	$filename=$_POST['filename'];
	$conn=mysqli_connect("localhost","root","",'studentportal');
	if (isset($_POST["submit1"])){
		$fnm=$_FILES["f"]["name"];
		$dst="./uploads/".$fnm;
		$file1=explode(".", $fnm);
		$ext=$file1[1];
		$allowed=array("jpg","png","gif","pdf","wmv","pdf","zip");
		if(in_array($ext,$allowed)){
			move_uploaded_file($_FILES["f"]["tmp_name"],$dst);
		}
		$sql="INSERT INTO files(filename,name,path) values ('$filename','$fnm','$dst')";
		$result=mysqli_query($conn,$sql);
		if($result==true){
			echo "file inserted";
		}
	}

	}	 
	?>