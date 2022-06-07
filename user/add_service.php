<?php include '../include/connection.php' ?>
<?php include '../include/sess.php' ?>
<?php $id_user=$_SESSION['id_user']?>
<?php
if(isset($_POST['submit'])){
    $image = basename($_FILES['image']['name']);
  
    $path = "../upload/products-image/".$image;
    $file = $_FILES['image']['tmp_name'];
    move_uploaded_file($file,$path);
    $Service_address = $_POST['Service-address'];
    $description = $_POST['description'];
    $price= $_POST['price'];
    $cat = $_POST['cat'];
    $req = $bd->prepare("insert into products(description,text,image_pro,prix,id_user,id_categori)values(?,?,?,?,?,?)");
    $req->execute([$description,$Service_address,$image,$price,$id_user,$cat]);
   header('location: ../user/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>add service</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/all.css">
    

</head>

<body style="position:relative; top: -160px;">


    <!-- header-bg -->

    <div class="wrapper">
        <div class="container-fluid" >
            <!-- Page-Title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title"></h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                   
                            <li class="breadcrumb-item active"><a href="index.php"><h4><i class="fa-solid fa-person-walking-arrow-right"></i></h4></a></li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Service address</label>
                                <div class="col-sm-10">
                                    <input class="form-control"  name="Service-address"type="text"  id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select name="cat" id="cat" class="form-control">
                                    <?php $req=$bd->query("select * from categories");
                                                           while($dt=$req->fetch()):?>
                                        <option value="<?=$dt['id']?>"><?=$dt['name']?></option>
                                        <?php endwhile;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                   <textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-url-input" class="col-sm-2 col-form-label">Service Gallery</label>
                                <div class="col-sm-10">
                                <input type="file" name="image" id="image" class="form-control" 
                                                            placeholder="" aria-describedby="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Service price</label>
                                <div class="col-sm-10">
                                    <input class="form-control"  name="price"type="text" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label  class="col-sm-2 col-form-label"></label>
                                <button name="submit" class="btn btn-primary" class="form-control" ><i class="fa-thin fa-paper-plane-top"></i>Ajouter</button>
                             </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->   

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>