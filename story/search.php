<?php include "function/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		Blog
	</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
	<div class="shadow shadow-lg">
		<?php include "function/nav.php"; ?>
	</div>
	<div class="container my-5">
		<div class="row">
			<div class="col-lg-10">
			<?php
			if(isset($_POST['searchbtn'])){
				$search = $_POST['search'];
				$data = call_searchdata("post"," p_header like '%$search%' or p_para1 like '%$search%' or p_para2 like '%$search%' or p_para3 like '%$search%' or p_para4 like '%$search%' or p_para5 like '%$search%'");
			}
			else{
				$cat = $_GET['cat'];
				$data = call_searchdata("post"," p_id = '$cat'");
			}
				foreach($data as $d){
			?>
				<div class="card my-5 border-danger shadow shadow-md">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<h3 class="text-dark text-muted float-left"><?=$d['p_header'];?></h3>
								<h5 class="float-right text-info h6"><i class="fas fa-calendar-times"></i> <?=$d['p_doc'];?></h5>
							</div>
						</div>
						<p class="lead"><?=$d['p_para1'];?></p>
						<p class="lead"><?=$d['p_para2'];?></p>
						<p class="lead"><?=$d['p_para3'];?></p>
						<p class="lead"><?=$d['p_para4'];?></p>
						<p class="lead"><?=$d['p_para5'];?></p>
						<p class="lead"><?=$d['p_para6'];?></p>
						<p class="lead"><?=$d['p_para7'];?></p>
						<p class="lead"><?=$d['p_para8'];?></p>
						<p class="lead"><?=$d['p_para9'];?></p>
						<p class="lead"><?=$d['p_para10'];?></p>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
		<div class="row mt-5">
		<?php
			$data = call_data("post");
			foreach($data as $d){
		?>
		<div class="col-lg-5 mt-3">
			<div class="card">
				<div class="card-body">
					<h3 class="float-left">
						<a href="search.php?cat=<?=$d['p_id'];?>" class="btn btn-white lead h3 text-dark">
							<?=$d['p_header'];?>
						</a>
					</h3>
					<h4 class="float-right text-info small"><i class="fas fa-calendar-times"></i> <?=$d['p_doc'];?></h4>
				</div>
			</div>
		</div>
		<?php } ?>
		</div>
	</div>
	<?php include "function/footer.php"; ?>
</body>
</html>