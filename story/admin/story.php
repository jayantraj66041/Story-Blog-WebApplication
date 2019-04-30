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
					<a href="story.php" class="list-group-item my-css list-group-item-action active">Post Story</a>
					<a href="list.php" class="list-group-item my-css list-group-item-action">Story List</a>
					<a href="category.php" class="list-group-item my-css list-group-item-action">Category Control</a>
					<a href="message.php" class="list-group-item my-css list-group-item-action">Viewer Message</a>
					<a href="brand.php" class="list-group-item my-css list-group-item-action">Brand Control</a>
					<a href="setting.php" class="list-group-item my-css list-group-item-action">Setting</a>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="card shadow shadow-lg">
					<div class="card-header bg-white">
						<h3 class="text-center h3 text-muted">
							<b>Post Story</b>
						</h3>
					</div>
					<div class="card-body">
						<form action="story.php" method="post">
							<div class="form-group">
								<label class="small text-muted m-0 p-0">Heading</label>
								<input type="text" class="form-control" name="header">
							</div>
							<div class="form-group">
								<label class="small text-muted p-0 m-0">Paragraph 1</label>
								<textarea class="form-control" name="para1"></textarea>
							</div>
							<div class="form-group">
								<label class="small text-muted p-0 m-0">Paragraph 2</label>
								<textarea class="form-control" name="para2"></textarea>
							</div>
							<div class="form-group">
								<label class="small text-muted p-0 m-0">Paragraph 3</label>
								<textarea class="form-control" name="para3"></textarea>
							</div>
							<div class="form-group">
								<label class="small text-muted p-0 m-0">Paragraph 4</label>
								<textarea class="form-control" name="para4"></textarea>
							</div>
							<div class="form-group">
								<label class="small text-muted p-0 m-0">Paragraph 5</label>
								<textarea class="form-control" name="para5"></textarea>
							</div>
							<div class="form-group">
								<label class="small text-muted p-0 m-0">Paragraph 6</label>
								<textarea class="form-control" name="para6"></textarea>
							</div>
							<div class="form-group">
								<label class="small text-muted p-0 m-0">Paragraph 7</label>
								<textarea class="form-control" name="para7"></textarea>
							</div>
							<div class="form-group">
								<label class="small text-muted p-0 m-0">Paragraph 8</label>
								<textarea class="form-control" name="para8"></textarea>
							</div>
							<div class="form-group">
								<label class="small text-muted p-0 m-0">Paragraph 9</label>
								<textarea class="form-control" name="para9"></textarea>
							</div>
							<div class="form-group">
								<label class="small text-muted p-0 m-0">Paragraph 10</label>
								<textarea class="form-control" name="para10"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-block btn-success" name="post" value="Post">
							</div>
						</form>
						<?php
							if(isset($_POST['post'])){
								$array = [
									'p_header' => $_POST['header'],
									'p_para1' => $_POST['para1'],
									'p_para2' => $_POST['para2'],
									'p_para3' => $_POST['para3'],
									'p_para4' => $_POST['para4'],
									'p_para5' => $_POST['para5'],
									'p_para6' => $_POST['para6'],
									'p_para7' => $_POST['para7'],
									'p_para8' => $_POST['para8'],
									'p_para9' => $_POST['para9'],
									'p_para10' => $_POST['para10']
								];
								insert_data('post',$array);
								redirect('story');
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>