<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<title>login form</title>
    <link rel="stylesheet" type="text/css" href="index.css">	
</head>
	<body>
		
		<?php
			include '../final/headerFooter/header.php'; ?>
		<div class="loginForm">
			<form  method="POST" action="login/loginfile.php">
				<input type="text" placeholder="username" name="username"><br>
				<input type="password" placeholder="*********" name="password"><br>
				<?php 
					if(isset($_SESSION['error'])){
						echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
						unset($_SESSION['error']);
						}
				 ?>
				 <br>
				<input type="submit" value="LOGIN"><br>
				<h5>Not a member ? / <a href="../final/registerOperation/registerfinal.php"> Sign Up</a></h5>
			</form>
            <div>
                <?php if (isset($_SESSION['message'])){
                    echo "<p style='color:red'>" .$_SESSION['message'] . "</p>";
                  
                }
                 ?></div>
		</div>
		<?php include '../final/headerFooter/footer.php'; ?>

	</body> 
</html>