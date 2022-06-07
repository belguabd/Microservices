<?php include 'include/connection.php' ?>
<?php include 'include/sess.php' ?>
<?php
$id= $_GET['id'];
$req = $bd->prepare("SELECT pr.image_pro,pr.Buyers,pr.Responsing,us.name,pr.prix,us.image_user,pr.evaluation,us.last_name,us.Email,pr.description FROM products pr,users us 
WHERE pr.id_user=us.id AND pr.id=?");
$req->execute([$id]);
$data= $req->fetch();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="brahim.css">
    <title>page detaile</title>
  </head>
  <body>
<div class="container mt-5">
    <div class="row m-5">
        <div class="col-lg-4 col-sm-12 bg-light  rounded" id="col1" style="padding: 10px;">
          <h5 class="mt-2">command card</h5>
          <hr class="">
            <div class="row" style="direction: rtl;">
              
            <div class="col-6">
                
                <p><?=$data["Responsing"]?></p>
                <p><?=$data["Buyers"]?></p>
                <p><?=$data["prix"]?>$</p>
              </div>
              <div class="col-6">
                <p>Responsing</p>
                <p>Buyers</p>
                <p>Begin From</p>
              </div>
            </div>
            <hr>
            <h5>Command Owner</h5>
            <img src="../upload/<?=$data["image_user"]?>" alt="" class="rounded-circle mt-1" style="width: 55px; height:55px;">
            <h6 style="position:relative; bottom:46px; left:64px;"><?=$data["name"]?> <?=$data["last_name"]?></h6>
            <P class="text-muted" style="position:relative; bottom:52px; left:70px; font-size: smaller;"><?=$data["evaluation"]?></P>
            <a href="admin/login.php"><div class="btn btn-outline-success" style="position:relative; bottom: 30px; left: 30px;">Contact</div></a>
        </div>
        <div class="col-lg-1 col-sm-12"></div>
        <div class="col-lg-7  col-sm-12 bg-light rounded" style="padding: 10px;">
            <img src="upload/products-image/<?=$data["image_pro"]?>" alt="" class="w-100 mt-2">
            <p class="mt-3"><?=$data["description"]?></p>
              
          
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>