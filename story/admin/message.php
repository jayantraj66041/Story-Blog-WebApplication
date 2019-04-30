<?php include "../function/config.php"; session_start(); if(!isset($_SESSION['email'])){header("location: login.php");} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/my.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<?php include "nav.php"; ?>
	<br><br><br><br>
	<div class="container my-5">
		<div class="row">
			<div class="col-lg-3">
				<div class="list-group shadow shadow-md">
					<a href="story.php" class="list-group-item my-css list-group-item-action">Post Story</a>
					<a href="list.php" class="list-group-item my-css list-group-item-action">Story List</a>
					<a href="category.php" class="list-group-item my-css list-group-item-action">Category Control</a>
					<a href="message.php" class="list-group-item my-css list-group-item-action active">Viewer Message</a>
					<a href="brand.php" class="list-group-item my-css list-group-item-action">Brand Control</a>
					<a href="setting.php" class="list-group-item my-css list-group-item-action">Setting</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>