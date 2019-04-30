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
					<a href="list.php" class="list-group-item my-css list-group-item-action active">Story List</a>
					<a href="category.php" class="list-group-item my-css list-group-item-action">Category Control</a>
					<a href="message.php" class="list-group-item my-css list-group-item-action">Viewer Message</a>
					<a href="brand.php" class="list-group-item my-css list-group-item-action">Brand Control</a>
					<a href="setting.php" class="list-group-item my-css list-group-item-action">Setting</a>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="card shadow shadow-lg">
					<div class="card-header bg-white">
						<h3 class="text-muted float-left">
							<b>Story List</b>
						</h3>
						<form action="list.php" method="post" class="form-inline float-right">
							<div class="form-group">
								<input type="text" placeholder="Search here..." class="form-control" name="search">
							</div>
							<div class="form-group">
								<input type="submit" class="btn ml-2 btn-primary" name="searchbtn" value="Search">
							</div>
						</form>
					</div>
					<div class="card-body">
						<table class="table table-sm table-striped table-hover table-bordered">
							<tr>
								<th>Sr. No.</th>
								<th>DOC</th>
								<th>Title</th>
								<th>Content</th>
								<th>Delete</th>
							</tr>
							<?php
							if(isset($_POST['searchbtn'])){
								$search = $_POST['search'];
								$data = call_searchdata("post"," p_header like '%$search%' or p_para1 like '%$search%' or p_para2 like '%$search%' or p_para3 like '%$search%' or p_para4 like '%$search%' or p_para5 like '%$search%' or p_para6 like '%$search%' or p_para7 like '%$search%' or p_para8 like '%$search%' or p_para9 like '%$search%' or p_para10 like '%$search%'");

								echo "<h1 class='text-danger h3'>Your search ".strtoupper($search)."...</h1>";
								if(empty($data)){
									echo "<tr><td colspan='5'><p class='text-danger h3 text-center'>No result found</p></td></tr>";
								}
							}
							else{
								$data = call_data("post");
							}
							foreach($data as $d){
							?>
							<tr>
								<td><?=$d['p_id'];?></td>
								<td><?=$d['p_doc'];?></td>
								<td><a href="../search.php?cat=<?=$d['p_id'];?>" target="_blank" class="text-dark"><?=substr($d['p_header'],0,12);?>..</a></td>
								<td><?=substr($d['p_para1'],0,25);?>...</td>
								<td>
									<a href="list.php?del=<?=$d['p_id'];?>" class="btn btn-sm btn-danger">X</a>
								</td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	if(isset($_GET['del'])){
		$del = $_GET['del'];
		delete_data("post","p_id = '$del'");
		redirect("list");
	}
?>