<?php 
session_start(); ?>
<html>
<head>
	<title>Registration</title>
	
	<link rel="stylesheet" type="text/css" href="../style/registerfinal.css">
		
	<script type="text/javascript" >
		function displayForm(type){
			var forms={
					'student':document.getElementById('student-form'),
					'teacher':document.getElementById('teacher-form')
					
				}
				for(var key in forms){
					forms[key].style.display='none';
				}
				if (type in forms)
					forms[type].style.display='block';
		}		
	</script>
	<script type="text/javascript" src="../javascript/validation.js"></script>
</head>
<body>
	<?php
		include '../../final/headerFooter/header.php'; ?>
		<div class="registrationForm"> 

	<form method="POST" action="../../final/connection/server2.php" name="registration-form" onsubmit="return validation()" enctype="multipart/form-data">
		Full Name: <input type="text" placeholder="Full Name" name="name"><br>
		<span id="nameError"></span><br>
		Username:<input type="text" placeholder="Username" name="username"><br>
		<span id="usernameError"></span><br>
		<div><?php if(isset($_SESSION['registererror'])){
			echo $_SESSION['registererror'];
			$_SESSION['registererror']="";
		}
		 ?>
		</div>
		Password:<input type="password" placeholder="*******"name="password"><br>
		<span id="passError"></span><br>
		Confirm Password:<input type="password" name="conPassword"><br>
		<span  id="confirmError"></span><br>
		Email Address:<input type="email" name="email"><br>
		<span  id="emailError"></span><br>
		<!-- Upload Image: <input type="file" name="fileToUpload"><br>
		<span  id="fileToUpload"></span><br><br>
 -->
		Account type:

			<select id="type" onchange='displayForm(value)' name="accountType">
				<option value='admin'>Admin</option>
				<option value='teacher'>Teacher</option>
				<option value='student'>Student</option>	
			</select>				
		
		<div id="student-form" >
		Pu Registration Number:<input type="text" name="puregis" placeholder=" The format is 2015-1-18-0094"><br>
		<span id="puregisError"></span><br>
		Clz Registration Number:<input type="text" name="clzregis"><br>
		<span id="clzregisError" ></span><br>
		Semester:
			<select name="semester">
			<option value="I">I</option>
			<option value="II">II</option>
			<option value="III">III</option>
			<option value="IV">IV</option>
			<option value="V">V</option> 
			<option value="VI">VI</option>
			<option value="VII">VII</option>
			<option value="VIII">VIII</option>
		</select>
		</div>
		<br>

		<div id="teacher-form">
		Teacher ID: <input type="text" name="teacherId"><br> 
		<span  id="teacherIdError"></span><br>
		Speciality:<input type="text" name="speciality"><br>
		<span  id="specialityError"></span><br>
		Enrollment Year:<input type="date" name="enroll"><bR>
		<span  id="EnrollError"></span><br>


		<fieldset>
			<legend>Which Subjects do you teach?</legend>
			<div>
				
				<label>Semester I
				<nav><ul>
				<li><input type="checkbox" name="courses[]" value="Physics">Physics</li>
				<li><input type="checkbox" name="courses[]" value="Programming in C">Programming in C</li>
				<li><input type="checkbox" name="courses[]" value="Problem Solving Techniques">Problem Solving Techniques</li>
				<li><input type="checkbox" name="courses[]" value="Engineering Mathematics I">Engineering Mathematics I</li>
				<li><input type="checkbox" name="courses[]" value="Fundamentals of IT">Fundamental of IT</li>
				<li><input type="checkbox" name="courses[]" value="Communication Techniques">Communication Technique</li>
		
				</ul>
				</nav>
				</label>
		 </div><br>
			<label>Semester II
				<nav><ul>			
				<li><input type="checkbox" name="courses[]" value="Engineering Mathematics II">Engineering Mathematics II</li>
				<li><input type="checkbox" name="courses[]" value="Web Technology">Web Technology</li>
				<li><input type="checkbox" name="courses[]" value="Object Oriented Programming in C++">Object Oriented Programming In C++</li>
				<li><input type="checkbox" name="courses[]" value="Mathematical Foundation of Computer Science">Mathenatical Foundation of Computer Science</li>
				<li><input type="checkbox" name="courses[]" value="Logic Circuits">Logic Circuit</li>
				<li><input type="checkbox" name="courses[]" value="Engineering Drawing">Engineering Drawing</li>
				</ul>
				</nav>

			</label><br>
			
			<label>Semester III
				<nav><ul>
				<li><input type="checkbox" name="courses[]" value="Data Structure and Algorithms">Data Structure and Algorithms</li>
				<li><input type="checkbox" name="courses[]" value="Programming in Java">Programming in JAVA</li>
				<li><input type="checkbox" name="courses[]" value="Probability  and Queuing Theory">Probability and Queuing theory</li>
				<li><input type="checkbox" name="courses[]" value="Software Engineering Fundamentals">Software Engineering Fundamentals </li>
				<li><input type="checkbox" name="courses[]" value="Engineering Mathematics III">Engineering Mathematics III</li>
				<li><input type="checkbox" name="courses[]" value="MIcroprocessor and Assembly Language Programming">Microprocessor and Assembly Programming Language</li>
				</ul>
				</nav>

			</label><br>
			
			<label>Semester IV
				<nav><ul>			
				<li><input type="checkbox" name="courses[]" value="Numerical Methods">Numerical Methods</li>
				<li><input type="checkbox" name="courses[]" value="Computer Organization and Architecture">Computer Organisation and Architecture</li>
				<li><input type="checkbox" name="courses[]" value="Computer Graphics">Computer Graphics</li>
				<li><input type="checkbox" name="courses[]" value="Object Oriented Design and Modelling through UML">Object Oriented Design & Modeling through UML</li>
				<li><input type="checkbox" name="courses[]" value="Project I">Project I</li>
				<li><input type="checkbox" name="courses[]" value="Database Management Systems">Database Management System</li>
				</li>
				</nav>
			</label><br>
			<label>Semester V
				<nav><ul>			
				<li><input type="checkbox" name="courses[]" value="Applied Operating Systems">Applied Operating System</li>
				<li><input type="checkbox" name="courses[]" value="Artificial Intelligence and Neural Networks">Artifical Intelligence & Neural Network</li>
				<li><input type="checkbox" name="courses[]" value="Simulation and Modeling">Simulation and Modeling</li>
				<li><input type="checkbox" name="courses[]" value="Analysis and Design of Algorithms">Analysis and Design of Algorithm</li>
				<li><input type="checkbox" name="courses[]" value="Organization and Management">Organisation and Mangemnet</li>
				<li><input type="checkbox" name="courses[]" value="System Programming">System Programming</li>
				</ul>
				</nav>
			</label><br>
			
			<label>Semester VI
				<nav><ul>
				<li><input type="checkbox" name="courses[]" value="Object Oriented Software Development">Object Oriented Software Development</li>
				<li><input type="checkbox" name="courses[]" value="Computer Networks">Computer Network</li>
				<li><input type="checkbox" name="courses[]" value="Engineering Economics">Engineering Economics</li>
				<li><input type="checkbox" name="courses[]" value="Project II">Project II</li>
				<li><input type="checkbox" name="courses[]" value="Multimedia Systems">Multimedia System</li>
				<li><input type="checkbox" name="courses[]" value="Principles of Programming Languages">Principal of Programming Language</li>
				</ul>
				</nav>
			</label><br>
			
			<label>Semester VII
				<nav><ul>
				<li><input type="checkbox" name="courses[]" value="Real Time Systems">Real Time Systems</li>
				<li><input type="checkbox" name="courses[]" value="Distributed Systems">Distributed Systems</li>
				<li><input type="checkbox" name="courses[]" value="Enterprise Application Development">Enterprise Application Development</li>
				<li><input type="checkbox" name="courses[]" value="Image Processing & Pattern Recognition">Image Processing & Pattern Recognition</li>
				<li><input type="checkbox" name="courses[]" value="Software Testing, Validation & Quality Assurance">Software Testing, Validation & Quality Assurance</li>
				<li><input type="checkbox" name="courses[]" value="Elective I">Elective I</li>
				</ul>
				</nav>
			</label><br>
			
			<label>Semester VIII
				<nav><ul>
				<li><input type="checkbox" name="courses[]" value="Network Programming">Network Programming</li>
				<li><input type="checkbox" name="courses[]" value="Software Projects Management">Software Projects Management</li>
				<li><input type="checkbox" name="courses[]" value="Elective II">Elective II</li>
				<li><input type="checkbox" name="courses[]" value="Project III">Project III</li>
				</ul>
				</nav>
			</label>
		</fieldset>
		<span  id="checkboxError"></span><br>
		Experience:<input type="text" name="experience"><br>
		<span  id="experienceError"></span><br>
	
	</div>


	<input type="submit" value="Register" name="Register"><br>
	<h5> Already a member? / <a href="../index.php">Sign In</a> </h5>
	</form>
 	</div>
	<?php
		include '../../final/headerFooter/footer.php'; ?>

</body>
</html>