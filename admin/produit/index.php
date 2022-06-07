<?php include '../include/session.php' ?>
<?php include '../include/connexion.php' ?>
<?php include '../include/header.php' ?>

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
                    <!-- <img class="logo-abbr" src="../assets/images/logo.png" alt="">
                    <img class="logo-compact" src="../assets/images/logo-text.png" alt="">
                    <img class="brand-title" src="../assets/images/logo-text.png" alt=""> -->
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
                    <!-- Start Alert -->
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($_GET['msg']) && $_GET['msg']=='added'): ?>
                            <div class="alert alert-success">Ajouter avec succes
                                <span data-dismiss="alert" class="close">&times;</span>
                            </div>
                            <?php endif; ?>
                            <?php if(isset($_GET['msg']) && $_GET['msg']=='deleted'): ?>
                            <div class="alert alert-danger">Supprimer avec succes
                                <span data-dismiss="alert" class="close">&times;</span>
                            </div>
                            <?php endif; ?>
                            <?php if(isset($_GET['msg']) && $_GET['msg']=='updated'): ?>
                            <div class="alert alert-warning">modifier avec succes
                                <span data-dismiss="alert" class="close">&times;</span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- End Alert -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Profile Datatable</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display min-w850">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>image</th>
                                                    <th>text</th>
                                                    <th>prix</th>
                                                    <th>last name user</th>
                                                    <th>name categirie</th>
                                                    <th>description</th>
                                                    <th>action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $req =  $bd->query("SELECT p.*,c.name,us.last_name FROM products p,categories c ,users us WHERE p.id_categori=c.id AND p.id_user=us.id");
                                                while($data = $req->fetch()):
                                            ?>
                                                <tr>
                                                    <!-- <td><img class="rounded-circle" width="35"
                                                            src="images/profile/small/pic1.jpg" alt=""></td> -->
                                                    <td scope="row"><?= $data['id'] ?></td>
                                                    <td><img width="80" src="../../upload/products-image/<?= $data['image_pro'] ?>" alt=""></td>
                                                    <td><?= $data['text'] ?></td>
                                                    <td><?= $data['prix'] ?></td>
                                                    <td><?= $data['last_name'] ?></td>
                                                    <td><?= $data['name'] ?></td>
                                                    <td><?= $data['description'] ?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="/admin/produit/update.php?id=<?= $data['id'] ?>"
                                                                class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                                    class="fa fa-pencil"></i></a>
                                                            <a href="/admin/produit/delete.php?id=<?= $data['id'] ?>" class="btn btn-danger shadow btn-xs sharp"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                    </div>
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