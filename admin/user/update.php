<?php include '../include/session.php'; ?>
<?php include '../include/connexion.php'; ?>
<?php
$id= $_GET['id'];
$req = $bd->prepare('select * from users where id=:id');
$req->execute(['id' => $id]);
$data = $req->fetch();
    if(isset($_POST['submit'])){
        $image = basename($_FILES['image']['name']);
        $path = "../../upload/".$image;
        $file = $_FILES['image']['tmp_name'];
        move_uploaded_file($file,$path);
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $Email = $_POST['Email'];
        $password = $_POST['password'];
        $req = $bd->prepare("UPDATE users SET NAME=?,last_name=?,Email=?,PASSWORD=?,image_user=? where id=?");
        $req->execute([$first_name,$last_name,$Email,$password,$image,$id]);
        header('location: index.php');
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
                                            <form method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="user">first name</label>
                                                        <input value="<?= $data['name'] ?>" type="text" name="first_name"
                                                            id="user" class="form-control" placeholder=""
                                                            aria-describedby="user">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pass">last name</label>
                                                        <input value="<?= $data['last_name'] ?>" type="text" name="last_name"
                                                            id="pass" class="form-control" placeholder=""
                                                            aria-describedby="pass">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input value="<?= $data['Email'] ?>" type="text" name="Email"
                                                            id="email" class="form-control" placeholder=""
                                                            aria-describedby="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="role">password</label>
                                                        <input value="<?= $data['password'] ?>" type="text" name="password"
                                                            id="role" class="form-control" placeholder=""
                                                            aria-describedby="role">
                                                    </div>
                                                    <img src="../../upload/<?= $data['image_user'] ?>" alt="" width="80">
                                                    <div class="form-group">
                                                        <label for="prix_vente">add image</label>
                                                        <input type="file" name="image" id="image" class="form-control" 
                                                            placeholder="" aria-describedby="image">
                                                    </div>
                                                    <div class="form-group">
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