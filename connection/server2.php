<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentportal";

$name= $_POST["name"];
$uname=$_POST["username"];
$pword=$_POST["password"];
$email=$_POST["email"];
$puregis=$_POST["puregis"];
$clzregis=$_POST["clzregis"];
$semester=$_POST["semester"];
$accountType=$_POST["accountType"];
$spec=$_POST["speciality"];
$enrollYear=$_POST["enroll"];
$experience=$_POST["experience"];
$teacherId=$_POST["teacherId"];



$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

		 //foreach($course as $sub1){
			//$sub .= $sub1 . ","  ;
		//}
 $sql7="SELECT * FROM `commoninfo` WHERE `username`= '$uname'";	
 $result4=mysqli_query($conn, $sql7);
$num_row = mysqli_num_rows($result4);
if($num_row==0){	
		
if($accountType == 'admin'){
	
		 
		 // $target_dir = "uploads/";
		 // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		 // $uploadOk = 1;
		 // $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		 // $image=basename( $_FILES["fileToUpload"]["name"],".jpg");

		$sql = "INSERT INTO commoninfo (Name,Username,Password,Email,AccountType) VALUES ('$name','$uname','$pword','$email','$accountType')";
		// if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  //  	    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		// } else {
  //  		 echo "Sorry, there was an error uploading your file.";}

		if (mysqli_query($conn,$sql)){
    		echo "commoninfo successfully <br>";
		}else {
   	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	elseif ($accountType== 'student') {
		// $target_dir = "uploads/";
		//  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		//  $uploadOk = 1;
		//  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		//  $image=basename( $_FILES["fileToUpload"]["name"],".jpg");

		// if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  //  	    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		// } else {
  //  		 echo "Sorry, there was an error uploading your file.";}
	
		$sql = "INSERT INTO commoninfo (Name,Username,Password,Email,AccountType) VALUES ('$name','$uname','$pword','$email','$accountType')";


		if (mysqli_query($conn,$sql)){
    		echo "commoninfo successfully <br>";
		}else {
   	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		//editted
		//$last_id = mysqli_insert_id();
	
		$sql2= "INSERT INTO studentdetailinfo (id,PuRegis,ClzRegis,Semester) VALUES ((SELECT LAST_INSERT_ID()),'$puregis','$clzregis','$semester')";

		if (mysqli_query($conn,$sql2)){
    		echo "student created successfully <br>";
		}else {
   	    	echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
		}
	  
	}
	else{
		$course=$_POST["courses"];
		$arr_length = count($course);
		$sub = "";
		//  $target_dir = "uploads/";
		//  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		//  $uploadOk = 1;
		//  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		//  $image=basename( $_FILES["fileToUpload"]["name"],".jpg");

		// if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  //  	    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		// } else {
  //  		 echo "Sorry, there was an error uploading your file.";}
	
		$sql = "INSERT INTO commoninfo (Name,Username,Password,Email,AccountType) VALUES ('$name','$uname','$pword','$email','$accountType')";


		if (mysqli_query($conn,$sql)){
    		echo "commoninfo successfully <br>";
		}else {
   	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		$sql3= "INSERT INTO teacherdetailinfo (id,`TeacherId`,`Speciality`, `EnrollYear`, `Experience`) VALUES ((SELECT LAST_INSERT_ID()),'$teacherId','$spec','$enrollYear','$experience')";

		if (mysqli_query($conn,$sql3)){
    		echo "teacher created successfully <br>";
		}else {
   	    	echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
		}

		
		for ($i=0; $i<$arr_length ; $i++){
			$sub = $course[$i];

			$sql4="INSERT INTO subjectteach (`Subject`,`TeacherId` ) VALUES ('$sub','$teacherId')";
			mysqli_query($conn,$sql4);
			
		}
		
		
    	

	}
	$_SESSION['message']="Account Created successfully";
	header('location: ../index.php');
}
else{
	$_SESSION['registererror']="Username already taken";
	header('location: ../registerOperation/registerfinal.php');
}
		


		// if (mysqli_query($conn,$sql4)){
  //   		echo "teachsubject successfully <br>";
		// 	}else {
  //  	    	echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
		// 	}



	
mysqli_close($conn);
?>