<?php include '../include/connection.php' ?>
<?php include '../include/sess.php' ?>
<?php $id_user=$_SESSION['id_user']?>
<?php
$id= $id_user;
$req = $bd->prepare('SELECT * FROM users where id=?');
$req->execute([$id]);
$data= $req->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	<title>Profile</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets-profile/css/bootstrap.css">
	<link rel="stylesheet" href="assets-profile/css/neon-core.css">
	<link rel="stylesheet" href="assets-profile/css/neon-theme.css">
</head>
<body >

<div class="page-container">
	<div class="main-content">
		<div class="profile-env">
			<header class="row">
				<div class="col-sm-2">
					<a href="#" class="profile-picture">
						<img src="../upload/<?=$data["image_user"]?>" class="img-responsive img-circle" />
					</a>
				</div>
				<div class="col-sm-7">
					<ul class="profile-info-sections">
						<li>
							<div class="profile-name">
								<strong>
									<a href="#" style="font-family: 'Roboto', sans-serif;font-weight: bold;"><?=$data["name"]?></a>
								</strong>
								
							</div>
						</li>
					</ul>
				</div>
			</header>
			<section class="profile-info-tabs">
				<div class="row">
					<div class="col-sm-offset-2 col-sm-10">
						<ul class="user-details">
							<li>
								<a href="#">
									<h4><label for="" style="font-family: 'Roboto', sans-serif;font-weight: bold;">Email  : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label for="" style="font-family: 'Roboto', sans-serif;font-weight: bold;color: blueviolet;"><?=$data["Email"]?></label></label></h4>
									<h4><label for="" style="font-family: 'Roboto', sans-serif;font-weight: bold;">last name: &nbsp;&nbsp;&nbsp;&nbsp;
										<label for="" style="font-family: 'Roboto', sans-serif;font-weight: bold;color: blueviolet;"><?=$data["last_name"]?></label></label></h4>
								</a>
							</li>
							<li>
							
							</li>
						</ul>
						<!-- tabs for the profile links -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#">Profile</a></li>
							<li><a href="#">Edit Profile</a></li>
						</ul>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>




</body>
</html>