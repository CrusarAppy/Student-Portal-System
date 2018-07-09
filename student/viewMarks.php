<?php 
session_start();
	  include "studentdash.php";
	 
    $conn=mysqli_connect("localhost","root","",'studentportal');
    $subject=$_GET['subject'];
    
    echo"<h1 align=center>". $subject ."</h1>";

	echo "<table border=1 width=100% padding=20><th>Clz roll no.</th><th>Unit Test1</th><th>Unit Test 2</th><th>Lab Performance</th><th>Practical Exam</th><th>Attendance</th><th>Assignment</th><th>Final Assessment</th><th>Extra Credit</th><th>Total</th>";
		$sql="SELECT `clzRollNo`,unitTest1,unitTest2,labPerformance,practicalExam,attendance,assignment,finalAssessment,extraCredit,(unitTest1+unitTest2+labPerformance+practicalExam+attendance+assignment+finalAssessment+extraCredit) as Total from marks where subject ='$subject'";
		$result=mysqli_query($conn, $sql);
		while($row=mysqli_fetch_assoc($result)){
			echo"<tr>";
			echo "<td>".$row['clzRollNo']."</td>";
			echo "<td>".$row['unitTest1']."</td>";
			//echo "<td>".$row['code']."</td>";
			echo "<td>".$row['unitTest2']."</td>";
			echo "<td>".$row['labPerformance']."</td>";
			echo "<td>".$row['practicalExam']."</td>";
			echo "<td>".$row['attendance']."</td>";
			echo "<td>".$row['assignment']."</td>";
			echo "<td>".$row['finalAssessment']."</td>";
			echo "<td>".$row['extraCredit']."</td>";
			echo "<td>" .$row['Total']. " </td>";
			echo"</tr>";
		}
	echo "</table>";

	?>
	<html>
	<head>
		<title></title>
		<script type="text/javascript">
			function myFunction() {
    		window.print();
			}
		</script>
	</head>
	<body>
		<button onclick="myFunction()">Print this page</button>
	
	</body>
	</html>