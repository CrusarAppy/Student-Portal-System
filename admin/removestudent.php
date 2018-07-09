<?php
$conn=mysqli_connect("localhost","root","","studentportal");

?><!DOCTYPE html>
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
  </ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<form method="post" action ="">
			<input type="text" placeholder="username" name="username">
			<input type ="submit" name="submit1" value="delete student with this username">
		</form>
  </div>
  <?php
  	if(isset($_POST['submit1'])){
  		$username=$_POST['username'];
  		$sql="DELETE FROM `commoninfo` WHERE Username='$username' and AccountType='student'";
  		mysqli_query($conn,$sql);

  	}
  ?>

</body>
</html>