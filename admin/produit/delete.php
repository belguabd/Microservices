<?php include '../include/session.php'; ?>
<?php include '../../include/connection.php' ?>
<?php
$id= $_GET['id'];
$req = $bd->prepare('delete from products where id=?');
$req->execute([$id]);
header('location: /admin/produit/index.php?msg=deleted');