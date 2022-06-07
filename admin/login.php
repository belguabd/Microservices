
<?php include '../include/sess.php' ?>
<?php include '../include/connection.php' ?>
<?php 
if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$pass = $_POST['password'];
    $req = $bd->prepare("SELECT * FROM users WHERE NAME=? AND PASSWORD=? ");
    $req->execute([$user,$pass]);
    $data= $req->fetch();
    $id=$data['id'];
	if($data['role']=='admin'){
		$_SESSION['user'] =$user;
		header('location: index.php');
	}else if($data['role']=='user'){
		$_SESSION['id_user'] = $id;
		header('location: ../user/index.php');
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login landing page</title>
</head>
<body>
    <section class="side">
        <img src="../upload/loginPerson.png" alt="">
    </section>
    <section class="main">
        <div class="login-container">
            <p class="title">Welcome</p>
            <div class="separator"></div>

            <form class="login-form" method="post">
                <div class="form-control">
                    <input type="text" placeholder="Username" name="user">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" name="password">
                    <i class="fas fa-lock"></i>
                    
                </div>
                <button class="submit" name="submit">Login</button> 
                <button style="background-color:white;" class="btn btn-link"><a href="sigin.php">create account</a></button> 


            </form>
        </div>
    </section>
    
</body>
</html>