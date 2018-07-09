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

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

if (isset($_POST['submit'])) {

$i = 0;
foreach ($_POST as $val) {
			$roll = $val['roll'][$i];
			var_dump($roll);
			$subject=$val['subject'][$i];
			var_dump($val);
			$unitTest1=$val['unitTest1'][$i];
			$unitTest2=$val['unitTest2'][$i];
			$labPerformance=$val['labPerformance'][$i];
			$practicalExam=$val['practicalExam'][$i];
			$attendance=$val['attendance'][$i];
			$assignment=$val['assignment'][$i];
			$finalAssessment=$val['finalAssessment'][$i];
			$extraCredit=$val['extraCredit'][$i];
			$sql="INSERT INTO marks (clzRollNo,subject,unitTest1,unitTest2,labPerformance,practicalExam,attendance,assignment,finalAssessment,extraCredit)values('$roll','$subject','$unitTest1','$unitTest2','$labPerformance','$practicalExam','$attendance','$assignment','$finalAssessment','$extraCredit')";
			mysqli_query($conn,$sql); 
    $i++;
  } 
  
}
else{
	echo "not successfully";

}


?>



