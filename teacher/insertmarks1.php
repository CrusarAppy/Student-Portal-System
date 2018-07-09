<?php
// var_dump($_POST);
// die;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentportal";

$conn=mysqli_connect("localhost","root","",'studentportal');

$roll=$_POST['roll'];
$subject=$_POST['subject'];
$unitTest1=$_POST['unitTest1'];
$unitTest2=$_POST['unitTest2'];
$labPerformance=$_POST['labPerformance'];
$practicalExam=$_POST['practicalExam'];
$attendance=$_POST['attendance'];
$assignment=$_POST['assignment'];
$finalAssessment=$_POST['finalAssessment'];
$extraCredit=$_POST['extraCredit'];

$array=array(); //creating the array to store the data.

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

if (isset($_POST['submit'])) {

$i = 0;
foreach ($_POST['roll'] as $key => $value) {
	$array[$i]["roll"] =$value; 
         $i++;
	
}
$i=0;
foreach ($_POST['subject'] as $key => $value) {
	$array[$i]["subject"] =$value; 
         $i++;
	
}
$i=0;
foreach ($_POST['unitTest1'] as $key => $value) {
	$array[$i]["unitTest1"] =$value; 
         $i++;
	
}
$i=0;
foreach ($_POST['unitTest2'] as $key => $value) {
	$array[$i]["unitTest2"] =$value; 
         $i++;
	
}
$i=0;
foreach ($_POST['labPerformance'] as $key => $value) {
	$array[$i]["labPerformance"] =$value; 
         $i++;
	
}
$i=0;
foreach ($_POST['practicalExam'] as $key => $value) {
	$array[$i]["practicalExam"] =$value; 
         $i++;
	
}
$i=0;
foreach ($_POST['attendance'] as $key => $value) {
	$array[$i]["attendance"] =$value; 
         $i++;
	
}
$i=0;
foreach ($_POST['assignment'] as $key => $value) {
	$array[$i]["assignment"] =$value; 
         $i++;
	
}
$i=0;
foreach ($_POST['finalAssessment'] as $key => $value) {
	$array[$i]["finalAssessment"] =$value; 
         $i++;
	
}
$i=0;
foreach ($_POST['extraCredit'] as $key => $value) {
	$array[$i]["extraCredit"] =$value; 
         $i++;
	
}



/* The values are stored in the array and it can be added in database  */

foreach ($array as $key => $value) {
	$sql="INSERT INTO marks (clzRollNo,subject,unitTest1,unitTest2,labPerformance,practicalExam,attendance,assignment,finalAssessment,extraCredit)values('$value[roll]','$value[subject]','$value[unitTest1]','$value[unitTest2]','$value[labPerformance]','$value[practicalExam]','$value[attendance]','$value[assignment]','$value[finalAssessment]','$value[extraCredit]')";
 			mysqli_query($conn,$sql);

 			$subject= $_GET['subject'];
  			 echo $subject;
  		 	 echo"<h1 align=center>". $subject ."</h1>";



 			header ( 'location: viewMarks.php');

}


}
?>




