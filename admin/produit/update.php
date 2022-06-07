<?php include '../include/session.php'; ?>
<?php include '../include/connexion.php'; ?>
<?php
$id= $_GET['id'];
$req = $bd->prepare('select * from products where id=:id');
$req->execute(['id' => $id]);
$data = $req->fetch();
if(isset($_POST['submit'])){
    $image = basename($_FILES['image']['name']);
    $path = "../../upload/products-image/".$image;
    $file = $_FILES['image']['tmp_name'];
    move_uploaded_file($file,$path);
    $Service_address = $_POST['titele_pro'];
    $description = $_POST['description'];
    $price= $_POST['prix'];
    $cat= $_POST['cat'];
    $user_id=$_POST['id_user'];
    $req = $bd->prepare("UPDATE products SET description=?, text=?,image_pro=?,prix=?,id_user=?,id_categori=? WHERE  id=?");
    $req->execute([$description,$Service_address,$image,$price,$user_id,$cat,$id]);
    header('location: /admin/produit/index.php?msg=updated');
}
?>
<?php include '../include/header.php'; ?>
    <body>
        <!--*******************
        Preloader start
    ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <!--*******************
        Preloader end
    ********************-->
        <!--**********************************
        Main wrapper start
    ***********************************-->
        <div id="main-wrapper">
            <!--**********************************
            Nav header start
        ***********************************-->
            <div class="nav-header">
                <a href="index.html" class="brand-logo">
                    <!-- <img class="logo-abbr" src="assets/images/logo.png" alt="">
                    <img class="logo-compact" src="assets/images/logo-text.png" alt="">
                    <img class="brand-title" src="assets/images/logo-text.png" alt=""> -->
                    <img class="brand-title" src="../assets/images/nvimage" alt="">
                </a>
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
            <!--**********************************
            Nav header end
        ***********************************-->

            <!--**********************************
            Chat box start
        ***********************************-->

            <!--**********************************
            Chat box End
        ***********************************-->
            <!--**********************************
            Header start
        ***********************************-->
            <?php include '../include/menu.php'; ?>
            <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

            <!--**********************************
            Sidebar start
        ***********************************-->
            <?php include '../include/sidebar.php'; ?>
            <!--**********************************
            Sidebar end
        ***********************************-->

            <!--**********************************
            Content body start
        ***********************************-->
            <div class="content-body">
                <div class="container-fluid">
                    <!-- Add Order -->
                    <div class="modal fade" id="addOrderModalside">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Event</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label class="text-black font-w500">Event Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-black font-w500">Event Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-black font-w500">Description</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary">Create</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-titles">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-12">
                        <div class="card">
                                            <div class="card-body">
                                            <form method="post"  enctype="multipart/form-data"  >
                                                    <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="libelle">add title</label>
                                                        <input value="<?= $data['text'] ?>" type="text" name="titele_pro" id="libelle" class="form-control"
                                                            placeholder="" aria-describedby="libelle">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="prix_achat">Description</label>
                                                        <textarea name="description"  id="" cols="30" rows="10" class="form-control"><?=$data['description']?></textarea>
                                                    </div>
                                                    <img src="../../upload/products-image/<?= $data['image_pro'] ?>" alt="">
                                                    <div class="form-group">
                                                        <label for="image">add image</label>
                                                        <input  type="file" name="image" id="image" class="form-control" 
                                                            placeholder="" aria-describedby="image">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="qte">prix</label>
                                                        <input  value="<?= $data['prix'] ?>" type="number" name="prix" id="qte" class="form-control"
                                                            placeholder="" aria-describedby="qte">
                                                    </div>
                                                    <div class="form-group">
                                                    <label for="cat">categorie</label>
                                                       <select name="cat" id="cat" class="form-control">
                                                           <?php $req=$bd->query("select * from categories");
                                                           while($dt=$req->fetch()):
                                                           ?>
                                                           <option <?=($data['id_categori']==$dt['id'])?'selected':''?> value="<?=$dt['id']?>"><?=$dt['name']?></option>
                                                           <?php endwhile;?>
                                                       </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user">user</label>
                                                       <select name="id_user"  class="form-control">
                                                           <?php $req=$bd->query("select * from users");
                                                           while($dt=$req->fetch()):
                                                           ?>
                                                           <option <?=($data['id_user']==$dt['id'])?'selected':''?> value="<?=$dt['id']?>"><?=$dt['name']?></option>
                                                           <?php endwhile;?>
                                                       </select>
                                                    </div>
                                                        <button name="submit"
                                                            class="btn btn-outline-warning">Modifier</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--**********************************
            Content body end
        ***********************************-->


            <!--**********************************
            Footer start
        ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/"
                            target="_blank">DexignZone</a> 2021</p>
                </div>
            </div>
            <!--**********************************
            Footer end
        ***********************************-->

            <!--**********************************
           Support ticket button start
        ***********************************-->

            <!--**********************************
           Support ticket button end
        ***********************************-->
        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->
        <?php include '../include/footer.php'; ?>