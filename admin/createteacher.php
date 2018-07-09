<?php


?>
<!DOCTYPE html>
<html>
<head>
<style>
  body {
      margin: 0;
  }

  ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 25%;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
  }

  li a {
      display: block;
      color: #000;
      padding: 8px 0 8px 16px;
      text-decoration: none;
  }

  li a.active {
      background-color:#43A286;
      color: white;
  }

  li a:hover:not(.active) {
      background-color: #555;
      color: white;
  }
  html{
    font-family: sans-serif;
  }
  header{
    background: #00795f;
    width: 100%;
    padding: 10px 0;
    color: white;
    text-align: center;
  }
  footer{
      background: #01101C; color: #fbfbfb;  text-align: center; padding: 2em 0;
  }
  .dropbtn {
    background-color: #43A286;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width :100%;
    display:block ;
  }
  .dropbtn :hover{
    color:#43A286;
  }
    .dropdown {
      position: relative;
      display: inline-block;
  }

  .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  }

  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
  }

  .dropdown-content a:hover {background-color: #f1f1f1}

  .dropbtn:hover .dropdown-content {
      display: block;

  }

  .dropdown:hover .dropbtn {
      background-color: #3e8e41;
  }

</style>
</head>
  <body>
    <header>
      <h1> Gandaki College of Engineering and Science<br></h1>
       <span id="lamachour"> Lamachaur,Pokhara </span>
    </header>

  <ul>
    <li>
      <a class="active" href="#home">Home</a></li>
    <li>      
        <div class="dropbtn">Teacher
          <div class="dropdown-content">
            <a href="listteacher.php">List</a>
            <a href="createteacher.php">Create</a>
            <a href="removeteacher.php">Remove</a>    
          </div>
        </div>
    </li>
    <li>      
        <div class="dropbtn">Student
          <div class="dropdown-content">
            <a href="liststudent.php">List</a>
            <a href="createstudent.php">Create</a> 
            <a href="removestudent.php">Remove</a>   
          </div>
        </div>
    </li>
    <li>      
        <div class="dropbtn">Admin
          <div class="dropdown-content">
            <a href="listadmin.php">List</a>
            <a href="createadmin.php">Create</a> 
            <a href="removeadmin.php">remove</a>   
          </div>
        </div>
    </li>
  </ul>	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<form method="post" action="">
			<input type="text" placeholder="name" name="name"><br>
			<input type="text" placeholder="username" name="username"><br>
			<input type="password" placeholder="password" name="password"><br>
			<input type="text" placeholder="email" name="email"><br>
			<input type="text" placeholder="Teacher Id" name="teacherid"><br>
			<input type="date" placeholder="Enroll Year" name="enrollyear"><br>
			<input type="text" placeholder="speciality" name="speciality"><br>
			<input type="text" placeholder="experience" name="experience"><br>
			<fieldset>
			<legend>Select Subject for the teacher</legend>
			<input type="checkbox" name="courses[]" value="Physics">Physics<br>
				<input type="checkbox" name="courses[]" value="Programming in C">Programming in C<br>
				<input type="checkbox" name="courses[]" value="Problem Solving Techniques">Problem Solving Techniques<br>
				<input type="checkbox" name="courses[]" value="Engineering Mathematics I">Engineering Mathematics I<br>
				<input type="checkbox" name="courses[]" value="Fundamentals of IT">Fundamental of IT<br>
				<input type="checkbox" name="courses[]" value="Communication Techniques">Communication Technique<br>
<input type="checkbox" name="courses[]" value="Engineering Mathematics II">Engineering Mathematics II<br>
				<input type="checkbox" name="courses[]" value="Web Technology">Web Technology<br>
				<input type="checkbox" name="courses[]" value="Object Oriented Programming in C++">Object Oriented Programming In C++<br>
				<input type="checkbox" name="courses[]" value="Mathematical Foundation of Computer Science">Mathenatical Foundation of Computer Science<br>
				<input type="checkbox" name="courses[]" value="Logic Circuits">Logic Circuit<br>
				<input type="checkbox" name="courses[]" value="Engineering Drawing">Engineering Drawing<br>
<input type="checkbox" name="courses[]" value="Data Structure and Algorithms">Data Structure and Algorithms<br>
				<input type="checkbox" name="courses[]" value="Programming in Java">Programming in JAVA<br>
				<input type="checkbox" name="courses[]" value="Probability  and Queuing Theory">Probability and Queuing theory<br>
				<input type="checkbox" name="courses[]" value="Software Engineering Fundamentals">Software Engineering Fundamentals<br> 
				<input type="checkbox" name="courses[]" value="Engineering Mathematics III">Engineering Mathematics III<br>
				<input type="checkbox" name="courses[]" value="MIcroprocessor and Assembly Language Programming">Microprocessor and Assembly Programming Language<br>
<input type="checkbox" name="courses[]" value="Numerical Methods">Numerical Methods<br>
				<input type="checkbox" name="courses[]" value="Computer Organization and Architecture">Computer Organisation and Architecture<br>
				<input type="checkbox" name="courses[]" value="Computer Graphics">Computer Graphics<br>
				<input type="checkbox" name="courses[]" value="Object Oriented Design and Modelling through UML">Object Oriented Design & Modeling through UML<br>
				<input type="checkbox" name="courses[]" value="Project I">Project I<br>
				<input type="checkbox" name="courses[]" value="Database Management Systems">Database Management System<br>
				
<input type="checkbox" name="courses[]" value="Applied Operating Systems">Applied Operating System<br>
				<input type="checkbox" name="courses[]" value="Artificial Intelligence and Neural Networks">Artifical Intelligence & Neural Network<br>
				<input type="checkbox" name="courses[]" value="Simulation and Modeling">Simulation and Modeling<br>
				<input type="checkbox" name="courses[]" value="Analysis and Design of Algorithms">Analysis and Design of Algorithm<br>
				<input type="checkbox" name="courses[]" value="Organization and Management">Organisation and Mangemnet<br>
				<input type="checkbox" name="courses[]" value="System Programming">System Programming<br>
<input type="checkbox" name="courses[]" value="Object Oriented Software Development">Object Oriented Software Development<br>
				<input type="checkbox" name="courses[]" value="Computer Networks">Computer Network<br>
				<input type="checkbox" name="courses[]" value="Engineering Economics">Engineering Economics<br>
				<input type="checkbox" name="courses[]" value="Project II">Project II<br>
				<input type="checkbox" name="courses[]" value="Multimedia Systems">Multimedia System<br>
				<input type="checkbox" name="courses[]" value="Principles of Programming Languages">Principal of Programming Language<br>

<input type="checkbox" name="courses[]" value="Real Time Systems">Real Time Systems<br>
				<input type="checkbox" name="courses[]" value="Distributed Systems">Distributed Systems<br>
				<input type="checkbox" name="courses[]" value="Enterprise Application Development">Enterprise Application Development<br>
				<input type="checkbox" name="courses[]" value="Image Processing & Pattern Recognition">Image Processing & Pattern Recognition<br>
				<input type="checkbox" name="courses[]" value="Software Testing, Validation & Quality Assurance">Software Testing, Validation & Quality Assurance<br>
				<input type="checkbox" name="courses[]" value="Elective I">Elective I<br>

<input type="checkbox" name="courses[]" value="Network Programming">Network Programming<br>
				<input type="checkbox" name="courses[]" value="Software Projects Management">Software Projects Management<br>
				<input type="checkbox" name="courses[]" value="Elective II">Elective II<br>
				<input type="checkbox" name="courses[]" value="Project III">Project III<br>s

			</label>
		</fieldset>	
			<input type="submit" name="submit1" value="Create this teacher"><br>		
		</form>

  </div>
  <?php
   if (isset($_POST["submit1"])){
	    	$conn=mysqli_connect("localhost","root","","studentportal");
	    	$username=$_POST["username"];
			$password=$_POST["password"];
			$name=$_POST["name"];
			$email=$_POST["email"];
			$teacherid=$_POST["teacherid"];
			$enrollyear=$_POST["enrollyear"];
			$speciality=$_POST["speciality"];
			$experience=$_POST['experience'];
			$sql="INSERT INTO commoninfo (Name,Username,Password,Email,AccountType) values ('$name','$username','$password','$email','student')";
			mysqli_query($conn,$sql);
			$sql1="INSERT INTO studentdetailinfo (TeacherId,EnrollYear,Speciality,Experience,id) values ('$teacherid','$enrollyear','$speciality','$experience',(SELECT LAST_INSERT_ID()))";
			mysqli_query($conn,$sql1);

			$course=$_POST["courses"];
			$arr_length = count($course);
			$sub = "";
			for ($i=0; $i<$arr_length ; $i++){
			$sub = $course[$i];
			$sql4="INSERT INTO subjectteach (`Subject`,`TeacherId` ) VALUES ('$sub','$teacherid')";
			mysqli_query($conn,$sql4);
			
		}
	    }
?>
</body>
</html>