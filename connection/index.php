<?php include ('server2.php'); ?>
<!doctype html>
<html>
<head>
	<title>login form</title>
</head>
<body>
	<?php
		include '../final/headerFooter/header.php'; ?>

	<div class ="header">
			<h2>Home Page</h2>
	</div>
	<div class="content">
			<?php if(isset($_SESSION['success'])) : ?>
				<div class="error_Sucess">
					<h3>
						<?php 
							echo $_SESSION['success'];
							unset($_SESSION['success']);
						?>
					</h3>
				</div>
			<?php endif ?> 

			<?php if(isset($_SESSION["username"])): ?>
				<p>Welcome <strong> <?php echo $_SESSION['username']; ?> </strong></p>
				<p><a href="" style="color:red;" >Logout</a></p>
			<?php endif ?>

	</div>

	<?php 
		include '../final/headerFooter/footer.php'; ?>
	

</body> 
</html>