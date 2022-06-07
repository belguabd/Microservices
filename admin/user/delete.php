<?php include '../include/session.php'; ?>
<?php include '../../include/connection.php' ?>
<?php
$id= $_GET['id'];
$req = $bd->prepare('delete from users where id=?');
$req->execute([$id]);
header('location: /admin/user/index.php?msg=deleted');