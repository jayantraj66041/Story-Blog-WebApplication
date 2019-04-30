<?php include "../function/config.php"; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Log In</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body class="bg-white">
	<nav class="navbar shadow shadow-lg navbar-expand-lg navbar-dark bg-light">
		<div class="container">
			<a href="" class="navbar-brand">
				<img src="https://www.logogarden.com/wp-content/uploads/lg-logo-samples/Travel-Agency-Logo-2.png" width="100px">
			</a>
		</div>
	</nav>
	<div class="container my-5">
		<div class="row">
			<div class="col-lg-4 offset-4">
				<div class="card shadow shadow-lg">
					<div class="card-header bg-white">
						<h2 class="lead text-center"><b>Admin Log In</b></h2>
					</div>
					<div class="card-body">
						<form action="login.php" method="post">
							<div class="form-group">
								<label class="m-0 p-0 small text-muted">Email</label>
								<input type="text" class="form-control" name="email">
							</div>
							<div class="form-group">
								<label class="m-0 p-0 small text-muted">Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-block btn-info" name="send" value="Log In">
							</div>
						</form>
					</div>
					<?php
						if(isset($_POST['send'])){
							$a_email = $_POST['email'];
							$a_password = $_POST['password'];
							$query = mysql_query("select * from admin where a_email = '$a_email' and a_password = '$a_password'");
							$count = mysql_num_rows($query);
							if($count < 1){
						
					?>
					<div class="card-footer bg-white">
						<h6 class="text-danger">Oooops!! Email or Password is incorrect...</h6>
					</div>
					<?php } else{ 
						$_SESSION['email'] = $a_email;
						header("location: list.php");
						}
					} ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>