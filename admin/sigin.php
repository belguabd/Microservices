
<?php include '../include/sess.php' ?>
<?php include '../include/connection.php' ?>
<?php 
if(isset($_POST['submit'])){
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
    $Email = $_POST['Email'];
    if ($_POST["password"] === $_POST["confirm_password"]) {
        $password = $_POST['password'];
     }
    $req = $bd->prepare("INSERT INTO users(name,last_name,Email,PASSWORD,image_user)VALUES(?,?,?,?,default) ");
    $req->execute([$first_name,$last_name,$Email,$password]);
    header('location: login.php');
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
                    <input type="text" placeholder="first name" name="first_name">
                </div>
                <div class="form-control">
                    <input type="text" placeholder="last name" name="last_name">
                </div>
                <div class="form-control">
                    <input type="text" placeholder="email" name="Email">
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="form-control">
                    <input type="password" placeholder="confirm password" name="confirm_password">
                </div>
                <button class="submit" name="submit">sign up</button>
            </form>
        </div>
    </section>
    
</body>
</html>